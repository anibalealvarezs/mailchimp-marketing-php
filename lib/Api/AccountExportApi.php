<?php

/**
 * AccountExportApi
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpMarketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailchimp Marketing API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.74
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpMarketing\Api;

use GuzzleHttp\Psr7\Request;
use MailchimpMarketing\ApiTrait;

class AccountExportApi
{
    use ApiTrait;

    const END_POINT = '/account-exports';

    public function getAccountExports($export_id, $fields = null, $exclude_fields = null)
    {
        return $this->getAccountExportsWithHttpInfo($export_id, $fields, $exclude_fields);
    }

    public function getAccountExportsWithHttpInfo($export_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getAccountExportsRequest($export_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getAccountExportsRequest($export_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'export_id' is set
        $this->checkRequiredParameter($export_id);

        $resourcePath = self::END_POINT . '/{export_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'export_id', $export_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }
}
