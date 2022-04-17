<?php

/**
 * AutomationsApi
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

class AutomationsApi
{
    use ApiTrait;

    const END_POINT = '/automations';

    public function archive($workflow_id)
    {
        $this->archiveWithHttpInfo($workflow_id);
    }

    public function archiveWithHttpInfo($workflow_id)
    {
        $request = $this->archiveRequest($workflow_id);

        return $this->performRequest($request);
    }

    protected function archiveRequest($workflow_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/actions/archive';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteWorkflowEmail($workflow_id, $workflow_email_id)
    {
        $this->deleteWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id);
    }

    public function deleteWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id)
    {
        $request = $this->deleteWorkflowEmailRequest($workflow_id, $workflow_email_id);

        return $this->performRequest($request);
    }

    protected function deleteWorkflowEmailRequest($workflow_id, $workflow_email_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'workflow_email_id' is set
        $this->checkRequiredParameter($workflow_email_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/emails/{workflow_email_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);
        $this->pathParam($resourcePath, 'workflow_email_id', $workflow_email_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function list($count = '10', $offset = '0', $fields = null, $exclude_fields = null, $before_create_time = null, $since_create_time = null, $before_start_time = null, $since_start_time = null, $status = null)
    {
        return $this->listWithHttpInfo($count, $offset, $fields, $exclude_fields, $before_create_time, $since_create_time, $before_start_time, $since_start_time, $status);
    }

    public function listWithHttpInfo($count = '10', $offset = '0', $fields = null, $exclude_fields = null, $before_create_time = null, $since_create_time = null, $before_start_time = null, $since_start_time = null, $status = null)
    {
        $request = $this->listRequest($count, $offset, $fields, $exclude_fields, $before_create_time, $since_create_time, $before_start_time, $since_start_time, $status);

        return $this->performRequest($request);
    }

    protected function listRequest($count = '10', $offset = '0', $fields = null, $exclude_fields = null, $before_create_time = null, $since_create_time = null, $before_start_time = null, $since_start_time = null, $status = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling AutomationsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $before_create_time, 'before_create_time');
        $this->serializeParam($queryParams, $since_create_time, 'since_create_time');
        $this->serializeParam($queryParams, $before_start_time, 'before_start_time');
        $this->serializeParam($queryParams, $since_start_time, 'since_start_time');
        $this->serializeParam($queryParams, $status, 'status');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function get($workflow_id, $fields = null, $exclude_fields = null)
    {
        return $this->getWithHttpInfo($workflow_id, $fields, $exclude_fields);
    }

    public function getWithHttpInfo($workflow_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getRequest($workflow_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getRequest($workflow_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);

        $resourcePath = self::END_POINT . '/{workflow_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function listAllWorkflowEmails($workflow_id)
    {
        return $this->listAllWorkflowEmailsWithHttpInfo($workflow_id);
    }

    public function listAllWorkflowEmailsWithHttpInfo($workflow_id)
    {
        $request = $this->listAllWorkflowEmailsRequest($workflow_id);

        return $this->performRequest($request);
    }

    protected function listAllWorkflowEmailsRequest($workflow_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/emails';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getWorkflowEmail($workflow_id, $workflow_email_id)
    {
        return $this->getWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id);
    }

    public function getWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id)
    {
        $request = $this->getWorkflowEmailRequest($workflow_id, $workflow_email_id);

        return $this->performRequest($request);
    }

    protected function getWorkflowEmailRequest($workflow_id, $workflow_email_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'workflow_email_id' is set
        $this->checkRequiredParameter($workflow_email_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/emails/{workflow_email_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);
        $this->pathParam($resourcePath, 'workflow_email_id', $workflow_email_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getWorkflowEmailSubscriberQueue($workflow_id, $workflow_email_id)
    {
        return $this->getWorkflowEmailSubscriberQueueWithHttpInfo($workflow_id, $workflow_email_id);
    }

    public function getWorkflowEmailSubscriberQueueWithHttpInfo($workflow_id, $workflow_email_id)
    {
        $request = $this->getWorkflowEmailSubscriberQueueRequest($workflow_id, $workflow_email_id);

        return $this->performRequest($request);
    }

    protected function getWorkflowEmailSubscriberQueueRequest($workflow_id, $workflow_email_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'workflow_email_id' is set
        $this->checkRequiredParameter($workflow_email_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/emails/{workflow_email_id}/queue';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);
        $this->pathParam($resourcePath, 'workflow_email_id', $workflow_email_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getWorkflowEmailSubscriber($workflow_id, $workflow_email_id, $subscriber_hash)
    {
        return $this->getWorkflowEmailSubscriberWithHttpInfo($workflow_id, $workflow_email_id, $subscriber_hash);
    }

    public function getWorkflowEmailSubscriberWithHttpInfo($workflow_id, $workflow_email_id, $subscriber_hash)
    {
        $request = $this->getWorkflowEmailSubscriberRequest($workflow_id, $workflow_email_id, $subscriber_hash);

        return $this->performRequest($request);
    }

    protected function getWorkflowEmailSubscriberRequest($workflow_id, $workflow_email_id, $subscriber_hash): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'workflow_email_id' is set
        $this->checkRequiredParameter($workflow_email_id);
        // verify the required parameter 'subscriber_hash' is set
        $this->checkRequiredParameter($subscriber_hash);

        $resourcePath = self::END_POINT . '/{workflow_id}/emails/{workflow_email_id}/queue/{subscriber_hash}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);
        $this->pathParam($resourcePath, 'workflow_email_id', $workflow_email_id);
        $this->pathParam($resourcePath, 'subscriber_hash', $subscriber_hash);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function listWorkflowEmailSubscribersRemoved($workflow_id)
    {
        return $this->listWorkflowEmailSubscribersRemovedWithHttpInfo($workflow_id);
    }

    public function listWorkflowEmailSubscribersRemovedWithHttpInfo($workflow_id)
    {
        $request = $this->listWorkflowEmailSubscribersRemovedRequest($workflow_id);

        return $this->performRequest($request);
    }

    protected function listWorkflowEmailSubscribersRemovedRequest($workflow_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/removed-subscribers';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getRemovedWorkflowEmailSubscriber($workflow_id, $subscriber_hash)
    {
        return $this->getRemovedWorkflowEmailSubscriberWithHttpInfo($workflow_id, $subscriber_hash);
    }

    public function getRemovedWorkflowEmailSubscriberWithHttpInfo($workflow_id, $subscriber_hash)
    {
        $request = $this->getRemovedWorkflowEmailSubscriberRequest($workflow_id, $subscriber_hash);

        return $this->performRequest($request);
    }

    protected function getRemovedWorkflowEmailSubscriberRequest($workflow_id, $subscriber_hash): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'subscriber_hash' is set
        $this->checkRequiredParameter($subscriber_hash);

        $resourcePath = self::END_POINT . '/{workflow_id}/removed-subscribers/{subscriber_hash}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);
        $this->pathParam($resourcePath, 'subscriber_hash', $subscriber_hash);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateWorkflowEmail($workflow_id, $workflow_email_id, $body)
    {
        return $this->updateWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id, $body);
    }

    public function updateWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id, $body)
    {
        $request = $this->updateWorkflowEmailRequest($workflow_id, $workflow_email_id, $body);

        return $this->performRequest($request);
    }

    protected function updateWorkflowEmailRequest($workflow_id, $workflow_email_id, $body): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'workflow_email_id' is set
        $this->checkRequiredParameter($workflow_email_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{workflow_id}/emails/{workflow_email_id}';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);
        $this->pathParam($resourcePath, 'workflow_email_id', $workflow_email_id);

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

    public function pauseAllEmails($workflow_id)
    {
        $this->pauseAllEmailsWithHttpInfo($workflow_id);
    }

    public function pauseAllEmailsWithHttpInfo($workflow_id)
    {
        $request = $this->pauseAllEmailsRequest($workflow_id);

        return $this->performRequest($request);
    }

    protected function pauseAllEmailsRequest($workflow_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/actions/pause-all-emails';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function startAllEmails($workflow_id)
    {
        $this->startAllEmailsWithHttpInfo($workflow_id);
    }

    public function startAllEmailsWithHttpInfo($workflow_id)
    {
        $request = $this->startAllEmailsRequest($workflow_id);

        return $this->performRequest($request);
    }

    protected function startAllEmailsRequest($workflow_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/actions/start-all-emails';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function pauseWorkflowEmail($workflow_id, $workflow_email_id)
    {
        $this->pauseWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id);
    }

    public function pauseWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id)
    {
        $request = $this->pauseWorkflowEmailRequest($workflow_id, $workflow_email_id);

        return $this->performRequest($request);
    }

    protected function pauseWorkflowEmailRequest($workflow_id, $workflow_email_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'workflow_email_id' is set
        $this->checkRequiredParameter($workflow_email_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/emails/{workflow_email_id}/actions/pause';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);
        $this->pathParam($resourcePath, 'workflow_email_id', $workflow_email_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function startWorkflowEmail($workflow_id, $workflow_email_id)
    {
        $this->startWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id);
    }

    public function startWorkflowEmailWithHttpInfo($workflow_id, $workflow_email_id)
    {
        $request = $this->startWorkflowEmailRequest($workflow_id, $workflow_email_id);

        return $this->performRequest($request);
    }

    protected function startWorkflowEmailRequest($workflow_id, $workflow_email_id): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'workflow_email_id' is set
        $this->checkRequiredParameter($workflow_email_id);

        $resourcePath = self::END_POINT . '/{workflow_id}/emails/{workflow_email_id}/actions/start';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);
        $this->pathParam($resourcePath, 'workflow_email_id', $workflow_email_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addWorkflowEmailSubscriber($workflow_id, $workflow_email_id, $body)
    {
        return $this->addWorkflowEmailSubscriberWithHttpInfo($workflow_id, $workflow_email_id, $body);
    }

    public function addWorkflowEmailSubscriberWithHttpInfo($workflow_id, $workflow_email_id, $body)
    {
        $request = $this->addWorkflowEmailSubscriberRequest($workflow_id, $workflow_email_id, $body);

        return $this->performRequest($request);
    }

    protected function addWorkflowEmailSubscriberRequest($workflow_id, $workflow_email_id, $body): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'workflow_email_id' is set
        $this->checkRequiredParameter($workflow_email_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{workflow_id}/emails/{workflow_email_id}/queue';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);
        $this->pathParam($resourcePath, 'workflow_email_id', $workflow_email_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function removeWorkflowEmailSubscriber($workflow_id, $body)
    {
        return $this->removeWorkflowEmailSubscriberWithHttpInfo($workflow_id, $body);
    }

    public function removeWorkflowEmailSubscriberWithHttpInfo($workflow_id, $body)
    {
        $request = $this->removeWorkflowEmailSubscriberRequest($workflow_id, $body);

        return $this->performRequest($request);
    }

    protected function removeWorkflowEmailSubscriberRequest($workflow_id, $body): Request
    {
        // verify the required parameter 'workflow_id' is set
        $this->checkRequiredParameter($workflow_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{workflow_id}/removed-subscribers';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'workflow_id', $workflow_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }
}
