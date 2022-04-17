<?php

/**
 * PingApi
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

use MailchimpMarketing\ApiTrait;

class PingApi
{
    use ApiTrait;

    const END_POINT = '/ping';

    public function get()
    {
        $response = $this->getWithHttpInfo();
        return $response;
    }

    public function getWithHttpInfo()
    {
        $request = $this->getRequest();

        return $this->performRequest($request);
    }

    protected function getRequest()
    {

        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }
}
