<?php

/**
 * VerifiedDomainsApi
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

class VerifiedDomainsApi
{
    use ApiTrait;

    const END_POINT = '/verified-domains';

    /**
     */
    public function createVerifiedDomain($body)
    {
        return $this->createVerifiedDomainWithHttpInfo($body);
    }

    /**
     */
    public function createVerifiedDomainWithHttpInfo($body)
    {
        $request = $this->createVerifiedDomainRequest($body);

        return $this->performRequest($request);
    }

    protected function createVerifiedDomainRequest($body): Request
    {
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];

        // body params
        $headers = $this->setHeaders($headerParams);

        // for model (json/xml)
        $httpBody = $body;

        $httpBody = $this->encodeBodyWhenJSON($httpBody, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteDomain($domain_name)
    {
        $this->deleteDomainWithHttpInfo($domain_name);
    }

    public function deleteDomainWithHttpInfo($domain_name)
    {
        $request = $this->deleteDomainRequest($domain_name);

        return $this->performRequest($request);
    }

    protected function deleteDomainRequest($domain_name): Request
    {
        // verify the required parameter 'domain_name' is set
        $this->checkRequiredParameter($domain_name);

        $resourcePath = self::END_POINT . '/{domain_name}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'domain_name', $domain_name);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getDomain($domain_name)
    {
        return $this->getDomainWithHttpInfo($domain_name);
    }

    public function getDomainWithHttpInfo($domain_name)
    {
        $request = $this->getDomainRequest($domain_name);

        return $this->performRequest($request);
    }

    protected function getDomainRequest($domain_name): Request
    {
        // verify the required parameter 'domain_name' is set
        $this->checkRequiredParameter($domain_name);

        $resourcePath = self::END_POINT . '/{domain_name}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'domain_name', $domain_name);

        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getVerifiedDomainsAll()
    {
        return $this->getVerifiedDomainsAllWithHttpInfo();
    }

    public function getVerifiedDomainsAllWithHttpInfo()
    {
        $request = $this->getVerifiedDomainsAllRequest();

        return $this->performRequest($request);
    }

    protected function getVerifiedDomainsAllRequest(): Request
    {

        $resourcePath = self::END_POINT;
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function submitDomainVerification($domain_name, $body)
    {
        return $this->submitDomainVerificationWithHttpInfo($domain_name, $body);
    }

    public function submitDomainVerificationWithHttpInfo($domain_name, $body)
    {
        $request = $this->submitDomainVerificationRequest($domain_name, $body);

        return $this->performRequest($request);
    }

    protected function submitDomainVerificationRequest($domain_name, $body): Request
    {
        // verify the required parameter 'domain_name' is set
        $this->checkRequiredParameter($domain_name);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/{domain_name}/actions/verify';
        $queryParams = [];
        $headerParams = [];

        $this->pathParam($resourcePath, 'domain_name', $domain_name);

        // body params
        $headers = $this->setHeaders($headerParams);

        // for model (json/xml)
        $httpBody = $body;

        $httpBody = $this->encodeBodyWhenJSON($httpBody, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }
}
