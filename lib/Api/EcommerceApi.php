<?php

/**
 * EcommerceApi
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

class EcommerceApi
{
    use ApiTrait;

    const END_POINT = '/ecommerce';

    public function deleteStore($store_id)
    {
        return $this->deleteStoreWithHttpInfo($store_id);
    }

    public function deleteStoreWithHttpInfo($store_id)
    {
        $request = $this->deleteStoreRequest($store_id);

        return $this->performRequest($request);
    }

    protected function deleteStoreRequest($store_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteStoreCart($store_id, $cart_id)
    {
        $this->deleteStoreCartWithHttpInfo($store_id, $cart_id);
    }

    public function deleteStoreCartWithHttpInfo($store_id, $cart_id)
    {
        $request = $this->deleteStoreCartRequest($store_id, $cart_id);

        return $this->performRequest($request);
    }

    protected function deleteStoreCartRequest($store_id, $cart_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'cart_id' is set
        $this->checkRequiredParameter($cart_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/carts/{cart_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'cart_id', $cart_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteCartLineItem($store_id, $cart_id, $line_id)
    {
        $this->deleteCartLineItemWithHttpInfo($store_id, $cart_id, $line_id);
    }

    public function deleteCartLineItemWithHttpInfo($store_id, $cart_id, $line_id)
    {
        $request = $this->deleteCartLineItemRequest($store_id, $cart_id, $line_id);

        return $this->performRequest($request);
    }

    protected function deleteCartLineItemRequest($store_id, $cart_id, $line_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'cart_id' is set
        $this->checkRequiredParameter($cart_id);
        // verify the required parameter 'line_id' is set
        $this->checkRequiredParameter($line_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/carts/{cart_id}/lines/{line_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'cart_id', $cart_id);
        $this->pathParam($resourcePath, 'line_id', $line_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteStoreCustomer($store_id, $customer_id)
    {
        $this->deleteStoreCustomerWithHttpInfo($store_id, $customer_id);
    }

    public function deleteStoreCustomerWithHttpInfo($store_id, $customer_id)
    {
        $request = $this->deleteStoreCustomerRequest($store_id, $customer_id);

        return $this->performRequest($request);
    }

    protected function deleteStoreCustomerRequest($store_id, $customer_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'customer_id' is set
        $this->checkRequiredParameter($customer_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/customers/{customer_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'customer_id', $customer_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteOrder($store_id, $order_id)
    {
        $this->deleteOrderWithHttpInfo($store_id, $order_id);
    }

    public function deleteOrderWithHttpInfo($store_id, $order_id)
    {
        $request = $this->deleteOrderRequest($store_id, $order_id);

        return $this->performRequest($request);
    }

    protected function deleteOrderRequest($store_id, $order_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'order_id' is set
        $this->checkRequiredParameter($order_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/orders/{order_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'order_id', $order_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteOrderLineItem($store_id, $order_id, $line_id)
    {
        $this->deleteOrderLineItemWithHttpInfo($store_id, $order_id, $line_id);
    }

    public function deleteOrderLineItemWithHttpInfo($store_id, $order_id, $line_id)
    {
        $request = $this->deleteOrderLineItemRequest($store_id, $order_id, $line_id);

        return $this->performRequest($request);
    }

    protected function deleteOrderLineItemRequest($store_id, $order_id, $line_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'order_id' is set
        $this->checkRequiredParameter($order_id);
        // verify the required parameter 'line_id' is set
        $this->checkRequiredParameter($line_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/orders/{order_id}/lines/{line_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'order_id', $order_id);
        $this->pathParam($resourcePath, 'line_id', $line_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteStoreProduct($store_id, $product_id)
    {
        $this->deleteStoreProductWithHttpInfo($store_id, $product_id);
    }

    public function deleteStoreProductWithHttpInfo($store_id, $product_id)
    {
        $request = $this->deleteStoreProductRequest($store_id, $product_id);

        return $this->performRequest($request);
    }

    protected function deleteStoreProductRequest($store_id, $product_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteProductImage($store_id, $product_id, $image_id)
    {
        $this->deleteProductImageWithHttpInfo($store_id, $product_id, $image_id);
    }

    public function deleteProductImageWithHttpInfo($store_id, $product_id, $image_id)
    {
        $request = $this->deleteProductImageRequest($store_id, $product_id, $image_id);

        return $this->performRequest($request);
    }

    protected function deleteProductImageRequest($store_id, $product_id, $image_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'image_id' is set
        $this->checkRequiredParameter($image_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/images/{image_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);
        $this->pathParam($resourcePath, 'image_id', $image_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deleteProductVariant($store_id, $product_id, $variant_id)
    {
        $this->deleteProductVariantWithHttpInfo($store_id, $product_id, $variant_id);
    }

    public function deleteProductVariantWithHttpInfo($store_id, $product_id, $variant_id)
    {
        $request = $this->deleteProductVariantRequest($store_id, $product_id, $variant_id);

        return $this->performRequest($request);
    }

    protected function deleteProductVariantRequest($store_id, $product_id, $variant_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'variant_id' is set
        $this->checkRequiredParameter($variant_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/variants/{variant_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);
        $this->pathParam($resourcePath, 'variant_id', $variant_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deletePromoCode($store_id, $promo_rule_id, $promo_code_id)
    {
        $this->deletePromoCodeWithHttpInfo($store_id, $promo_rule_id, $promo_code_id);
    }

    public function deletePromoCodeWithHttpInfo($store_id, $promo_rule_id, $promo_code_id)
    {
        $request = $this->deletePromoCodeRequest($store_id, $promo_rule_id, $promo_code_id);

        return $this->performRequest($request);
    }

    protected function deletePromoCodeRequest($store_id, $promo_rule_id, $promo_code_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'promo_rule_id' is set
        $this->checkRequiredParameter($promo_rule_id);
        // verify the required parameter 'promo_code_id' is set
        $this->checkRequiredParameter($promo_code_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules/{promo_rule_id}/promo-codes/{promo_code_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'promo_rule_id', $promo_rule_id);
        $this->pathParam($resourcePath, 'promo_code_id', $promo_code_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function deletePromoRule($store_id, $promo_rule_id)
    {
        $this->deletePromoRuleWithHttpInfo($store_id, $promo_rule_id);
    }

    public function deletePromoRuleWithHttpInfo($store_id, $promo_rule_id)
    {
        $request = $this->deletePromoRuleRequest($store_id, $promo_rule_id);

        return $this->performRequest($request);
    }

    protected function deletePromoRuleRequest($store_id, $promo_rule_id): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'promo_rule_id' is set
        $this->checkRequiredParameter($promo_rule_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules/{promo_rule_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'promo_rule_id', $promo_rule_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestDelete($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function orders($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $campaign_id = null, $outreach_id = null, $customer_id = null, $has_outreach = null)
    {
        return $this->ordersWithHttpInfo($fields, $exclude_fields, $count, $offset, $campaign_id, $outreach_id, $customer_id, $has_outreach);
    }

    public function ordersWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $campaign_id = null, $outreach_id = null, $customer_id = null, $has_outreach = null)
    {
        $request = $this->ordersRequest($fields, $exclude_fields, $count, $offset, $campaign_id, $outreach_id, $customer_id, $has_outreach);

        return $this->performRequest($request);
    }

    protected function ordersRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0', $campaign_id = null, $outreach_id = null, $customer_id = null, $has_outreach = null): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/orders';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $campaign_id, 'campaign_id');
        $this->serializeParam($queryParams, $outreach_id, 'outreach_id');
        $this->serializeParam($queryParams, $customer_id, 'customer_id');
        $this->serializeParam($queryParams, $has_outreach, 'has_outreach');

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function stores($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->storesWithHttpInfo($fields, $exclude_fields, $count, $offset);
    }

    public function storesWithHttpInfo($fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->storesRequest($fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function storesRequest($fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores';
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

    public function getStore($store_id, $fields = null, $exclude_fields = null)
    {
        return $this->getStoreWithHttpInfo($store_id, $fields, $exclude_fields);
    }

    public function getStoreWithHttpInfo($store_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getStoreRequest($store_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getStoreRequest($store_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getStoreCarts($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getStoreCartsWithHttpInfo($store_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getStoreCartsWithHttpInfo($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getStoreCartsRequest($store_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getStoreCartsRequest($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/carts';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'store_id', $store_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getStoreCart($store_id, $cart_id, $fields = null, $exclude_fields = null)
    {
        return $this->getStoreCartWithHttpInfo($store_id, $cart_id, $fields, $exclude_fields);
    }

    public function getStoreCartWithHttpInfo($store_id, $cart_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getStoreCartRequest($store_id, $cart_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getStoreCartRequest($store_id, $cart_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'cart_id' is set
        $this->checkRequiredParameter($cart_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/carts/{cart_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'cart_id', $cart_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getAllCartLineItems($store_id, $cart_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getAllCartLineItemsWithHttpInfo($store_id, $cart_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getAllCartLineItemsWithHttpInfo($store_id, $cart_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getAllCartLineItemsRequest($store_id, $cart_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getAllCartLineItemsRequest($store_id, $cart_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'cart_id' is set
        $this->checkRequiredParameter($cart_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/carts/{cart_id}/lines';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'cart_id', $cart_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getCartLineItem($store_id, $cart_id, $line_id, $fields = null, $exclude_fields = null)
    {
        return $this->getCartLineItemWithHttpInfo($store_id, $cart_id, $line_id, $fields, $exclude_fields);
    }

    public function getCartLineItemWithHttpInfo($store_id, $cart_id, $line_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getCartLineItemRequest($store_id, $cart_id, $line_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getCartLineItemRequest($store_id, $cart_id, $line_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'cart_id' is set
        $this->checkRequiredParameter($cart_id);
        // verify the required parameter 'line_id' is set
        $this->checkRequiredParameter($line_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/carts/{cart_id}/lines/{line_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'cart_id', $cart_id);
        $this->pathParam($resourcePath, 'line_id', $line_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getAllStoreCustomers($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $email_address = null)
    {
        return $this->getAllStoreCustomersWithHttpInfo($store_id, $fields, $exclude_fields, $count, $offset, $email_address);
    }

    public function getAllStoreCustomersWithHttpInfo($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $email_address = null)
    {
        $request = $this->getAllStoreCustomersRequest($store_id, $fields, $exclude_fields, $count, $offset, $email_address);

        return $this->performRequest($request);
    }

    protected function getAllStoreCustomersRequest($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $email_address = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/customers';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $email_address, 'email_address');

        $this->pathParam($resourcePath, 'store_id', $store_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getStoreCustomer($store_id, $customer_id, $fields = null, $exclude_fields = null)
    {
        return $this->getStoreCustomerWithHttpInfo($store_id, $customer_id, $fields, $exclude_fields);
    }

    public function getStoreCustomerWithHttpInfo($store_id, $customer_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getStoreCustomerRequest($store_id, $customer_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getStoreCustomerRequest($store_id, $customer_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'customer_id' is set
        $this->checkRequiredParameter($customer_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/customers/{customer_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'customer_id', $customer_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getStoreOrders($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $customer_id = null, $has_outreach = null, $campaign_id = null, $outreach_id = null)
    {
        return $this->getStoreOrdersWithHttpInfo($store_id, $fields, $exclude_fields, $count, $offset, $customer_id, $has_outreach, $campaign_id, $outreach_id);
    }

    public function getStoreOrdersWithHttpInfo($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $customer_id = null, $has_outreach = null, $campaign_id = null, $outreach_id = null)
    {
        $request = $this->getStoreOrdersRequest($store_id, $fields, $exclude_fields, $count, $offset, $customer_id, $has_outreach, $campaign_id, $outreach_id);

        return $this->performRequest($request);
    }

    protected function getStoreOrdersRequest($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0', $customer_id = null, $has_outreach = null, $campaign_id = null, $outreach_id = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/orders';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');
        $this->serializeParam($queryParams, $customer_id, 'customer_id');
        $this->serializeParam($queryParams, $has_outreach, 'has_outreach');
        $this->serializeParam($queryParams, $campaign_id, 'campaign_id');
        $this->serializeParam($queryParams, $outreach_id, 'outreach_id');

        $this->pathParam($resourcePath, 'store_id', $store_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getOrder($store_id, $order_id, $fields = null, $exclude_fields = null)
    {
        return $this->getOrderWithHttpInfo($store_id, $order_id, $fields, $exclude_fields);
    }

    public function getOrderWithHttpInfo($store_id, $order_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getOrderRequest($store_id, $order_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getOrderRequest($store_id, $order_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'order_id' is set
        $this->checkRequiredParameter($order_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/orders/{order_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'order_id', $order_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getAllOrderLineItems($store_id, $order_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getAllOrderLineItemsWithHttpInfo($store_id, $order_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getAllOrderLineItemsWithHttpInfo($store_id, $order_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getAllOrderLineItemsRequest($store_id, $order_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getAllOrderLineItemsRequest($store_id, $order_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'order_id' is set
        $this->checkRequiredParameter($order_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/orders/{order_id}/lines';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'order_id', $order_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getOrderLineItem($store_id, $order_id, $line_id, $fields = null, $exclude_fields = null)
    {
        return $this->getOrderLineItemWithHttpInfo($store_id, $order_id, $line_id, $fields, $exclude_fields);
    }

    public function getOrderLineItemWithHttpInfo($store_id, $order_id, $line_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getOrderLineItemRequest($store_id, $order_id, $line_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getOrderLineItemRequest($store_id, $order_id, $line_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'order_id' is set
        $this->checkRequiredParameter($order_id);
        // verify the required parameter 'line_id' is set
        $this->checkRequiredParameter($line_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/orders/{order_id}/lines/{line_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'order_id', $order_id);
        $this->pathParam($resourcePath, 'line_id', $line_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getAllStoreProducts($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getAllStoreProductsWithHttpInfo($store_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getAllStoreProductsWithHttpInfo($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getAllStoreProductsRequest($store_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getAllStoreProductsRequest($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/products';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'store_id', $store_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getStoreProduct($store_id, $product_id, $fields = null, $exclude_fields = null)
    {
        return $this->getStoreProductWithHttpInfo($store_id, $product_id, $fields, $exclude_fields);
    }

    public function getStoreProductWithHttpInfo($store_id, $product_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getStoreProductRequest($store_id, $product_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getStoreProductRequest($store_id, $product_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getProductImages($store_id, $product_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getProductImagesWithHttpInfo($store_id, $product_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getProductImagesWithHttpInfo($store_id, $product_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getProductImagesRequest($store_id, $product_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getProductImagesRequest($store_id, $product_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/images';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getProductImage($store_id, $product_id, $image_id, $fields = null, $exclude_fields = null)
    {
        return $this->getProductImageWithHttpInfo($store_id, $product_id, $image_id, $fields, $exclude_fields);
    }

    public function getProductImageWithHttpInfo($store_id, $product_id, $image_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getProductImageRequest($store_id, $product_id, $image_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getProductImageRequest($store_id, $product_id, $image_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'image_id' is set
        $this->checkRequiredParameter($image_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/images/{image_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);
        $this->pathParam($resourcePath, 'image_id', $image_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getProductVariants($store_id, $product_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getProductVariantsWithHttpInfo($store_id, $product_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getProductVariantsWithHttpInfo($store_id, $product_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getProductVariantsRequest($store_id, $product_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getProductVariantsRequest($store_id, $product_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/variants';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getProductVariant($store_id, $product_id, $variant_id, $fields = null, $exclude_fields = null)
    {
        return $this->getProductVariantWithHttpInfo($store_id, $product_id, $variant_id, $fields, $exclude_fields);
    }

    public function getProductVariantWithHttpInfo($store_id, $product_id, $variant_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getProductVariantRequest($store_id, $product_id, $variant_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getProductVariantRequest($store_id, $product_id, $variant_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'variant_id' is set
        $this->checkRequiredParameter($variant_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/variants/{variant_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);
        $this->pathParam($resourcePath, 'variant_id', $variant_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getPromoCodes($promo_rule_id, $store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->getPromoCodesWithHttpInfo($promo_rule_id, $store_id, $fields, $exclude_fields, $count, $offset);
    }

    public function getPromoCodesWithHttpInfo($promo_rule_id, $store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->getPromoCodesRequest($promo_rule_id, $store_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function getPromoCodesRequest($promo_rule_id, $store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'promo_rule_id' is set
        $this->checkRequiredParameter($promo_rule_id);
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules/{promo_rule_id}/promo-codes';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'promo_rule_id', $promo_rule_id);
        $this->pathParam($resourcePath, 'store_id', $store_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getPromoCode($store_id, $promo_rule_id, $promo_code_id, $fields = null, $exclude_fields = null)
    {
        return $this->getPromoCodeWithHttpInfo($store_id, $promo_rule_id, $promo_code_id, $fields, $exclude_fields);
    }

    public function getPromoCodeWithHttpInfo($store_id, $promo_rule_id, $promo_code_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getPromoCodeRequest($store_id, $promo_rule_id, $promo_code_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getPromoCodeRequest($store_id, $promo_rule_id, $promo_code_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'promo_rule_id' is set
        $this->checkRequiredParameter($promo_rule_id);
        // verify the required parameter 'promo_code_id' is set
        $this->checkRequiredParameter($promo_code_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules/{promo_rule_id}/promo-codes/{promo_code_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'promo_rule_id', $promo_rule_id);
        $this->pathParam($resourcePath, 'promo_code_id', $promo_code_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function listPromoRules($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        return $this->listPromoRulesWithHttpInfo($store_id, $fields, $exclude_fields, $count, $offset);
    }

    public function listPromoRulesWithHttpInfo($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0')
    {
        $request = $this->listPromoRulesRequest($store_id, $fields, $exclude_fields, $count, $offset);

        return $this->performRequest($request);
    }

    protected function listPromoRulesRequest($store_id, $fields = null, $exclude_fields = null, $count = '10', $offset = '0'): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        if ($count !== null && $count > 1000) {
            throw new InvalidArgumentException('invalid value for "$count" when calling EcommerceApi., must be smaller than or equal to 1000.');
        }


        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');
        $this->serializeParam($queryParams, $count, 'count');
        $this->serializeParam($queryParams, $offset, 'offset');

        $this->pathParam($resourcePath, 'store_id', $store_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function getPromoRule($store_id, $promo_rule_id, $fields = null, $exclude_fields = null)
    {
        return $this->getPromoRuleWithHttpInfo($store_id, $promo_rule_id, $fields, $exclude_fields);
    }

    public function getPromoRuleWithHttpInfo($store_id, $promo_rule_id, $fields = null, $exclude_fields = null)
    {
        $request = $this->getPromoRuleRequest($store_id, $promo_rule_id, $fields, $exclude_fields);

        return $this->performRequest($request);
    }

    protected function getPromoRuleRequest($store_id, $promo_rule_id, $fields = null, $exclude_fields = null): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'promo_rule_id' is set
        $this->checkRequiredParameter($promo_rule_id);

        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules/{promo_rule_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        
        $this->serializeParam($queryParams, $fields, 'fields');
        $this->serializeParam($queryParams, $exclude_fields, 'exclude_fields');

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'promo_rule_id', $promo_rule_id);

        // body params
        $headers = $this->setHeaders($headerParams);

        return $this->queryAndRequestGet($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateStore($store_id, $body)
    {
        return $this->updateStoreWithHttpInfo($store_id, $body);
    }

    public function updateStoreWithHttpInfo($store_id, $body)
    {
        $request = $this->updateStoreRequest($store_id, $body);

        return $this->performRequest($request);
    }

    protected function updateStoreRequest($store_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateStoreCart($store_id, $cart_id, $body)
    {
        return $this->updateStoreCartWithHttpInfo($store_id, $cart_id, $body);
    }

    public function updateStoreCartWithHttpInfo($store_id, $cart_id, $body)
    {
        $request = $this->updateStoreCartRequest($store_id, $cart_id, $body);

        return $this->performRequest($request);
    }

    protected function updateStoreCartRequest($store_id, $cart_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'cart_id' is set
        $this->checkRequiredParameter($cart_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/carts/{cart_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'cart_id', $cart_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateCartLineItem($store_id, $cart_id, $line_id, $body)
    {
        return $this->updateCartLineItemWithHttpInfo($store_id, $cart_id, $line_id, $body);
    }

    public function updateCartLineItemWithHttpInfo($store_id, $cart_id, $line_id, $body)
    {
        $request = $this->updateCartLineItemRequest($store_id, $cart_id, $line_id, $body);

        return $this->performRequest($request);
    }

    protected function updateCartLineItemRequest($store_id, $cart_id, $line_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'cart_id' is set
        $this->checkRequiredParameter($cart_id);
        // verify the required parameter 'line_id' is set
        $this->checkRequiredParameter($line_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/carts/{cart_id}/lines/{line_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'cart_id', $cart_id);
        $this->pathParam($resourcePath, 'line_id', $line_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateStoreCustomer($store_id, $customer_id, $body)
    {
        return $this->updateStoreCustomerWithHttpInfo($store_id, $customer_id, $body);
    }

    public function updateStoreCustomerWithHttpInfo($store_id, $customer_id, $body)
    {
        $request = $this->updateStoreCustomerRequest($store_id, $customer_id, $body);

        return $this->performRequest($request);
    }

    protected function updateStoreCustomerRequest($store_id, $customer_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'customer_id' is set
        $this->checkRequiredParameter($customer_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/customers/{customer_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'customer_id', $customer_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateOrder($store_id, $order_id, $body)
    {
        return $this->updateOrderWithHttpInfo($store_id, $order_id, $body);
    }

    public function updateOrderWithHttpInfo($store_id, $order_id, $body)
    {
        $request = $this->updateOrderRequest($store_id, $order_id, $body);

        return $this->performRequest($request);
    }

    protected function updateOrderRequest($store_id, $order_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'order_id' is set
        $this->checkRequiredParameter($order_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/orders/{order_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'order_id', $order_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateOrderLineItem($store_id, $order_id, $line_id, $body)
    {
        return $this->updateOrderLineItemWithHttpInfo($store_id, $order_id, $line_id, $body);
    }

    public function updateOrderLineItemWithHttpInfo($store_id, $order_id, $line_id, $body)
    {
        $request = $this->updateOrderLineItemRequest($store_id, $order_id, $line_id, $body);

        return $this->performRequest($request);
    }

    protected function updateOrderLineItemRequest($store_id, $order_id, $line_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'order_id' is set
        $this->checkRequiredParameter($order_id);
        // verify the required parameter 'line_id' is set
        $this->checkRequiredParameter($line_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/orders/{order_id}/lines/{line_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'order_id', $order_id);
        $this->pathParam($resourcePath, 'line_id', $line_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateStoreProduct($store_id, $product_id, $body)
    {
        return $this->updateStoreProductWithHttpInfo($store_id, $product_id, $body);
    }

    public function updateStoreProductWithHttpInfo($store_id, $product_id, $body)
    {
        $request = $this->updateStoreProductRequest($store_id, $product_id, $body);

        return $this->performRequest($request);
    }

    protected function updateStoreProductRequest($store_id, $product_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateProductImage($store_id, $product_id, $image_id, $body)
    {
        return $this->updateProductImageWithHttpInfo($store_id, $product_id, $image_id, $body);
    }

    public function updateProductImageWithHttpInfo($store_id, $product_id, $image_id, $body)
    {
        $request = $this->updateProductImageRequest($store_id, $product_id, $image_id, $body);

        return $this->performRequest($request);
    }

    protected function updateProductImageRequest($store_id, $product_id, $image_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'image_id' is set
        $this->checkRequiredParameter($image_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/images/{image_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);
        $this->pathParam($resourcePath, 'image_id', $image_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updateProductVariant($store_id, $product_id, $variant_id, $body)
    {
        return $this->updateProductVariantWithHttpInfo($store_id, $product_id, $variant_id, $body);
    }

    public function updateProductVariantWithHttpInfo($store_id, $product_id, $variant_id, $body)
    {
        $request = $this->updateProductVariantRequest($store_id, $product_id, $variant_id, $body);

        return $this->performRequest($request);
    }

    protected function updateProductVariantRequest($store_id, $product_id, $variant_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'variant_id' is set
        $this->checkRequiredParameter($variant_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/variants/{variant_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);
        $this->pathParam($resourcePath, 'variant_id', $variant_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updatePromoCode($store_id, $promo_rule_id, $promo_code_id, $body)
    {
        return $this->updatePromoCodeWithHttpInfo($store_id, $promo_rule_id, $promo_code_id, $body);
    }

    public function updatePromoCodeWithHttpInfo($store_id, $promo_rule_id, $promo_code_id, $body)
    {
        $request = $this->updatePromoCodeRequest($store_id, $promo_rule_id, $promo_code_id, $body);

        return $this->performRequest($request);
    }

    protected function updatePromoCodeRequest($store_id, $promo_rule_id, $promo_code_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'promo_rule_id' is set
        $this->checkRequiredParameter($promo_rule_id);
        // verify the required parameter 'promo_code_id' is set
        $this->checkRequiredParameter($promo_code_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules/{promo_rule_id}/promo-codes/{promo_code_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'promo_rule_id', $promo_rule_id);
        $this->pathParam($resourcePath, 'promo_code_id', $promo_code_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function updatePromoRule($store_id, $promo_rule_id, $body)
    {
        return $this->updatePromoRuleWithHttpInfo($store_id, $promo_rule_id, $body);
    }

    public function updatePromoRuleWithHttpInfo($store_id, $promo_rule_id, $body)
    {
        $request = $this->updatePromoRuleRequest($store_id, $promo_rule_id, $body);

        return $this->performRequest($request);
    }

    protected function updatePromoRuleRequest($store_id, $promo_rule_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'promo_rule_id' is set
        $this->checkRequiredParameter($promo_rule_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules/{promo_rule_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'promo_rule_id', $promo_rule_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPatch($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addStore($body)
    {
        return $this->addStoreWithHttpInfo($body);
    }

    public function addStoreWithHttpInfo($body)
    {
        $request = $this->addStoreRequest($body);

        return $this->performRequest($request);
    }

    protected function addStoreRequest($body): Request
    {
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addStoreCart($store_id, $body)
    {
        return $this->addStoreCartWithHttpInfo($store_id, $body);
    }

    public function addStoreCartWithHttpInfo($store_id, $body)
    {
        $request = $this->addStoreCartRequest($store_id, $body);

        return $this->performRequest($request);
    }

    protected function addStoreCartRequest($store_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/carts';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addCartLineItem($store_id, $cart_id, $body)
    {
        return $this->addCartLineItemWithHttpInfo($store_id, $cart_id, $body);
    }

    public function addCartLineItemWithHttpInfo($store_id, $cart_id, $body)
    {
        $request = $this->addCartLineItemRequest($store_id, $cart_id, $body);

        return $this->performRequest($request);
    }

    protected function addCartLineItemRequest($store_id, $cart_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'cart_id' is set
        $this->checkRequiredParameter($cart_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/carts/{cart_id}/lines';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'cart_id', $cart_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addStoreCustomer($store_id, $body)
    {
        return $this->addStoreCustomerWithHttpInfo($store_id, $body);
    }

    public function addStoreCustomerWithHttpInfo($store_id, $body)
    {
        $request = $this->addStoreCustomerRequest($store_id, $body);

        return $this->performRequest($request);
    }

    protected function addStoreCustomerRequest($store_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/customers';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addStoreOrder($store_id, $body)
    {
        return $this->addStoreOrderWithHttpInfo($store_id, $body);
    }

    public function addStoreOrderWithHttpInfo($store_id, $body)
    {
        $request = $this->addStoreOrderRequest($store_id, $body);

        return $this->performRequest($request);
    }

    protected function addStoreOrderRequest($store_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/orders';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addOrderLineItem($store_id, $order_id, $body)
    {
        return $this->addOrderLineItemWithHttpInfo($store_id, $order_id, $body);
    }

    public function addOrderLineItemWithHttpInfo($store_id, $order_id, $body)
    {
        $request = $this->addOrderLineItemRequest($store_id, $order_id, $body);

        return $this->performRequest($request);
    }

    protected function addOrderLineItemRequest($store_id, $order_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'order_id' is set
        $this->checkRequiredParameter($order_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/orders/{order_id}/lines';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'order_id', $order_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addStoreProduct($store_id, $body)
    {
        return $this->addStoreProductWithHttpInfo($store_id, $body);
    }

    public function addStoreProductWithHttpInfo($store_id, $body)
    {
        $request = $this->addStoreProductRequest($store_id, $body);

        return $this->performRequest($request);
    }

    protected function addStoreProductRequest($store_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addProductImage($store_id, $product_id, $body)
    {
        return $this->addProductImageWithHttpInfo($store_id, $product_id, $body);
    }

    public function addProductImageWithHttpInfo($store_id, $product_id, $body)
    {
        $request = $this->addProductImageRequest($store_id, $product_id, $body);

        return $this->performRequest($request);
    }

    protected function addProductImageRequest($store_id, $product_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/images';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addProductVariants($store_id, $product_id, $body)
    {
        return $this->addProductVariantsWithHttpInfo($store_id, $product_id, $body);
    }

    public function addProductVariantsWithHttpInfo($store_id, $product_id, $body)
    {
        $request = $this->addProductVariantsRequest($store_id, $product_id, $body);

        return $this->performRequest($request);
    }

    protected function addProductVariantsRequest($store_id, $product_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/variants';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addPromoCode($store_id, $promo_rule_id, $body)
    {
        return $this->addPromoCodeWithHttpInfo($store_id, $promo_rule_id, $body);
    }

    public function addPromoCodeWithHttpInfo($store_id, $promo_rule_id, $body)
    {
        $request = $this->addPromoCodeRequest($store_id, $promo_rule_id, $body);

        return $this->performRequest($request);
    }

    protected function addPromoCodeRequest($store_id, $promo_rule_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'promo_rule_id' is set
        $this->checkRequiredParameter($promo_rule_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules/{promo_rule_id}/promo-codes';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'promo_rule_id', $promo_rule_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addPromoRules($store_id, $body)
    {
        return $this->addPromoRulesWithHttpInfo($store_id, $body);
    }

    public function addPromoRulesWithHttpInfo($store_id, $body)
    {
        $request = $this->addPromoRulesRequest($store_id, $body);

        return $this->performRequest($request);
    }

    protected function addPromoRulesRequest($store_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/promo-rules';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPost($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function setStoreCustomer($store_id, $customer_id, $body)
    {
        return $this->setStoreCustomerWithHttpInfo($store_id, $customer_id, $body);
    }

    public function setStoreCustomerWithHttpInfo($store_id, $customer_id, $body)
    {
        $request = $this->setStoreCustomerRequest($store_id, $customer_id, $body);

        return $this->performRequest($request);
    }

    protected function setStoreCustomerRequest($store_id, $customer_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'customer_id' is set
        $this->checkRequiredParameter($customer_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/customers/{customer_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'customer_id', $customer_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPut($queryParams, $resourcePath, $headers, $httpBody);
    }

    public function addProductVariant($store_id, $product_id, $variant_id, $body)
    {
        return $this->addProductVariantWithHttpInfo($store_id, $product_id, $variant_id, $body);
    }

    public function addProductVariantWithHttpInfo($store_id, $product_id, $variant_id, $body)
    {
        $request = $this->addProductVariantRequest($store_id, $product_id, $variant_id, $body);

        return $this->performRequest($request);
    }

    protected function addProductVariantRequest($store_id, $product_id, $variant_id, $body): Request
    {
        // verify the required parameter 'store_id' is set
        $this->checkRequiredParameter($store_id);
        // verify the required parameter 'product_id' is set
        $this->checkRequiredParameter($product_id);
        // verify the required parameter 'variant_id' is set
        $this->checkRequiredParameter($variant_id);
        // verify the required parameter 'body' is set
        $this->checkRequiredParameter($body);

        $resourcePath = self::END_POINT . '/stores/{store_id}/products/{product_id}/variants/{variant_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $this->pathParam($resourcePath, 'store_id', $store_id);
        $this->pathParam($resourcePath, 'product_id', $product_id);
        $this->pathParam($resourcePath, 'variant_id', $variant_id);

        $headers = $this->setHeaders($headerParams);

        // body params
        // for model (json/xml)
        $httpBody = $this->encodeBodyWhenJSON($body, $headers);

        return $this->queryAndRequestPut($queryParams, $resourcePath, $headers, $httpBody);
    }
}
