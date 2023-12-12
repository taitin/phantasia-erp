<?php

namespace App\Services;

use LINE\LINEBot;
use LINE\LINEBot\HTTPClient;

class MyLINEBot extends LINEBot
{

    /** @var string */
    private $channelSecret;
    /** @var string */
    private $endpointBase;
    /** @var HTTPClient */
    private $httpClient;

    /**
     * LINEBot constructor.
     *
     * @param HTTPClient $httpClient HTTP client instance to use API calling.
     * @param array $args Configurations.
     */
    public function __construct(HTTPClient $httpClient, array $args)
    {
        $this->httpClient = $httpClient;
        $this->channelSecret = $args['channelSecret'];

        $this->endpointBase = LINEBot::DEFAULT_ENDPOINT_BASE;
        if (array_key_exists('endpointBase', $args) && !empty($args['endpointBase'])) {
            $this->endpointBase = $args['endpointBase'];
        }
    }



    /**
     * Gets specified group's profile through API calling.
     *
     * @param string $userId The user ID to retrieve profile.
     * @return Response
     */
    public function getGroupSummary($groupId)
    {

        $response = $this->httpClient->get($this->endpointBase . '/v2/bot/group/' . urlencode($groupId) . '/summary');
        return json_decode($response->getBody()->getContents(), true);
    }
}
