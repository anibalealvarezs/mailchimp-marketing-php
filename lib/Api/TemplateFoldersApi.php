<?php

/**
 * TemplateFoldersApi
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

class TemplateFoldersApi
{
    use ApiTrait;

    const END_POINT = '/template-folders';

    public function remove($folder_id)
    {
        $this->removeWithHttpInfo($folder_id);
    }

    public function removeWithHttpInfo($folder_id)
    {
        $request = $this->removeRequest($folder_id);

        return $this->performRequest($request);
    }

    protected function removeRequest($folder_id): Request
    {
        // verify the required parameter 'folder_id' is set
        $this->checkRequiredParameter($folder_id);

        $resourcePath = self::END_POINT . '/{folder_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'folder_id', $folder_id);

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
            throw new InvalidArgumentException('invalid value for "$count" when calling TemplateFoldersApi., must be smaller than or equal to 1000.');
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

    public function get($folder_id, $fields = null, $exclude_fields = null)
    {
        return $this->getWithHttpInfo($folder_id, $fields, $exclude_fields);
    }

    public function getWithHttpInfo($folder_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getRequest($folder_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getRequest($folder_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'folder_id' is set
        $this->checkRequiredParameter($folder_id);

        $resourcePath = self::END_POINT . '/{folder_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'folder_id', $folder_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function update($folder_id, $body)
    {
        return $this->updateWithHttpInfo($folder_id, $body);
    }

    public function updateWithHttpInfo($folder_id, $body)
    {
        $request = $this->updateRequest($folder_id, $body);

        return $this->performRequest($request);
    }

    protected function updateRequest($folder_id, $body): Request
    {
        // verify the required parameter 'folder_id' is set
        $this->checkRequiredParameter($folder_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{folder_id}';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'folder_id', $folder_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function create($body)
    {
        return $this->createWithHttpInfo($body);
    }

    public function createWithHttpInfo($body)
    {
        $request = $this->createRequest($body);

        return $this->performRequest($request);
    }

    protected function createRequest($body): Request
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
