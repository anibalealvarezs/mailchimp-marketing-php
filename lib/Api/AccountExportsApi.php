<?php

/**
 * AccountExportsApi
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

class AccountExportsApi
{
    use ApiTrait;

    const END_POINT = '/account-exports';

    public function listAccountExports($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->listAccountExportsWithHttpInfo($fields, $exclude_fields, $count, $offset);
    }

    public function listAccountExportsWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->listAccountExportsRequest($fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function listAccountExportsRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling AccountExportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function createAccountExport($body)
    {
        return $this->createAccountExportWithHttpInfo($body);
    }

    public function createAccountExportWithHttpInfo($body)
    {
        $request = $this->createAccountExportRequest($body);

        return $this->performRequest($request);
    }

    protected function createAccountExportRequest($body): Request
    {
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }
}
