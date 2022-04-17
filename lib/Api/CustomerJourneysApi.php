<?php

/**
 * CustomerJourneysApi
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
use MailchimpMarketing\ApiTrait;

class CustomerJourneysApi
{
    use ApiTrait;

    const END_POINT = '/customer-journeys';

    public function trigger($journey_id, $step_id, $body)
    {
        return $this->triggerWithHttpInfo($journey_id, $step_id, $body);
    }

    public function triggerWithHttpInfo($journey_id, $step_id, $body)
    {
        $request = $this->triggerRequest($journey_id, $step_id, $body);

        return $this->performRequest($request);
    }

    protected function triggerRequest($journey_id, $step_id, $body): Request
    {
        // verify the required parameter 'journey_id' is set
        $this->checkRequiredParameter($journey_id);
        // verify the required parameter 'step_id' is set
        $this->checkRequiredParameter($step_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/journeys/{journey_id}/steps/{step_id}/actions/trigger';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'journey_id', $journey_id);
        $this->pathParam($resourcePath, 'step_id', $step_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }
}
