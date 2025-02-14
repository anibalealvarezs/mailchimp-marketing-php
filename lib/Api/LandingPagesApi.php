<?php

/**
 * LandingPagesApi
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

class LandingPagesApi
{
    use ApiTrait;

    const END_POINT = '/landing-pages';

    public function deletePage($page_id)
    {
        $this->deletePageWithHttpInfo($page_id);
    }

    public function deletePageWithHttpInfo($page_id)
    {
        $request = $this->deletePageRequest($page_id);

        return $this->performRequest($request);
    }

    protected function deletePageRequest($page_id): Request
    {
        // verify the required parameter 'page_id' is set
        $this->checkRequiredParameter($page_id);

        $resourcePath = self::END_POINT . '/{page_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'page_id', $page_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getAll($sort_dir = null, $sort_field = null, $fields = null, $exclude_fields = null, $count = '10')
    {
        return $this->getAllWithHttpInfo($sort_dir, $sort_field, $fields, $exclude_fields, $count);
    }

    public function getAllWithHttpInfo($sort_dir = null, $sort_field = null, $fields = null, $exclude_fields = null, $count = '10')
    {
        $request = $this->getAllRequest($sort_dir, $sort_field, $fields, $exclude_fields, $count);

        return $this->performRequest($request);
    }

    protected function getAllRequest($sort_dir = null, $sort_field = null, $fields = null, $exclude_fields = null, $count = '10'): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling LandingPagesApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $sort_dir, 'sort_dir');
        $this->serializeParam($queryParams, $sort_field, 'sort_field');
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getPage($page_id, $fields = null, $exclude_fields = null)
    {
        return $this->getPageWithHttpInfo($page_id, $fields, $exclude_fields);
    }

    public function getPageWithHttpInfo($page_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getPageRequest($page_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getPageRequest($page_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'page_id' is set
        $this->checkRequiredParameter($page_id);

        $resourcePath = self::END_POINT . '/{page_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'page_id', $page_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getPageContent($page_id, $fields = null, $exclude_fields = null)
    {
        return $this->getPageContentWithHttpInfo($page_id, $fields, $exclude_fields);
    }

    public function getPageContentWithHttpInfo($page_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getPageContentRequest($page_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getPageContentRequest($page_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'page_id' is set
        $this->checkRequiredParameter($page_id);

        $resourcePath = self::END_POINT . '/{page_id}/content';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'page_id', $page_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updatePage($page_id, $body)
    {
        return $this->updatePageWithHttpInfo($page_id, $body);
    }

    public function updatePageWithHttpInfo($page_id, $body)
    {
        $request = $this->updatePageRequest($page_id, $body);

        return $this->performRequest($request);
    }

    protected function updatePageRequest($page_id, $body): Request
    {
        // verify the required parameter 'page_id' is set
        $this->checkRequiredParameter($page_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{page_id}';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'page_id', $page_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function create($body, $use_default_list = null)
    {
        return $this->createWithHttpInfo($body, $use_default_list);
    }

    public function createWithHttpInfo($body, $use_default_list = null)
    {
        $request = $this->createRequest($body, $use_default_list);

        return $this->performRequest($request);
    }

    protected function createRequest($body, $use_default_list = null): Request
    {
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        
        $this->serializeParam($queryParams, $use_default_list, 'use_default_list');

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function publishPage($page_id)
    {
        return $this->publishPageWithHttpInfo($page_id);
    }

    public function publishPageWithHttpInfo($page_id)
    {
        $request = $this->publishPageRequest($page_id);

        return $this->performRequest($request);
    }

    protected function publishPageRequest($page_id): Request
    {
        // verify the required parameter 'page_id' is set
        $this->checkRequiredParameter($page_id);

        $resourcePath = self::END_POINT . '/{page_id}/actions/publish';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'page_id', $page_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function unpublishPage($page_id)
    {
        $this->unpublishPageWithHttpInfo($page_id);
    }

    public function unpublishPageWithHttpInfo($page_id)
    {
        $request = $this->unpublishPageRequest($page_id);

        return $this->performRequest($request);
    }

    protected function unpublishPageRequest($page_id): Request
    {
        // verify the required parameter 'page_id' is set
        $this->checkRequiredParameter($page_id);

        $resourcePath = self::END_POINT . '/{page_id}/actions/unpublish';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'page_id', $page_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }
}
