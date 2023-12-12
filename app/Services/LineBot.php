<?php

namespace App\Services;

use LINE\LINEBot as LINELINEBot;

class LINEBot extends LINELINEBot
{
    /**
     * Gets specified group's profile through API calling.
     *
     * @param string $userId The user ID to retrieve profile.
     * @return Response
     */
    public function getGroupSummary($groupId)
    {

        return $this->httpClient->get($this->endpointBase . '/v2/bot/group/' . urlencode($groupId)) . '/summary';
    }
}
