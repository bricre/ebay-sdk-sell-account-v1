<?php

namespace Ebay\sell\account\v1\Api;

use Ebay\sell\account\v1\Model\CustomPolicy as CustomPolicyModel;
use Ebay\sell\account\v1\Model\CustomPolicyCreateRequest as CustomPolicyCreateRequest;
use Ebay\sell\account\v1\Model\CustomPolicyRequest as CustomPolicyRequest;
use Ebay\sell\account\v1\Model\CustomPolicyResponse as CustomPolicyResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class CustomPolicy extends AbstractAPI
{
    /**
     * This method retrieves the list of custom policies specified by the
     * <b>policy_types</b> query parameter for the selected eBay marketplace.<br/>
     * <br/> <span class="tablenote"><strong>Note:</strong> The following eBay
     * marketplaces support Custom Policies: <ul><li>Germany (EBAY_DE)</li> <li>Canada
     * (EBAY_CA)</li> <li>Australia (EBAY_AU)</li> <li>United States (EBAY_US)</li>
     * <li>France (EBAY_FR)</li></ul></span><br/><br/>For details on header values, see
     * <a href="/api-docs/static/rest-request-components.html#HTTP"
     * target="_blank">HTTP request headers</a>.
     *
     * @param array $queries options:
     *                       'policy_types'	string	This query parameter specifies the type of custom policies
     *                       to be returned.<br /><br />Multiple policy types may be requested in a single
     *                       call by providing a comma-delimited set of all policy types to be
     *                       returned.<br/><br/><span class="tablenote"><strong>Note:</strong> Omitting this
     *                       query parameter from a request will also return policies of all policy
     *                       types.</span><br/><br/>Two Custom Policy types are supported: <ul><li>Product
     *                       Compliance (PRODUCT_COMPLIANCE)</li> <li>Takeback (TAKE_BACK)</li></ul>
     *
     * @return CustomPolicyResponse
     */
    public function getCustomPolicies(array $queries = []): CustomPolicyResponse
    {
        return $this->client->request('getCustomPolicies', 'GET', 'custom_policy/',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method creates a new custom policy in which a seller specifies their terms
     * for complying with local governmental regulations. <br/><br/>Two Custom Policy
     * types are supported: <ul><li>Product Compliance (PRODUCT_COMPLIANCE)</li>
     * <li>Takeback (TAKE_BACK)</li></ul>Each Custom Policy targets a <b>policyType</b>
     * and <b>eBay marketplace</b> combination. Multiple policies may be created as
     * follows: <ul><li><b>Product Compliance</b>: a maximum of 10 policies per eBay
     * marketplace may be created</li> <li><b>Takeback</b>: a maximum of 3 policies per
     * eBay marketplace may be created</li></ul>A successful create policy call returns
     * an HTTP status code of <b>201 Created</b> with the system-generated policy ID
     * included in the <b>Location</b> response header.<br/><br/><b>Product Compliance
     * Policy</b><br/><br/>Product Compliance policies disclose product information as
     * required for regulatory compliance.<br/><br/><span
     * class="tablenote"><strong>Note:</strong> A maximum of 10 Product Compliance
     * policies per eBay marketplace may be created.</span> <br/><br/> <b>Takeback
     * Policy</b><br/><br/>Takeback policies describe the seller's legal obligation to
     * take back a previously purchased item when the buyer purchases a new
     * one.<br/><br/><span class="tablenote"><strong>Note:</strong> A maximum of 3
     * Takeback policies per eBay marketplace may be created.</span>.
     *
     * @param CustomPolicyCreateRequest $Model request to create a new Custom Policy
     *
     * @return object
     */
    public function create(CustomPolicyCreateRequest $Model): object
    {
        return $this->client->request('createCustomPolicy', 'POST', 'custom_policy/',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method retrieves the custom policy specified by the <b>custom_policy_id</b>
     * path parameter for the selected eBay marketplace.<br/> <br/> <span
     * class="tablenote"><strong>Note:</strong> The following eBay marketplaces support
     * Custom Policies: <ul><li>Germany (EBAY_DE)</li> <li>Canada (EBAY_CA)</li>
     * <li>Australia (EBAY_AU)</li> <li>United States (EBAY_US)</li> <li>France
     * (EBAY_FR)</li></ul></span><br/><br/>For details on header values, see <a
     * href="/api-docs/static/rest-request-components.html#HTTP" target="_blank">HTTP
     * request headers</a>.
     *
     * @param string $custom_policy_id This path parameter is the unique custom policy
     *                                 identifier for the policy to be returned.<br/><br/><span
     *                                 class="tablenote"><strong>Note:</strong> This value is automatically assigned by
     *                                 the system when the policy is created.</span>
     *
     * @return CustomPolicyModel
     */
    public function get(string $custom_policy_id): CustomPolicyModel
    {
        return $this->client->request('getCustomPolicy', 'GET', "custom_policy/{$custom_policy_id}",
            [
            ]
        );
    }

    /**
     * This method updates an existing custom policy specified by the
     * <b>custom_policy_id</b> path parameter for the selected marketplace. This method
     * overwrites the policy's <b>Name</b>, <b>Label</b>, and <b>Description</b>
     * fields. Therefore, the complete, current text of all three policy fields must be
     * included in the request payload even when one or two of these fields will not
     * actually be updated.<br/> <br/>For example, the value for the <b>Label</b> field
     * is to be updated, but the <b>Name</b> and <b>Description</b> values will remain
     * unchanged. The existing <b>Name</b> and <b>Description</b> values, as they are
     * defined in the current policy, must also be passed in. <br/><br/>A successful
     * policy update call returns an HTTP status code of <b>204 No
     * Content</b>.<br/><br/><span class="tablenote"><strong>Note:</strong> The
     * following eBay marketplaces support Custom Policies: <ul><li>Germany
     * (EBAY_DE)</li> <li>Canada (EBAY_CA)</li> <li>Australia (EBAY_AU)</li> <li>United
     * States (EBAY_US)</li> <li>France (EBAY_FR)</li></ul></span><br/><br/>For details
     * on header values, see <a
     * href="/api-docs/static/rest-request-components.html#HTTP">HTTP request
     * headers</a>.
     *
     * @param string              $custom_policy_id This path parameter is the unique custom policy
     *                                              identifier for the policy to be returned.<br/><br/><span
     *                                              class="tablenote"><strong>Note:</strong> This value is automatically assigned by
     *                                              the system when the policy is created.</span>
     * @param CustomPolicyRequest $Model            request to update a current custom policy
     *
     * @return mixed
     */
    public function update(string $custom_policy_id, CustomPolicyRequest $Model): mixed
    {
        return $this->client->request('updateCustomPolicy', 'PUT', "custom_policy/{$custom_policy_id}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
