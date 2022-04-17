<?php

/**
 * ActivityFeedApi
 * PHP version 8.1
 *
 * @category Class
 * @package  MailchimpMarketing
 * @author   Swagger Codegen team / PHP 8.1 compatibility by Aníbal Álvarez
 * @link     https://github.com/anibalealvarezs/mailchimp-marketing-php
 */

/**
 * Mailchimp Marketing API
 *
 * OpenAPI spec version: 3.0.74
 * Contact: anibalealvarezs@gmail.com
 */

namespace MailchimpMarketing\Api;

use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use MailchimpMarketing\ApiTrait;

class ActivityFeedApi
{
    use ApiTrait;

    const END_POINT = '/activity-feed';

    public function getChimpChatter($count = '10', $offset = '0')
    {
        $response = $this->getChimpChatterWithHttpInfo($count, $offset);
        return $response;
    }

    public function getChimpChatterWithHttpInfo($count = '10', $offset = '0')
    {
        $request = $this->getChimpChatterRequest($count, $offset);

        return $this->performRequest($request);
    }

    protected function getChimpChatterRequest($count = '10', $offset = '0'): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ActivityFeedApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/chimp-chatter';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }
}
