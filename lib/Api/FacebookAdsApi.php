<?php

/**
 * FacebookAdsApi
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

class FacebookAdsApi
{
    use ApiTrait;

    const END_POINT = '/facebook-ads';

    public function list($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null, $sort_dir = null)
    {
        return $this->listWithHttpInfo($fields, $exclude_fields, $count, $offset, $sort_field, $sort_dir);
    }

    public function listWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null, $sort_dir = null)
    {
        $request = $this->listRequest($fields, $exclude_fields, $count, $offset, $sort_field, $sort_dir);

        return $this->performRequest($request);
    }

    protected function listRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null, $sort_dir = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling FacebookAdsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $sort_field, 'sort_field');
        $this->serializeParam($queryParams, $sort_dir, 'sort_dir');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getAd($outreach_id, $fields = null, $exclude_fields = null)
    {
        return $this->getAdWithHttpInfo($outreach_id, $fields, $exclude_fields);
    }

    public function getAdWithHttpInfo($outreach_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getAdRequest($outreach_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getAdRequest($outreach_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'outreach_id' is set
        $this->checkRequiredParameter($outreach_id);

        $resourcePath = self::END_POINT . '/{outreach_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'outreach_id', $outreach_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }
}
