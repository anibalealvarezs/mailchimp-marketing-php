<?php

/**
 * ConversationsApi
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

class ConversationsApi
{
    use ApiTrait;

    const END_POINT = '/conversations';

    public function list($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $has_unread_messages = null, $list_id = null, $campaign_id = null)
    {
        return $this->listWithHttpInfo($fields, $exclude_fields, $count, $offset, $has_unread_messages, $list_id, $campaign_id);
    }

    public function listWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $has_unread_messages = null, $list_id = null, $campaign_id = null)
    {
        $request = $this->listRequest($fields, $exclude_fields, $count, $offset, $has_unread_messages, $list_id, $campaign_id);

        return $this->performRequest($request);
    }

    protected function listRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $has_unread_messages = null, $list_id = null, $campaign_id = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling ConversationsApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $has_unread_messages, 'has_unread_messages');
        $this->serializeParam($queryParams, $list_id, 'list_id');
        $this->serializeParam($queryParams, $campaign_id, 'campaign_id');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function get($conversation_id, $fields = null, $exclude_fields = null)
    {
        return $this->getWithHttpInfo($conversation_id, $fields, $exclude_fields);
    }

    public function getWithHttpInfo($conversation_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getRequest($conversation_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getRequest($conversation_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'conversation_id' is set
        $this->checkRequiredParameter($conversation_id);

        $resourcePath = self::END_POINT . '/{conversation_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'conversation_id', $conversation_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getConversationMessages($conversation_id, $fields = null, $exclude_fields = null, $is_read = null, $before_timestamp = null, $since_timestamp = null)
    {
        return $this->getConversationMessagesWithHttpInfo($conversation_id, $fields, $exclude_fields, $is_read, $before_timestamp, $since_timestamp);
    }

    public function getConversationMessagesWithHttpInfo($conversation_id, $fields = null, $exclude_fields = null, $is_read = null, $before_timestamp = null, $since_timestamp = null)
    {
        $request = $this->getConversationMessagesRequest($conversation_id, $fields, $exclude_fields, $is_read, $before_timestamp, $since_timestamp);

        return $this->performRequest($request);
    }

    protected function getConversationMessagesRequest($conversation_id, $fields = null, $exclude_fields = null, $is_read = null, $before_timestamp = null, $since_timestamp = null): Request
    {
        // verify the required parameter 'conversation_id' is set
        $this->checkRequiredParameter($conversation_id);

        $resourcePath = self::END_POINT . '/{conversation_id}/messages';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $is_read, 'is_read');
        $this->serializeParam($queryParams, $before_timestamp, 'before_timestamp');
        $this->serializeParam($queryParams, $since_timestamp, 'since_timestamp');

        $this->pathParam($resourcePath, 'conversation_id', $conversation_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getConversationMessage($conversation_id, $message_id, $fields = null, $exclude_fields = null)
    {
        return $this->getConversationMessageWithHttpInfo($conversation_id, $message_id, $fields, $exclude_fields);
    }

    public function getConversationMessageWithHttpInfo($conversation_id, $message_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getConversationMessageRequest($conversation_id, $message_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getConversationMessageRequest($conversation_id, $message_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'conversation_id' is set
        $this->checkRequiredParameter($conversation_id);
        // verify the required parameter 'message_id' is set
        $this->checkRequiredParameter($message_id);

        $resourcePath = self::END_POINT . '/{conversation_id}/messages/{message_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'conversation_id', $conversation_id);
        $this->pathParam($resourcePath, 'message_id', $message_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }
}
