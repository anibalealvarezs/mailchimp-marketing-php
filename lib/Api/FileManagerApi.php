<?php

/**
 * FileManagerApi
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

class FileManagerApi
{
    use ApiTrait;

    const END_POINT = '/file-manager';

    public function deleteFile($file_id)
    {
        $this->deleteFileWithHttpInfo($file_id);
    }

    public function deleteFileWithHttpInfo($file_id)
    {
        $request = $this->deleteFileRequest($file_id);

        return $this->performRequest($request);
    }

    protected function deleteFileRequest($file_id): Request
    {
        // verify the required parameter 'file_id' is set
        $this->checkRequiredParameter($file_id);

        $resourcePath = self::END_POINT . '/files/{file_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'file_id', $file_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteFolder($folder_id)
    {
        $this->deleteFolderWithHttpInfo($folder_id);
    }

    public function deleteFolderWithHttpInfo($folder_id)
    {
        $request = $this->deleteFolderRequest($folder_id);

        return $this->performRequest($request);
    }

    protected function deleteFolderRequest($folder_id): Request
    {
        // verify the required parameter 'folder_id' is set
        $this->checkRequiredParameter($folder_id);

        $resourcePath = self::END_POINT . '/folders/{folder_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'folder_id', $folder_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function files($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $type = null, $created_by = null, $before_created_at = null, $since_created_at = null, $sort_field = null, $sort_dir = null)
    {
        return $this->filesWithHttpInfo($fields, $exclude_fields, $count, $offset, $type, $created_by, $before_created_at, $since_created_at, $sort_field, $sort_dir);
    }

    public function filesWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $type = null, $created_by = null, $before_created_at = null, $since_created_at = null, $sort_field = null, $sort_dir = null)
    {
        $request = $this->filesRequest($fields, $exclude_fields, $count, $offset, $type, $created_by, $before_created_at, $since_created_at, $sort_field, $sort_dir);

        return $this->performRequest($request);
    }

    protected function filesRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $type = null, $created_by = null, $before_created_at = null, $since_created_at = null, $sort_field = null, $sort_dir = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling FileManagerApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/files';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $type, 'type');
        $this->serializeParam($queryParams, $created_by, 'created_by');
        $this->serializeParam($queryParams, $before_created_at, 'before_created_at');
        $this->serializeParam($queryParams, $since_created_at, 'since_created_at');
        $this->serializeParam($queryParams, $sort_field, 'sort_field');
        $this->serializeParam($queryParams, $sort_dir, 'sort_dir');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getFile($file_id, $fields = null, $exclude_fields = null)
    {
        return $this->getFileWithHttpInfo($file_id, $fields, $exclude_fields);
    }

    public function getFileWithHttpInfo($file_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getFileRequest($file_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getFileRequest($file_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'file_id' is set
        $this->checkRequiredParameter($file_id);

        $resourcePath = self::END_POINT . '/files/{file_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'file_id', $file_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function listFolders($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $created_by = null, $before_created_at = null, $since_created_at = null)
    {
        return $this->listFoldersWithHttpInfo($fields, $exclude_fields, $count, $offset, $created_by, $before_created_at, $since_created_at);
    }

    public function listFoldersWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $created_by = null, $before_created_at = null, $since_created_at = null)
    {
        $request = $this->listFoldersRequest($fields, $exclude_fields, $count, $offset, $created_by, $before_created_at, $since_created_at);

        return $this->performRequest($request);
    }

    protected function listFoldersRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $created_by = null, $before_created_at = null, $since_created_at = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling FileManagerApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/folders';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $created_by, 'created_by');
        $this->serializeParam($queryParams, $before_created_at, 'before_created_at');
        $this->serializeParam($queryParams, $since_created_at, 'since_created_at');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getFolder($folder_id, $fields = null, $exclude_fields = null)
    {
        return $this->getFolderWithHttpInfo($folder_id, $fields, $exclude_fields);
    }

    public function getFolderWithHttpInfo($folder_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getFolderRequest($folder_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getFolderRequest($folder_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'folder_id' is set
        $this->checkRequiredParameter($folder_id);

        $resourcePath = self::END_POINT . '/folders/{folder_id}';
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

    public function updateFile($file_id, $body)
    {
        return $this->updateFileWithHttpInfo($file_id, $body);
    }

    public function updateFileWithHttpInfo($file_id, $body)
    {
        $request = $this->updateFileRequest($file_id, $body);

        return $this->performRequest($request);
    }

    protected function updateFileRequest($file_id, $body): Request
    {
        // verify the required parameter 'file_id' is set
        $this->checkRequiredParameter($file_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/files/{file_id}';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'file_id', $file_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateFolder($folder_id, $body)
    {
        return $this->updateFolderWithHttpInfo($folder_id, $body);
    }

    public function updateFolderWithHttpInfo($folder_id, $body)
    {
        $request = $this->updateFolderRequest($folder_id, $body);

        return $this->performRequest($request);
    }

    protected function updateFolderRequest($folder_id, $body): Request
    {
        // verify the required parameter 'folder_id' is set
        $this->checkRequiredParameter($folder_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/folders/{folder_id}';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'folder_id', $folder_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function upload($body)
    {
        return $this->uploadWithHttpInfo($body);
    }

    public function uploadWithHttpInfo($body)
    {
        $request = $this->uploadRequest($body);

        return $this->performRequest($request);
    }

    protected function uploadRequest($body): Request
    {
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/files';
        $queryParams = [];
        $headerParams = [];

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function createFolder($body)
    {
        return $this->createFolderWithHttpInfo($body);
    }

    public function createFolderWithHttpInfo($body)
    {
        $request = $this->createFolderRequest($body);

        return $this->performRequest($request);
    }

    protected function createFolderRequest($body): Request
    {
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/folders';
        $queryParams = [];
        $headerParams = [];

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }
}
