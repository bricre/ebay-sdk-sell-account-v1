<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\Model\ReturnPolicy;
use Ebay\Sell\Account\V1\Model\ReturnPolicyRequest;
use Ebay\Sell\Account\V1\Model\ReturnPolicyResponse;
use Ebay\Sell\Account\V1\Model\SetReturnPolicyResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class Policy extends AbstractAPI
{
    /**
     * This method retrieves all the return policies configured for the marketplace you
     * specify using the <code>marketplace_id</code> query parameter.
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
     *                       'marketplace_id'	string	This query parameter specifies the ID of the eBay
     *                       marketplace of the policy you want to retrieve. For implementation help, refer
     *                       to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *
     * @return ReturnPolicyResponse|UnexpectedResponse
     */
    public function getReturnPolicies(array $queries = [])
    {
        return $this->request(
        'getReturnPolicies',
        'GET',
        'return_policy',
        null,
        $queries,
        []
        );
    }

    /**
     * This method creates a new return policy where the policy encapsulates seller's
     * terms for returning items.  <br/><br/>Each policy targets a specific
     * marketplace, and you can create multiple policies for each marketplace. Return
     * policies are not applicable to motor-vehicle listings.<br/><br/>A successful
     * request returns the <b>getReturnPolicy</b> URI to the new policy in the
     * <b>Location</b> response header and the ID for the new policy is returned in the
     * response payload.  <p class="tablenote"><b>Tip:</b> For details on creating and
     * using the business policies supported by the Account API, see <a
     * href="/api-docs/sell/static/seller-accounts/business-policies.html">eBay
     * business policies</a>.</p>.
     *
     * @param ReturnPolicyRequest $Model Return policy request
     *
     * @return SetReturnPolicyResponse|UnexpectedResponse
     */
    public function create(ReturnPolicyRequest $Model)
    {
        return $this->request(
        'createReturnPolicy',
        'POST',
        'return_policy',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method retrieves the complete details of the return policy specified by the
     * <b>returnPolicyId</b> path parameter.
     *
     * @param string $return_policy_id this path parameter specifies the of the return
     *                                 policy you want to retrieve
     *
     * @return ReturnPolicy|UnexpectedResponse
     */
    public function get(string $return_policy_id)
    {
        return $this->request(
        'getReturnPolicy',
        'GET',
        "return_policy/$return_policy_id",
        null,
        [],
        []
        );
    }

    /**
     * This method updates an existing return policy. Specify the policy you want to
     * update using the <b>return_policy_id</b> path parameter. Supply a complete
     * policy payload with the updates you want to make; this call overwrites the
     * existing policy with the new details specified in the payload.
     *
     * @param string              $return_policy_id this path parameter specifies the ID of the
     *                                              return policy you want to update
     * @param ReturnPolicyRequest $Model            container for a return policy request
     *
     * @return SetReturnPolicyResponse|UnexpectedResponse
     */
    public function update(string $return_policy_id, ReturnPolicyRequest $Model)
    {
        return $this->request(
        'updateReturnPolicy',
        'PUT',
        "return_policy/$return_policy_id",
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method deletes a return policy. Supply the ID of the policy you want to
     * delete in the <b>returnPolicyId</b> path parameter.
     *
     * @param string $return_policy_id this path parameter specifies the ID of the
     *                                 return policy you want to delete
     *
     * @return UnexpectedResponse
     */
    public function delete(string $return_policy_id): UnexpectedResponse
    {
        return $this->request(
        'deleteReturnPolicy',
        'DELETE',
        "return_policy/$return_policy_id",
        null,
        [],
        []
        );
    }

    /**
     * This method retrieves the details of a specific return policy. Supply both the
     * policy <code>name</code> and its associated <code>marketplace_id</code> in the
     * request query parameters.   <br/><br/><b>Marketplaces and locales</b>
     * <br/><br/>Get the correct policy for a marketplace that supports multiple
     * locales using the <code>Content-Language</code> request header. For example, get
     * a policy for the French locale of the Canadian marketplace by specifying
     * <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise,
     * target the Dutch locale of the Belgium marketplace by setting
     * <code>Content-Language: nl-BE</code>. For details on header values, see <a
     * href="/api-docs/static/rest-request-components.html#HTTP">HTTP request
     * headers</a>.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	This query parameter specifies the ID of the eBay
     *                       marketplace of the policy you want to retrieve. For implementation help, refer
     *                       to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *                       'name'	string	This query parameter specifies the seller-defined name of the
     *                       return policy you want to retrieve.
     *
     * @return ReturnPolicy|UnexpectedResponse
     */
    public function getByName(array $queries = [])
    {
        return $this->request(
        'getReturnPolicyByName',
        'GET',
        'return_policy/get_by_policy_name',
        null,
        $queries,
        []
        );
    }
}
