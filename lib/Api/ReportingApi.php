<?php

/**
 * ReportingApi
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

class ReportingApi
{
    use ApiTrait;

    const END_POINT = '/reporting';

    public function getFacebookAdsReportAll($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null, $sort_dir = null)
    {
        return $this->getFacebookAdsReportAllWithHttpInfo($fields, $exclude_fields, $count, $offset, $sort_field, $sort_dir);
    }

    public function getFacebookAdsReportAllWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null, $sort_dir = null)
    {
        $request = $this->getFacebookAdsReportAllRequest($fields, $exclude_fields, $count, $offset, $sort_field, $sort_dir);

        return $this->performRequest($request);
    }

    protected function getFacebookAdsReportAllRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null, $sort_dir = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportingApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/facebook-ads';
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

    public function getFacebookAdReport($outreach_id, $fields = null, $exclude_fields = null)
    {
        return $this->getFacebookAdReportWithHttpInfo($outreach_id, $fields, $exclude_fields);
    }

    public function getFacebookAdReportWithHttpInfo($outreach_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getFacebookAdReportRequest($outreach_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getFacebookAdReportRequest($outreach_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'outreach_id' is set
        $this->checkRequiredParameter($outreach_id);

        $resourcePath = self::END_POINT . '/facebook-ads/{outreach_id}';
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

    public function getFacebookAdProductActivityReport($outreach_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null)
    {
        return $this->getFacebookAdProductActivityReportWithHttpInfo($outreach_id, $fields, $exclude_fields, $count, $offset, $sort_field);
    }

    public function getFacebookAdProductActivityReportWithHttpInfo($outreach_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null)
    {
        $request = $this->getFacebookAdProductActivityReportRequest($outreach_id, $fields, $exclude_fields, $count, $offset, $sort_field);

        return $this->performRequest($request);
    }

    protected function getFacebookAdProductActivityReportRequest($outreach_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null): Request
    {
        // verify the required parameter 'outreach_id' is set
        $this->checkRequiredParameter($outreach_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportingApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/facebook-ads/{outreach_id}/ecommerce-product-activity';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $sort_field, 'sort_field');

        $this->pathParam($resourcePath, 'outreach_id', $outreach_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getLandingPageReportsAll($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getLandingPageReportsAllWithHttpInfo($fields, $exclude_fields, $count, $offset);
    }

    public function getLandingPageReportsAllWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getLandingPageReportsAllRequest($fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getLandingPageReportsAllRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportingApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/landing-pages';
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

    public function getLandingPageReport($outreach_id, $fields = null, $exclude_fields = null)
    {
        return $this->getLandingPageReportWithHttpInfo($outreach_id, $fields, $exclude_fields);
    }

    public function getLandingPageReportWithHttpInfo($outreach_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getLandingPageReportRequest($outreach_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getLandingPageReportRequest($outreach_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'outreach_id' is set
        $this->checkRequiredParameter($outreach_id);

        $resourcePath = self::END_POINT . '/landing-pages/{outreach_id}';
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
