<?php
/**
 * ApiException
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

namespace MailchimpMarketing;

use Exception;
use JetBrains\PhpStorm\Pure;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  MailchimpMarketing
 * @author   Swagger Codegen team / PHP 8.1 compatibility by Aníbal Álvarez
 * @link     https://github.com/anibalealvarezs/mailchimp-marketing-php
 */
class ApiException extends Exception
{

    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var mixed
     */
    protected mixed $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected ?array $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var $responseObject;
     */
    protected mixed $responseObject;

    /**
     * Constructor
     *
     * @param string        $message         Error message
     * @param int           $code            HTTP status code
     * @param string[]|null $responseHeaders HTTP response header
     * @param mixed|null $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    #[Pure] public function __construct($message = "", $code = 0, $responseHeaders = [], mixed $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders(): ?array
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return mixed HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody(): mixed
    {
        return $this->responseBody;
    }

    /**
     * Sets the deseralized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deseralized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
