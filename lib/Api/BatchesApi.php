<?php

/**
 * BatchesApi
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

class BatchesApi
{
    use ApiTrait;

    const END_POINT = '/batches';

    public function deleteRequest($batch_id)
    {
        $this->deleteRequestWithHttpInfo($batch_id);
    }

    public function deleteRequestWithHttpInfo($batch_id)
    {
        $request = $this->deleteRequestRequest($batch_id);

        return $this->performRequest($request);
    }

    protected function deleteRequestRequest($batch_id): Request
    {
        // verify the required parameter 'batch_id' is set
        $this->checkRequiredParameter($batch_id);

        $resourcePath = self::END_POINT . '/{batch_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'batch_id', $batch_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function list($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->listWithHttpInfo($fields, $exclude_fields, $count, $offset);
    }

    public function listWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->listRequest($fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function listRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling BatchesApi., must be smaller than or equal to 1000.');
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

    public function status($batch_id, $fields = null, $exclude_fields = null)
    {
        return $this->statusWithHttpInfo($batch_id, $fields, $exclude_fields);
    }

    public function statusWithHttpInfo($batch_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->statusRequest($batch_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function statusRequest($batch_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'batch_id' is set
        $this->checkRequiredParameter($batch_id);

        $resourcePath = self::END_POINT . '/{batch_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'batch_id', $batch_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function start($body)
    {
        return $this->startWithHttpInfo($body);
    }

    public function startWithHttpInfo($body)
    {
        $request = $this->startRequest($body);

        return $this->performRequest($request);
    }

    protected function startRequest($body): Request
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
