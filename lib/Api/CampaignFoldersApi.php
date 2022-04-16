<?php

/**
 * CampaignFoldersApi
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

use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use MailchimpMarketing\ApiException;
use MailchimpMarketing\ApiTrait;
use MailchimpMarketing\ObjectSerializer;
use stdClass;

class CampaignFoldersApi
{
    use ApiTrait;

    public function remove($folder_id)
    {
        $this->removeWithHttpInfo($folder_id);
    }

    public function removeWithHttpInfo($folder_id)
    {
        $request = $this->removeRequest($folder_id);

        try {
            $options = $this->createHttpClientOption();
            $response = $this->client->send($request, $options);

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return json_decode($response->getBody()->getContents());

        } catch (ApiException | GuzzleException $e) {
            throw $e->getResponseBody();
        }
    }

    protected function removeRequest($folder_id): Request
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $folder_id when calling '
            );
        }

        $resourcePath = '/campaign-folders/{folder_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // path params
        $resourcePath = str_replace(
            '{' . 'folder_id' . '}',
            ObjectSerializer::toPathValue($folder_id),
            $resourcePath
        );

        // body params
        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json'],
            ['application/json']
        );


        // Basic Authentication
        if (!empty($this->config->getUsername()) && !empty($this->config->getPassword())) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        // OAuth Authentication
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?$query" : ''),
            $headers,
            $httpBody
        );
    }

    public function list($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->listWithHttpInfo($fields, $exclude_fields, $count, $offset);
    }

    public function listWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->listRequest($fields, $exclude_fields, $count, $offset);

        try {
            $options = $this->createHttpClientOption();
            $response = $this->client->send($request, $options);

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return json_decode($response->getBody()->getContents());

        } catch (ApiException | GuzzleException $e) {
            throw $e->getResponseBody();
        }
    }

    protected function listRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling CampaignFoldersApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = '/campaign-folders';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        // query params
        if (is_array($fields)) {
            $queryParams['fields'] = ObjectSerializer::serializeCollection($fields, 'csv');
        } else
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if (is_array($exclude_fields)) {
            $queryParams['exclude_fields'] = ObjectSerializer::serializeCollection($exclude_fields, 'csv');
        } else
        if ($exclude_fields !== null) {
            $queryParams['exclude_fields'] = ObjectSerializer::toQueryValue($exclude_fields);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = ObjectSerializer::toQueryValue($count);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }


        // body params
        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json'],
            ['application/json']
        );


        // Basic Authentication
        if (!empty($this->config->getUsername()) && !empty($this->config->getPassword())) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        // OAuth Authentication
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?$query" : ''),
            $headers,
            $httpBody
        );
    }

    public function get($folder_id, $fields = null, $exclude_fields = null)
    {
        return $this->getWithHttpInfo($folder_id, $fields, $exclude_fields);
    }

    public function getWithHttpInfo($folder_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getRequest($folder_id, $fields, $exclude_fields);

        try {
            $options = $this->createHttpClientOption();
            $response = $this->client->send($request, $options);

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return json_decode($response->getBody()->getContents());

        } catch (ApiException | GuzzleException $e) {
            throw $e->getResponseBody();
        }
    }

    protected function getRequest($folder_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $folder_id when calling '
            );
        }

        $resourcePath = '/campaign-folders/{folder_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        // query params
        if (is_array($fields)) {
            $queryParams['fields'] = ObjectSerializer::serializeCollection($fields, 'csv');
        } else
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if (is_array($exclude_fields)) {
            $queryParams['exclude_fields'] = ObjectSerializer::serializeCollection($exclude_fields, 'csv');
        } else
        if ($exclude_fields !== null) {
            $queryParams['exclude_fields'] = ObjectSerializer::toQueryValue($exclude_fields);
        }

        // path params
        $resourcePath = str_replace(
            '{' . 'folder_id' . '}',
            ObjectSerializer::toPathValue($folder_id),
            $resourcePath
        );

        // body params
        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json'],
            ['application/json']
        );


        // Basic Authentication
        if (!empty($this->config->getUsername()) && !empty($this->config->getPassword())) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        // OAuth Authentication
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?$query" : ''),
            $headers,
            $httpBody
        );
    }

    public function update($folder_id, $body)
    {
        return $this->updateWithHttpInfo($folder_id, $body);
    }

    public function updateWithHttpInfo($folder_id, $body)
    {
        $request = $this->updateRequest($folder_id, $body);

        try {
            $options = $this->createHttpClientOption();
            $response = $this->client->send($request, $options);

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return json_decode($response->getBody()->getContents());

        } catch (ApiException | GuzzleException $e) {
            throw $e->getResponseBody();
        }
    }

    protected function updateRequest($folder_id, $body): Request
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $folder_id when calling '
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling '
            );
        }

        $resourcePath = '/campaign-folders/{folder_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // path params
        $resourcePath = str_replace(
            '{' . 'folder_id' . '}',
            ObjectSerializer::toPathValue($folder_id),
            $resourcePath
        );

        // body params
        $_tempBody = $body ?? null;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json'],
            ['application/json']
        );

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
                if ($httpBody instanceof stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                if (is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        }


        // Basic Authentication
        if (!empty($this->config->getUsername()) && !empty($this->config->getPassword())) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        // OAuth Authentication
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?$query" : ''),
            $headers,
            $httpBody
        );
    }

    public function create($body)
    {
        return $this->createWithHttpInfo($body);
    }

    public function createWithHttpInfo($body)
    {
        $request = $this->createRequest($body);

        try {
            $options = $this->createHttpClientOption();
            $response = $this->client->send($request, $options);

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return json_decode($response->getBody()->getContents());

        } catch (ApiException | GuzzleException $e) {
            throw $e->getResponseBody();
        }
    }

    protected function createRequest($body): Request
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling '
            );
        }

        $resourcePath = '/campaign-folders';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';


        // body params
        $_tempBody = $body ?? null;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json'],
            ['application/json']
        );

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
                if ($httpBody instanceof stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                if (is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        }


        // Basic Authentication
        if (!empty($this->config->getUsername()) && !empty($this->config->getPassword())) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        // OAuth Authentication
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?$query" : ''),
            $headers,
            $httpBody
        );
    }
}
