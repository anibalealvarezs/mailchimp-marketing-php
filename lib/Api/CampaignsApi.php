<?php

/**
 * CampaignsApi
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

class CampaignsApi
{
    use ApiTrait;

    const END_POINT = '/campaigns';

    public function remove($campaign_id)
    {
        $this->removeWithHttpInfo($campaign_id);
    }

    public function removeWithHttpInfo($campaign_id)
    {
        $request = $this->removeRequest($campaign_id);

        return $this->performRequest($request);
    }

    protected function removeRequest($campaign_id): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteFeedbackMessage($campaign_id, $feedback_id)
    {
        $this->deleteFeedbackMessageWithHttpInfo($campaign_id, $feedback_id);
    }

    public function deleteFeedbackMessageWithHttpInfo($campaign_id, $feedback_id)
    {
        $request = $this->deleteFeedbackMessageRequest($campaign_id, $feedback_id);

        return $this->performRequest($request);
    }

    protected function deleteFeedbackMessageRequest($campaign_id, $feedback_id): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'feedback_id' is set
        $this->checkRequiredParameter($feedback_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/feedback/{feedback_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'feedback_id', $feedback_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function list($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $type = null, $status = null, $before_send_time = null, $since_send_time = null, $before_create_time = null, $since_create_time = null, $list_id = null, $folder_id = null, $member_id = null, $sort_field = null, $sort_dir = null)
    {
        return $this->listWithHttpInfo($fields, $exclude_fields, $count, $offset, $type, $status, $before_send_time, $since_send_time, $before_create_time, $since_create_time, $list_id, $folder_id, $member_id, $sort_field, $sort_dir);
    }

    public function listWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $type = null, $status = null, $before_send_time = null, $since_send_time = null, $before_create_time = null, $since_create_time = null, $list_id = null, $folder_id = null, $member_id = null, $sort_field = null, $sort_dir = null)
    {
        $request = $this->listRequest($fields, $exclude_fields, $count, $offset, $type, $status, $before_send_time, $since_send_time, $before_create_time, $since_create_time, $list_id, $folder_id, $member_id, $sort_field, $sort_dir);

        return $this->performRequest($request);
    }

    protected function listRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $type = null, $status = null, $before_send_time = null, $since_send_time = null, $before_create_time = null, $since_create_time = null, $list_id = null, $folder_id = null, $member_id = null, $sort_field = null, $sort_dir = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling CampaignsApi., must be smaller than or equal to 1000.');
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
        $this->serializeParam($queryParams, $status, 'status');
        $this->serializeParam($queryParams, $before_send_time, 'before_send_time');
        $this->serializeParam($queryParams, $since_send_time, 'since_send_time');
        $this->serializeParam($queryParams, $before_create_time, 'before_create_time');
        $this->serializeParam($queryParams, $since_create_time, 'since_create_time');
        $this->serializeParam($queryParams, $list_id, 'list_id');
        $this->serializeParam($queryParams, $folder_id, 'folder_id');
        $this->serializeParam($queryParams, $member_id, 'member_id');
        $this->serializeParam($queryParams, $sort_field, 'sort_field');
        $this->serializeParam($queryParams, $sort_dir, 'sort_dir');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function get($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getRequest($campaign_id, $fields = null, $exclude_fields = null): Request
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

    public function getContent($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getContentWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getContentWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getContentRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getContentRequest($campaign_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/content';
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

    public function getFeedback($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getFeedbackWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getFeedbackWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getFeedbackRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getFeedbackRequest($campaign_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/feedback';
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

    public function getFeedbackMessage($campaign_id, $feedback_id, $fields = null, $exclude_fields = null)
    {
        return $this->getFeedbackMessageWithHttpInfo($campaign_id, $feedback_id, $fields, $exclude_fields);
    }

    public function getFeedbackMessageWithHttpInfo($campaign_id, $feedback_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getFeedbackMessageRequest($campaign_id, $feedback_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getFeedbackMessageRequest($campaign_id, $feedback_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'feedback_id' is set
        $this->checkRequiredParameter($feedback_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/feedback/{feedback_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'feedback_id', $feedback_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getSendChecklist($campaign_id, $fields = null, $exclude_fields = null)
    {
        return $this->getSendChecklistWithHttpInfo($campaign_id, $fields, $exclude_fields);
    }

    public function getSendChecklistWithHttpInfo($campaign_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getSendChecklistRequest($campaign_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getSendChecklistRequest($campaign_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/send-checklist';
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

    public function update($campaign_id, $body)
    {
        return $this->updateWithHttpInfo($campaign_id, $body);
    }

    public function updateWithHttpInfo($campaign_id, $body)
    {
        $request = $this->updateRequest($campaign_id, $body);

        return $this->performRequest($request);
    }

    protected function updateRequest($campaign_id, $body): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{campaign_id}';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateFeedbackMessage($campaign_id, $feedback_id, $body)
    {
        return $this->updateFeedbackMessageWithHttpInfo($campaign_id, $feedback_id, $body);
    }

    public function updateFeedbackMessageWithHttpInfo($campaign_id, $feedback_id, $body)
    {
        $request = $this->updateFeedbackMessageRequest($campaign_id, $feedback_id, $body);

        return $this->performRequest($request);
    }

    protected function updateFeedbackMessageRequest($campaign_id, $feedback_id, $body): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'feedback_id' is set
        $this->checkRequiredParameter($feedback_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{campaign_id}/feedback/{feedback_id}';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);
        $this->pathParam($resourcePath, 'feedback_id', $feedback_id);

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

    public function cancelSend($campaign_id)
    {
        $this->cancelSendWithHttpInfo($campaign_id);
    }

    public function cancelSendWithHttpInfo($campaign_id)
    {
        $request = $this->cancelSendRequest($campaign_id);

        return $this->performRequest($request);
    }

    protected function cancelSendRequest($campaign_id): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/actions/cancel-send';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function createResend($campaign_id)
    {
        return $this->createResendWithHttpInfo($campaign_id);
    }

    public function createResendWithHttpInfo($campaign_id)
    {
        $request = $this->createResendRequest($campaign_id);

        return $this->performRequest($request);
    }

    protected function createResendRequest($campaign_id)
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/actions/create-resend';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function pause($campaign_id)
    {
        $this->pauseWithHttpInfo($campaign_id);
    }

    public function pauseWithHttpInfo($campaign_id)
    {
        $request = $this->pauseRequest($campaign_id);

        return $this->performRequest($request);
    }

    protected function pauseRequest($campaign_id): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/actions/pause';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function replicate($campaign_id)
    {
        return $this->replicateWithHttpInfo($campaign_id);
    }

    public function replicateWithHttpInfo($campaign_id)
    {
        $request = $this->replicateRequest($campaign_id);

        return $this->performRequest($request);
    }

    protected function replicateRequest($campaign_id): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/actions/replicate';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function resume($campaign_id)
    {
        $this->resumeWithHttpInfo($campaign_id);
    }

    public function resumeWithHttpInfo($campaign_id)
    {
        $request = $this->resumeRequest($campaign_id);

        return $this->performRequest($request);
    }

    protected function resumeRequest($campaign_id): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/actions/resume';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function schedule($campaign_id, $body)
    {
        $this->scheduleWithHttpInfo($campaign_id, $body);
    }

    public function scheduleWithHttpInfo($campaign_id, $body)
    {
        $request = $this->scheduleRequest($campaign_id, $body);

        return $this->performRequest($request);
    }

    protected function scheduleRequest($campaign_id, $body): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{campaign_id}/actions/schedule';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function send($campaign_id)
    {
        $this->sendWithHttpInfo($campaign_id);
    }

    public function sendWithHttpInfo($campaign_id)
    {
        $request = $this->sendRequest($campaign_id);

        return $this->performRequest($request);
    }

    protected function sendRequest($campaign_id): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/actions/send';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function sendTestEmail($campaign_id, $body)
    {
        $this->sendTestEmailWithHttpInfo($campaign_id, $body);
    }

    public function sendTestEmailWithHttpInfo($campaign_id, $body)
    {
        $request = $this->sendTestEmailRequest($campaign_id, $body);

        return $this->performRequest($request);
    }

    protected function sendTestEmailRequest($campaign_id, $body): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{campaign_id}/actions/test';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function unschedule($campaign_id)
    {
        $this->unscheduleWithHttpInfo($campaign_id);
    }

    public function unscheduleWithHttpInfo($campaign_id)
    {
        $request = $this->unscheduleRequest($campaign_id);

        return $this->performRequest($request);
    }

    protected function unscheduleRequest($campaign_id): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);

        $resourcePath = self::END_POINT . '/{campaign_id}/actions/unschedule';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addFeedback($campaign_id, $body)
    {
        return $this->addFeedbackWithHttpInfo($campaign_id, $body);
    }

    public function addFeedbackWithHttpInfo($campaign_id, $body)
    {
        $request = $this->addFeedbackRequest($campaign_id, $body);

        return $this->performRequest($request);
    }

    protected function addFeedbackRequest($campaign_id, $body): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{campaign_id}/feedback';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function setContent($campaign_id, $body)
    {
        return $this->setContentWithHttpInfo($campaign_id, $body);
    }

    public function setContentWithHttpInfo($campaign_id, $body)
    {
        $request = $this->setContentRequest($campaign_id, $body);

        return $this->performRequest($request);
    }

    protected function setContentRequest($campaign_id, $body): Request
    {
        // verify the required parameter 'campaign_id' is set
        $this->checkRequiredParameter($campaign_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{campaign_id}/content';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'campaign_id', $campaign_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPut($queryParams, $resourcePath, $headers, $httpBody);
    }
}
