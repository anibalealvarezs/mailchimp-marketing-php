<?php

/**
 * RootApi
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

class RootApi
{
    use ApiTrait;

    const END_POINT = '/';

    public function getRoot($fields = null, $exclude_fields = null)
    {
        return $this->getRootWithHttpInfo($fields, $exclude_fields);
    }

    public function getRootWithHttpInfo($fields = null, $exclude_fields = null)
    {
        $request = $this->getRootRequest($fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getRootRequest($fields = null, $exclude_fields = null): Request
    {

        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }
}
