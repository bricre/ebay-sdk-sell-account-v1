<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\Model\PaymentPolicy as PaymentPolicyModel;
use Ebay\Sell\Account\V1\Model\PaymentPolicyRequest as PaymentPolicyRequest;
use Ebay\Sell\Account\V1\Model\PaymentPolicyResponse as PaymentPolicyResponse;
use Ebay\Sell\Account\V1\Model\SetPaymentPolicyResponse as SetPaymentPolicyResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class PaymentPolicy extends AbstractAPI
{
    /**
     * This method retrieves all the payment policies configured for the marketplace
     * you specify using the <code>marketplace_id</code> query parameter.
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
     * @return PaymentPolicyResponse
     */
    public function getPaymentPolicies(array $queries = []): PaymentPolicyResponse
    {
        return $this->client->request('getPaymentPolicies', 'GET', 'payment_policy',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method creates a new payment policy where the policy encapsulates seller's
     * terms for order payments.  <br/><br/>Each policy targets a specific eBay
     * marketplace and category group, and you can create multiple policies for each
     * combination.  <br/><br/>A successful request returns the <b>getPaymentPolicy</b>
     * URI to the new policy in the <b>Location</b> response header and the ID for the
     * new policy is returned in the response payload.  <p
     * class="tablenote"><b>Tip:</b> For details on creating and using the business
     * policies supported by the Account API, see <a
     * href="/api-docs/sell/static/seller-accounts/business-policies.html">eBay
     * business policies</a>.</p>.
     *
     * @param PaymentPolicyRequest $Model Payment policy request
     *
     * @return SetPaymentPolicyResponse
     */
    public function create(PaymentPolicyRequest $Model): SetPaymentPolicyResponse
    {
        return $this->client->request('createPaymentPolicy', 'POST', 'payment_policy',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method retrieves the complete details of a payment policy. Supply the ID of
     * the policy you want to retrieve using the <b>paymentPolicyId</b> path parameter.
     *
     * @param string $payment_policy_id this path parameter specifies the ID of the
     *                                  payment policy you want to retrieve
     *
     * @return PaymentPolicyModel
     */
    public function get(string $payment_policy_id): PaymentPolicyModel
    {
        return $this->client->request('getPaymentPolicy', 'GET', "payment_policy/{$payment_policy_id}",
            [
            ]
        );
    }

    /**
     * This method updates an existing payment policy. Specify the policy you want to
     * update using the <b>payment_policy_id</b> path parameter. Supply a complete
     * policy payload with the updates you want to make; this call overwrites the
     * existing policy with the new details specified in the payload.
     *
     * @param string               $payment_policy_id this path parameter specifies the ID of the
     *                                                payment policy you want to update
     * @param PaymentPolicyRequest $Model             Payment policy request
     *
     * @return SetPaymentPolicyResponse
     */
    public function update(string $payment_policy_id, PaymentPolicyRequest $Model): SetPaymentPolicyResponse
    {
        return $this->client->request('updatePaymentPolicy', 'PUT', "payment_policy/{$payment_policy_id}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method deletes a payment policy. Supply the ID of the policy you want to
     * delete in the <b>paymentPolicyId</b> path parameter.
     *
     * @param string $payment_policy_id this path parameter specifies the ID of the
     *                                  payment policy you want to delete
     *
     * @return mixed
     */
    public function delete(string $payment_policy_id): mixed
    {
        return $this->client->request('deletePaymentPolicy', 'DELETE', "payment_policy/{$payment_policy_id}",
            [
            ]
        );
    }

    /**
     * This method retrieves the details of a specific payment policy. Supply both the
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
     *                       'marketplace_id'	string	This query parameter specifies the eBay marketplace of
     *                       the policy you want to retrieve. For implementation help, refer to eBay API
     *                       documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *                       'name'	string	This query parameter specifies the seller-defined name of the
     *                       payment policy you want to retrieve.
     *
     * @return PaymentPolicyModel
     */
    public function getByName(array $queries = []): PaymentPolicyModel
    {
        return $this->client->request('getPaymentPolicyByName', 'GET', 'payment_policy/get_by_policy_name',
            [
                'query' => $queries,
            ]
        );
    }
}
