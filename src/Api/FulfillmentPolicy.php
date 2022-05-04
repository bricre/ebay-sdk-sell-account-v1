<?php

namespace Ebay\sell\account\v1\Api;

use Ebay\sell\account\v1\Model\FulfillmentPolicy as FulfillmentPolicyModel;
use Ebay\sell\account\v1\Model\FulfillmentPolicyRequest as FulfillmentPolicyRequest;
use Ebay\sell\account\v1\Model\FulfillmentPolicyResponse as FulfillmentPolicyResponse;
use Ebay\sell\account\v1\Model\SetFulfillmentPolicyResponse as SetFulfillmentPolicyResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class FulfillmentPolicy extends AbstractAPI
{
    /**
     * This method creates a new fulfillment policy where the policy encapsulates
     * seller's terms for fulfilling item purchases. Fulfillment policies include the
     * shipment options that the seller offers to buyers.  <br/><br/>Each policy
     * targets a specific eBay marketplace and a category group type, and you can
     * create multiple policies for each combination. <br/><br/>A successful request
     * returns the <b>getFulfillmentPolicy</b> URI to the new policy in the
     * <b>Location</b> response header and the ID for the new policy is returned in the
     * response payload.  <p class="tablenote"><b>Tip:</b> For details on creating and
     * using the business policies supported by the Account API, see <a
     * href="/api-docs/sell/static/seller-accounts/business-policies.html">eBay
     * business policies</a>.</p>  <p><b>Using the eBay standard envelope service
     * (eSE)</b></p>  <p>The eBay standard envelope service (eSE) is a domestic
     * envelope service with tracking through eBay. This service applies to specific
     * Trading Cards categories (not all categories are supported), and to Coins &
     * Paper Money, Postcards, and Stamps. See <a
     * href="/api-docs/sell/static/seller-accounts/using-the-ebay-standard-envelope-service.html"
     * target="_blank">Using the eBay standard envelope (eSE) service</a>.</p>.
     *
     * @param FulfillmentPolicyRequest $Model request to create a seller account
     *                                        fulfillment policy
     *
     * @return SetFulfillmentPolicyResponse
     */
    public function create(FulfillmentPolicyRequest $Model): SetFulfillmentPolicyResponse
    {
        return $this->client->request('createFulfillmentPolicy', 'POST', 'fulfillment_policy/',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method retrieves the complete details of a fulfillment policy. Supply the
     * ID of the policy you want to retrieve using the <b>fulfillmentPolicyId</b> path
     * parameter.
     *
     * @param string $fulfillmentPolicyId this path parameter specifies the ID of the
     *                                    fulfillment policy you want to retrieve
     *
     * @return FulfillmentPolicyModel
     */
    public function get(string $fulfillmentPolicyId): FulfillmentPolicyModel
    {
        return $this->client->request('getFulfillmentPolicy', 'GET', "fulfillment_policy/{$fulfillmentPolicyId}",
            [
            ]
        );
    }

    /**
     * This method updates an existing fulfillment policy. Specify the policy you want
     * to update using the <b>fulfillment_policy_id</b> path parameter. Supply a
     * complete policy payload with the updates you want to make; this call overwrites
     * the existing policy with the new details specified in the payload.
     *
     * @param string                   $fulfillmentPolicyId this path parameter specifies the ID of the
     *                                                      fulfillment policy you want to update
     * @param FulfillmentPolicyRequest $Model               Fulfillment policy request
     *
     * @return SetFulfillmentPolicyResponse
     */
    public function update(string $fulfillmentPolicyId, FulfillmentPolicyRequest $Model): SetFulfillmentPolicyResponse
    {
        return $this->client->request('updateFulfillmentPolicy', 'PUT', "fulfillment_policy/{$fulfillmentPolicyId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method deletes a fulfillment policy. Supply the ID of the policy you want
     * to delete in the <b>fulfillmentPolicyId</b> path parameter.
     *
     * @param string $fulfillmentPolicyId this path parameter specifies the ID of the
     *                                    fulfillment policy to delete
     *
     * @return mixed
     */
    public function delete(string $fulfillmentPolicyId): mixed
    {
        return $this->client->request('deleteFulfillmentPolicy', 'DELETE', "fulfillment_policy/{$fulfillmentPolicyId}",
            [
            ]
        );
    }

    /**
     * This method retrieves all the fulfillment policies configured for the
     * marketplace you specify using the <code>marketplace_id</code> query parameter.
     * <br/><br/><b>Marketplaces and locales</b>  <br/><br/>Get the correct policies
     * for a marketplace that supports multiple locales using the
     * <code>Content-Language</code> request header. For example, get the policies for
     * the French locale of the Canadian marketplace by specifying <code>fr-CA</code>
     * for the <code>Content-Language</code> header. Likewise, target the Dutch locale
     * of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For
     * details on header values, see <a
     * href="/api-docs/static/rest-request-components.html#HTTP" target="_blank">HTTP
     * request headers</a>.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	This query parameter specifies the eBay marketplace of
     *                       the policies you want to retrieve. For implementation help, refer to eBay API
     *                       documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *
     * @return FulfillmentPolicyResponse
     */
    public function getFulfillmentPolicies(array $queries = []): FulfillmentPolicyResponse
    {
        return $this->client->request('getFulfillmentPolicies', 'GET', 'fulfillment_policy',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method retrieves the details for a specific fulfillment policy. In the
     * request, supply both the policy <code>name</code> and its associated
     * <code>marketplace_id</code> as query parameters.   <br/><br/><b>Marketplaces and
     * locales</b>  <br/><br/>Get the correct policy for a marketplace that supports
     * multiple locales using the <code>Content-Language</code> request header. For
     * example, get a policy for the French locale of the Canadian marketplace by
     * specifying <code>fr-CA</code> for the <code>Content-Language</code> header.
     * Likewise, target the Dutch locale of the Belgium marketplace by setting
     * <code>Content-Language: nl-BE</code>. For details on header values, see <a
     * href="/api-docs/static/rest-request-components.html#HTTP">HTTP request
     * headers</a>.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	This query parameter specifies the eBay marketplace of
     *                       the policy you want to retrieve. For implementation help, refer to eBay API
     *                       documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *                       'name'	string	This query parameter specifies the seller-defined name of the
     *                       fulfillment policy you want to retrieve.
     *
     * @return FulfillmentPolicyModel
     */
    public function getByName(array $queries = []): FulfillmentPolicyModel
    {
        return $this->client->request('getFulfillmentPolicyByName', 'GET', 'fulfillment_policy/get_by_policy_name',
            [
                'query' => $queries,
            ]
        );
    }
}
