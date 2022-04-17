<?php

/**
 * ConnectedSitesApi
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

class ConnectedSitesApi
{
    use ApiTrait;

    const END_POINT = '/connected-sites';

    public function remove($connected_site_id)
    {
        $this->removeWithHttpInfo($connected_site_id);
    }

    public function removeWithHttpInfo($connected_site_id)
    {
        $request = $this->removeRequest($connected_site_id);

        return $this->performRequest($request);
    }

    protected function removeRequest($connected_site_id): Request
    {
        // verify the required parameter 'connected_site_id' is set
        $this->checkRequiredParameter($connected_site_id);

        $resourcePath = self::END_POINT . '/{connected_site_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'connected_site_id', $connected_site_id);

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
            throw new InvalidArgumentException('invalid value for "$count" when calling ConnectedSitesApi., must be smaller than or equal to 1000.');
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

    public function get($connected_site_id, $fields = null, $exclude_fields = null)
    {
        return $this->getWithHttpInfo($connected_site_id, $fields, $exclude_fields);
    }

    public function getWithHttpInfo($connected_site_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getRequest($connected_site_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getRequest($connected_site_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'connected_site_id' is set
        $this->checkRequiredParameter($connected_site_id);

        $resourcePath = self::END_POINT . '/{connected_site_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'connected_site_id', $connected_site_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
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

    public function verifyScriptInstallation($connected_site_id)
    {
        $this->verifyScriptInstallationWithHttpInfo($connected_site_id);
    }

    public function verifyScriptInstallationWithHttpInfo($connected_site_id)
    {
        $request = $this->verifyScriptInstallationRequest($connected_site_id);

        return $this->performRequest($request);
    }

    protected function verifyScriptInstallationRequest($connected_site_id): Request
    {
        // verify the required parameter 'connected_site_id' is set
        $this->checkRequiredParameter($connected_site_id);

        $resourcePath = self::END_POINT . '/{connected_site_id}/actions/verify-script-installation';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'connected_site_id', $connected_site_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }
}
