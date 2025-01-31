<?php

/**
 * ReportsApi
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
use MailchimpMarketing\ObjectSerializer;

class ReportsApi
{
    use ApiTrait;

    const END_POINT = '/reports';

    public function getAllCampaignReports($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $type = null, $before_send_time = null, $since_send_time = null)
    {
        return $this->getAllCampaignReportsWithHttpInfo($fields, $exclude_fields, $count, $offset, $type, $before_send_time, $since_send_time);
    }

    public function getAllCampaignReportsWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $type = null, $before_send_time = null, $since_send_time = null)
    {
        $request = $this->getAllCampaignReportsRequest($fields, $exclude_fields, $count, $offset, $type, $before_send_time, $since_send_time);

        return $this->performRequest($request);
    }

    protected function getAllCampaignReportsRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $type = null, $before_send_time = null, $since_send_time = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $type, 'type');
        $this->serializeParam($queryParams, $before_send_time, 'before_send_time');
        $this->serializeParam($queryParams, $since_send_time, 'since_send_time');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCampaignReport($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getCampaignReportWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getCampaignReportWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getCampaignReportRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getCampaignReportRequest($campaign_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCampaignAbuseReports($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getCampaignAbuseReportsWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getCampaignAbuseReportsWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getCampaignAbuseReportsRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getCampaignAbuseReportsRequest($campaign_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/abuse-reports';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCampaignAbuseReport($campaign_id, $report_id, $fields = null, $exclude_fields = null)
    {
        return $this->getCampaignAbuseReportWithHttpInfo($campaign_id, $report_id, $fields, $exclude_fields);
    }

    public function getCampaignAbuseReportWithHttpInfo($campaign_id, $report_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getCampaignAbuseReportRequest($campaign_id, $report_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getCampaignAbuseReportRequest($campaign_id, $report_id, $fields = null, $exclude_fields = null)
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'report_id' is set
        $this->checkRequiredParameter($report_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/abuse-reports/{report_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'report_id', $report_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCampaignAdvice($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getCampaignAdviceWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getCampaignAdviceWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getCampaignAdviceRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getCampaignAdviceRequest($campaign_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/advice';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCampaignClickDetails($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getCampaignClickDetailsWithHttpInfo($campaign_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getCampaignClickDetailsWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getCampaignClickDetailsRequest($campaign_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getCampaignClickDetailsRequest($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/{campaign_id}/click-details';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCampaignClickDetailsForLink($campaign_id, $link_id, $fields = null, $exclude_fields = null)
    {
        return $this->getCampaignClickDetailsForLinkWithHttpInfo($campaign_id, $link_id, $fields, $exclude_fields);
    }

    public function getCampaignClickDetailsForLinkWithHttpInfo($campaign_id, $link_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getCampaignClickDetailsForLinkRequest($campaign_id, $link_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getCampaignClickDetailsForLinkRequest($campaign_id, $link_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'link_id' is set
        $this->checkRequiredParameter($link_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/click-details/{link_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'link_id', $link_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getSubscribersInfo($campaign_id, $link_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getSubscribersInfoWithHttpInfo($campaign_id, $link_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getSubscribersInfoWithHttpInfo($campaign_id, $link_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getSubscribersInfoRequest($campaign_id, $link_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getSubscribersInfoRequest($campaign_id, $link_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'link_id' is set
        $this->checkRequiredParameter($link_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/{campaign_id}/click-details/{link_id}/members';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'link_id', $link_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getSubscriberInfo($campaign_id, $link_id, $subscriber_hash, $fields = null, $exclude_fields = null)
    {
        return $this->getSubscriberInfoWithHttpInfo($campaign_id, $link_id, $subscriber_hash, $fields, $exclude_fields);
    }

    public function getSubscriberInfoWithHttpInfo($campaign_id, $link_id, $subscriber_hash, $fields = null, $exclude_fields = null)
    {
        $request = $this->getSubscriberInfoRequest($campaign_id, $link_id, $subscriber_hash, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getSubscriberInfoRequest($campaign_id, $link_id, $subscriber_hash, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'link_id' is set
        $this->checkRequiredParameter($link_id);
        // verify the required parameter 'subscriber_hash' is set
        $this->checkRequiredParameter($subscriber_hash);

        $resourcePath = self::END_POINT . '/{campaign_id}/click-details/{link_id}/members/{subscriber_hash}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'link_id', $link_id);
        $this->pathParam($resourcePath, 'subscriber_hash', $subscriber_hash);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getDomainPerformanceForCampaign($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getDomainPerformanceForCampaignWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getDomainPerformanceForCampaignWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getDomainPerformanceForCampaignRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getDomainPerformanceForCampaignRequest($campaign_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/domain-performance';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getEcommerceProductActivityForCampaign($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null)
    {
        return $this->getEcommerceProductActivityForCampaignWithHttpInfo($campaign_id, $fields, $exclude_fields, $count, $offset, $sort_field);
    }

    public function getEcommerceProductActivityForCampaignWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null)
    {
        $request = $this->getEcommerceProductActivityForCampaignRequest($campaign_id, $fields, $exclude_fields, $count, $offset, $sort_field);

        return $this->performRequest($request);
    }

    protected function getEcommerceProductActivityForCampaignRequest($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $sort_field = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/{campaign_id}/ecommerce-product-activity';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $sort_field, 'sort_field');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getEepurlActivityForCampaign($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getEepurlActivityForCampaignWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getEepurlActivityForCampaignWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getEepurlActivityForCampaignRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getEepurlActivityForCampaignRequest($campaign_id, $fields = null, $exclude_fields = null)
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/eepurl';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getEmailActivityForCampaign($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $since = null)
    {
        return $this->getEmailActivityForCampaignWithHttpInfo($campaign_id, $fields, $exclude_fields, $count, $offset, $since);
    }

    public function getEmailActivityForCampaignWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $since = null)
    {
        $request = $this->getEmailActivityForCampaignRequest($campaign_id, $fields, $exclude_fields, $count, $offset, $since);

        return $this->performRequest($request);
    }

    protected function getEmailActivityForCampaignRequest($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $since = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/{campaign_id}/email-activity';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $since, 'since');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getEmailActivityForSubscriber($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null, $since = null)
    {
        return $this->getEmailActivityForSubscriberWithHttpInfo($campaign_id, $subscriber_hash, $fields, $exclude_fields, $since);
    }

    public function getEmailActivityForSubscriberWithHttpInfo($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null, $since = null)
    {
        $request = $this->getEmailActivityForSubscriberRequest($campaign_id, $subscriber_hash, $fields, $exclude_fields, $since);

        return $this->performRequest($request);
    }

    protected function getEmailActivityForSubscriberRequest($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null, $since = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'subscriber_hash' is set
        $this->checkRequiredParameter($subscriber_hash);

        $resourcePath = self::END_POINT . '/{campaign_id}/email-activity/{subscriber_hash}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $since, 'since');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'subscriber_hash', $subscriber_hash);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getLocationsForCampaign($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getLocationsForCampaignWithHttpInfo($campaign_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getLocationsForCampaignWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getLocationsForCampaignRequest($campaign_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getLocationsForCampaignRequest($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/{campaign_id}/locations';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCampaignOpenDetails($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $since = null)
    {
        return $this->getCampaignOpenDetailsWithHttpInfo($campaign_id, $fields, $exclude_fields, $count, $offset, $since);
    }

    public function getCampaignOpenDetailsWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $since = null)
    {
        $request = $this->getCampaignOpenDetailsRequest($campaign_id, $fields, $exclude_fields, $count, $offset, $since);

        return $this->performRequest($request);
    }

    protected function getCampaignOpenDetailsRequest($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $since = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/{campaign_id}/open-details';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $since, 'since');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getSubscriberInfoForOpenedCampaign($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null)
    {
        return $this->getSubscriberInfoForOpenedCampaignWithHttpInfo($campaign_id, $subscriber_hash, $fields, $exclude_fields);
    }

    public function getSubscriberInfoForOpenedCampaignWithHttpInfo($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null)
    {
        $request = $this->getSubscriberInfoForOpenedCampaignRequest($campaign_id, $subscriber_hash, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getSubscriberInfoForOpenedCampaignRequest($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'subscriber_hash' is set
        $this->checkRequiredParameter($subscriber_hash);

        $resourcePath = self::END_POINT . '/{campaign_id}/open-details/{subscriber_hash}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'subscriber_hash', $subscriber_hash);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCampaignRecipients($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getCampaignRecipientsWithHttpInfo($campaign_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getCampaignRecipientsWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getCampaignRecipientsRequest($campaign_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getCampaignRecipientsRequest($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/{campaign_id}/sent-to';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        if ($campaign_id !== null) {
            $resourcePath = str_replace(
                '{' . 'campaign_id' . '}',
                ObjectSerializer::toPathValue($campaign_id),
                $resourcePath
            );
        }

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCampaignRecipient($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null)
    {
        return $this->getCampaignRecipientWithHttpInfo($campaign_id, $subscriber_hash, $fields, $exclude_fields);
    }

    public function getCampaignRecipientWithHttpInfo($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null)
    {
        $request = $this->getCampaignRecipientRequest($campaign_id, $subscriber_hash, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getCampaignRecipientRequest($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'subscriber_hash' is set
        $this->checkRequiredParameter($subscriber_hash);

        $resourcePath = self::END_POINT . '/{campaign_id}/sent-to/{subscriber_hash}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'subscriber_hash', $subscriber_hash);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getSubReportsForCampaign($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getSubReportsForCampaignWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getSubReportsForCampaignWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getSubReportsForCampaignRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getSubReportsForCampaignRequest($campaign_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/sub-reports';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getUnsubscribedListForCampaign($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getUnsubscribedListForCampaignWithHttpInfo($campaign_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getUnsubscribedListForCampaignWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getUnsubscribedListForCampaignRequest($campaign_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getUnsubscribedListForCampaignRequest($campaign_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ReportsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/{campaign_id}/unsubscribed';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getUnsubscribedListMember($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null)
    {
        return $this->getUnsubscribedListMemberWithHttpInfo($campaign_id, $subscriber_hash, $fields, $exclude_fields);
    }

    public function getUnsubscribedListMemberWithHttpInfo($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null)
    {
        $request = $this->getUnsubscribedListMemberRequest($campaign_id, $subscriber_hash, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getUnsubscribedListMemberRequest($campaign_id, $subscriber_hash, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'subscriber_hash' is set
        $this->checkRequiredParameter($subscriber_hash);

        $resourcePath = self::END_POINT . '/{campaign_id}/unsubscribed/{subscriber_hash}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'subscriber_hash', $subscriber_hash);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }
}
