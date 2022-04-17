<?php

/**
 * SearchCampaignsApi
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

class SearchCampaignsApi
{
    use ApiTrait;

    const END_POINT = '/search-campaigns';

    public function search($query, $fields = null, $exclude_fields = null)
    {
        return $this->searchWithHttpInfo($query, $fields, $exclude_fields);
    }

    public function searchWithHttpInfo($query, $fields = null, $exclude_fields = null)
    {
        $request = $this->searchRequest($query, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function searchRequest($query, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'query' is set
        $this->checkRequiredParameter($query);

        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $query, 'query');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }
}
