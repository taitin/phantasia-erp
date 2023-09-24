<?php

namespace App\Services;

use App\Models\Member;
use App\Services\BubbleContainerBuilder as ServicesBubbleContainerBuilder;
use Google\Service\CloudHealthcare\Message;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\BoxComponentBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\ButtonComponentBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\ImageComponentBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\TextComponentBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ContainerBuilder\BubbleContainerBuilder;
use LINE\LINEBot\MessageBuilder\FlexMessageBuilder;
use LINE\LINEBot\MessageBuilder\ImageMessageBuilder;
use LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use LINE\LINEBot\MessageBuilder\RawMessageBuilder;
use LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder;
use Illuminate\Support\Facades\Log;


class LineService
{

    public function getLoginBaseUrl()
    {

        // 組成 Line Login Url
        $url = config('line.authorize_base_url') . '?';
        $url .= 'response_type=code';
        $url .= '&client_id=' . config('line.channel_id');
        $url .= '&redirect_uri=' . urlencode(config('app.url') . '/callback/login');
        $url .= '&state=test'; // 暫時固定方便測試
        $url .= '&scope=openid%20profile';

        return $url;
    }

    public function getLineToken($code)
    {
        $client = new Client();
        $response = $client->request('POST', config('line.get_token_url'), [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => config('app.url') . '/callback/login',
                'client_id' => config('line.channel_id'),
                'client_secret' => config('line.secret')
            ]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getUserProfile($token)
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept'        => 'application/json',
        ];
        $response = $client->request('GET', config('line.get_user_profile_url'), [
            'headers' => $headers
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * pushMessage
     *
     * @param  mixed $data[
     * 'message'=>'send message',
     * 'url' =>'link url',
     * 'member_id'=>3,   **member id in one person,
     * 'members'=>[1,2,3]]**member ids in assign persons
     * ]
     * @return void
     */
    public function pushMessage($social_id, $data)
    {
        $content[] =  new TextComponentBuilder($data['message'], null, 'xxl', null, 'center', null, true);
        if (!empty($data['url'])) {
            $actionBuilder = new UriTemplateActionBuilder('前往查看', $data['url']);
            $content[] =  new ButtonComponentBuilder($actionBuilder);
        }
        $body = new BoxComponentBuilder('vertical', $content);
        $containerBuilder = new BubbleContainerBuilder('ltr', null, null, $body);
        $messageBuilder = new FlexMessageBuilder($data['message'], $containerBuilder);
        $response = \LINEBot::pushMessage($social_id,  $messageBuilder);

        if (isset($response)) {
            if ($response->isSucceeded()) {
                return 'Succeeded!';
            }

            // Failed
            return  $response->getHTTPStatus() . ' ' . $response->getRawBody();
        }
    }

    /**
     * replyMessage
     *
     * @param  mixed $data[
     * 'reply_token=>'reply_token
     * 'message'=>'send message',
     * 'url' =>'link url',
     * 'image' =>'image',
     * ]
     * @return void
     */
    public function replyMessage($reply_token, $inputs)
    {
        if (!isset($reply_token)) return 'argument fault';

        $multiMessageBuilder = new MultiMessageBuilder();
        foreach ($inputs as $data) {
            if (isset($data['url']) || isset($data['text_buttons'])) {
                $content[] =  new TextComponentBuilder($data['message'], null, 'sm', null, 'center', null, true);
                $body = new BoxComponentBuilder('vertical', $content, null, 'sm', 'sm');
                $content = [];
                if (!empty($data['url'])) {
                    $actionBuilder = new UriTemplateActionBuilder('請點我', ($data['url']));
                    $content[] =  new ButtonComponentBuilder($actionBuilder, null, 'none', 'sm', null, '#336666');
                }
                if (!empty($data['text_buttons'])) {

                    foreach ($data['text_buttons'] as $button) {
                        $actionBuilder = new MessageTemplateActionBuilder($button['label'], $button['text']);
                        $content[] =  new ButtonComponentBuilder($actionBuilder, null, 'lg', 'sm', 'secondary', null);
                    }
                }
                $footer = new BoxComponentBuilder('vertical', $content, null, 'sm', 'sm');

                $containerBuilder = new ServicesBubbleContainerBuilder('ltr', null, null, $body, $footer);

                $messageBuilder = new FlexMessageBuilder($data['message'], $containerBuilder);
                // $messageBuilder->setWidth('40%');
            } else if (isset($data['image'])) {
                $messageBuilder  =  new ImageMessageBuilder($data['image'], $data['image']);
            } else {
                $messageBuilder  =  new TextMessageBuilder($data['message']);
            }
            $multiMessageBuilder->add($messageBuilder);
        }
        $httpClient = new CurlHTTPClient(env('LINE_BOT_CHANNEL_ACCESS_TOKEN'));
        $LINE = new LINEBot($httpClient, ['channelSecret' => env('LINE_SECRET')]);
        $response =  $LINE->replyMessage($reply_token, $multiMessageBuilder);
        if (isset($response)) {
            if ($response->isSucceeded()) {
                return 'Succeeded!';
            }

            // Failed
            return  $response->getHTTPStatus() . ' ' . $response->getRawBody();
        }
    }
}
