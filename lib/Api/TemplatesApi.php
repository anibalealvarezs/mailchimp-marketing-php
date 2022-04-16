<?php

/**
 * TemplatesApi
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

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use MailchimpMarketing\ApiException;
use MailchimpMarketing\ApiTrait;
use MailchimpMarketing\ObjectSerializer;
use stdClass;

class TemplatesApi
{
    use ApiTrait;

    public function deleteTemplate($template_id)
    {
        $this->deleteTemplateWithHttpInfo($template_id);
    }

    public function deleteTemplateWithHttpInfo($template_id)
    {
        $request = $this->deleteTemplateRequest($template_id);

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

    protected function deleteTemplateRequest($template_id): Request
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $template_id when calling '
            );
        }

        $resourcePath = '/templates/{template_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // path params
        $resourcePath = str_replace(
            '{' . 'template_id' . '}',
            ObjectSerializer::toPathValue($template_id),
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

    public function list($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $created_by = null, $since_date_created = null, $before_date_created = null, $type = null, $category = null, $folder_id = null, $sort_field = null, $sort_dir = null)
    {
        return $this->listWithHttpInfo($fields, $exclude_fields, $count, $offset, $created_by, $since_date_created, $before_date_created, $type, $category, $folder_id, $sort_field, $sort_dir);
    }

    public function listWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $created_by = null, $since_date_created = null, $before_date_created = null, $type = null, $category = null, $folder_id = null, $sort_field = null, $sort_dir = null)
    {
        $request = $this->listRequest($fields, $exclude_fields, $count, $offset, $created_by, $since_date_created, $before_date_created, $type, $category, $folder_id, $sort_field, $sort_dir);

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

    protected function listRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $created_by = null, $since_date_created = null, $before_date_created = null, $type = null, $category = null, $folder_id = null, $sort_field = null, $sort_dir = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling TemplatesApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = '/templates';
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
        // query params
        if ($created_by !== null) {
            $queryParams['created_by'] = ObjectSerializer::toQueryValue($created_by);
        }
        // query params
        if ($since_date_created !== null) {
            $queryParams['since_date_created'] = ObjectSerializer::toQueryValue($since_date_created);
        }
        // query params
        if ($before_date_created !== null) {
            $queryParams['before_date_created'] = ObjectSerializer::toQueryValue($before_date_created);
        }
        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
        }
        // query params
        if ($category !== null) {
            $queryParams['category'] = ObjectSerializer::toQueryValue($category);
        }
        // query params
        if ($folder_id !== null) {
            $queryParams['folder_id'] = ObjectSerializer::toQueryValue($folder_id);
        }
        // query params
        if ($sort_field !== null) {
            $queryParams['sort_field'] = ObjectSerializer::toQueryValue($sort_field);
        }
        // query params
        if ($sort_dir !== null) {
            $queryParams['sort_dir'] = ObjectSerializer::toQueryValue($sort_dir);
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

    public function getTemplate($template_id, $fields = null, $exclude_fields = null)
    {
        return $this->getTemplateWithHttpInfo($template_id, $fields, $exclude_fields);
    }

    public function getTemplateWithHttpInfo($template_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getTemplateRequest($template_id, $fields, $exclude_fields);

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

    protected function getTemplateRequest($template_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $template_id when calling '
            );
        }

        $resourcePath = '/templates/{template_id}';
        return $this->setQueryParams($fields, $exclude_fields, $template_id, $resourcePath);
    }

    public function getDefaultContentForTemplate($template_id, $fields = null, $exclude_fields = null)
    {
        return $this->getDefaultContentForTemplateWithHttpInfo($template_id, $fields, $exclude_fields);
    }

    public function getDefaultContentForTemplateWithHttpInfo($template_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getDefaultContentForTemplateRequest($template_id, $fields, $exclude_fields);

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

    protected function getDefaultContentForTemplateRequest($template_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $template_id when calling '
            );
        }

        $resourcePath = '/templates/{template_id}/default-content';
        return $this->setQueryParams($fields, $exclude_fields, $template_id, $resourcePath);
    }

    public function updateTemplate($template_id, $body)
    {
        return $this->updateTemplateWithHttpInfo($template_id, $body);
    }

    public function updateTemplateWithHttpInfo($template_id, $body)
    {
        $request = $this->updateTemplateRequest($template_id, $body);

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

    protected function updateTemplateRequest($template_id, $body): Request
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $template_id when calling '
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling '
            );
        }

        $resourcePath = '/templates/{template_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // path params
        $resourcePath = str_replace(
            '{' . 'template_id' . '}',
            ObjectSerializer::toPathValue($template_id),
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

        $resourcePath = '/templates';
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

    /**
     * @param $fields
     * @param $exclude_fields
     * @param array $template_id
     * @param string $resourcePath
     * @return Request
     */
    protected function setQueryParams($fields, $exclude_fields, array $template_id, string $resourcePath): Request
    {
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        // query params
        if (is_array($fields)) {
            $queryParams['fields'] = ObjectSerializer::serializeCollection($fields, 'csv');
        } else {
            if ($fields !== null) {
                $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
            }
        }
        // query params
        if (is_array($exclude_fields)) {
            $queryParams['exclude_fields'] = ObjectSerializer::serializeCollection($exclude_fields, 'csv');
        } else {
            if ($exclude_fields !== null) {
                $queryParams['exclude_fields'] = ObjectSerializer::toQueryValue($exclude_fields);
            }
        }

        // path params
        $resourcePath = str_replace(
            '{' . 'template_id' . '}',
            ObjectSerializer::toPathValue($template_id),
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
}
