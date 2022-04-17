<?php

/**
 * TemplatesApi
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

class TemplatesApi
{
    use ApiTrait;

    const END_POINT = '/templates';

    public function deleteTemplate($template_id)
    {
        $this->deleteTemplateWithHttpInfo($template_id);
    }

    public function deleteTemplateWithHttpInfo($template_id)
    {
        $request = $this->deleteTemplateRequest($template_id);

        return $this->performRequest($request);
    }

    protected function deleteTemplateRequest($template_id): Request
    {
        // verify the required parameter 'template_id' is set
        $this->checkRequiredParameter($template_id);

        $resourcePath = self::END_POINT . '/{template_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'template_id', $template_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function list($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $created_by = null, $since_date_created = null, $before_date_created = null, $type = null, $category = null, $folder_id = null, $sort_field = null, $sort_dir = null)
    {
        return $this->listWithHttpInfo($fields, $exclude_fields, $count, $offset, $created_by, $since_date_created, $before_date_created, $type, $category, $folder_id, $sort_field, $sort_dir);
    }

    public function listWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $created_by = null, $since_date_created = null, $before_date_created = null, $type = null, $category = null, $folder_id = null, $sort_field = null, $sort_dir = null)
    {
        $request = $this->listRequest($fields, $exclude_fields, $count, $offset, $created_by, $since_date_created, $before_date_created, $type, $category, $folder_id, $sort_field, $sort_dir);

        return $this->performRequest($request);
    }

    protected function listRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $created_by = null, $since_date_created = null, $before_date_created = null, $type = null, $category = null, $folder_id = null, $sort_field = null, $sort_dir = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling TemplatesApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $created_by, 'created_by');
        $this->serializeParam($queryParams, $since_date_created, 'since_date_created');
        $this->serializeParam($queryParams, $before_date_created, 'before_date_created');
        $this->serializeParam($queryParams, $type, 'type');
        $this->serializeParam($queryParams, $category, 'category');
        $this->serializeParam($queryParams, $folder_id, 'folder_id');
        $this->serializeParam($queryParams, $sort_field, 'sort_field');
        $this->serializeParam($queryParams, $sort_dir, 'sort_dir');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getTemplate($template_id, $fields = null, $exclude_fields = null)
    {
        return $this->getTemplateWithHttpInfo($template_id, $fields, $exclude_fields);
    }

    public function getTemplateWithHttpInfo($template_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getTemplateRequest($template_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getTemplateRequest($template_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'template_id' is set
        $this->checkRequiredParameter($template_id);

        $resourcePath = self::END_POINT . '/{template_id}';
        return $this->setQueryParams($fields, $exclude_fields, $template_id, $resourcePath);
    }

    public function getDefaultContentForTemplate($template_id, $fields = null, $exclude_fields = null)
    {
        return $this->getDefaultContentForTemplateWithHttpInfo($template_id, $fields, $exclude_fields);
    }

    public function getDefaultContentForTemplateWithHttpInfo($template_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getDefaultContentForTemplateRequest($template_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getDefaultContentForTemplateRequest($template_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'template_id' is set
        $this->checkRequiredParameter($template_id);

        $resourcePath = self::END_POINT . '/{template_id}/default-content';
        return $this->setQueryParams($fields, $exclude_fields, $template_id, $resourcePath);
    }

    public function updateTemplate($template_id, $body)
    {
        return $this->updateTemplateWithHttpInfo($template_id, $body);
    }

    public function updateTemplateWithHttpInfo($template_id, $body)
    {
        $request = $this->updateTemplateRequest($template_id, $body);

        return $this->performRequest($request);
    }

    protected function updateTemplateRequest($template_id, $body): Request
    {
        // verify the required parameter 'template_id' is set
        $this->checkRequiredParameter($template_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{template_id}';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'template_id', $template_id);

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

    /**
     * @param $fields
     * @param $exclude_fields
     * @param array $template_id
     * @param string $resourcePath
     * @return Request
     */
    protected function setQueryParams($fields, $exclude_fields, array $template_id, string $resourcePath): Request
    {
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'template_id', $template_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }
}
