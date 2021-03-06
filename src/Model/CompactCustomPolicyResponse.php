<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The response payload for requests that return a list of custom policies.
 */
class CompactCustomPolicyResponse extends AbstractModel
{
    /**
     * The unique custom policy identifier for the policy being
     * returned.<br/><br/><span class="tablenote"><strong>Note:</strong> This value is
     * automatically assigned by the system when the policy is created.</span>.
     *
     * @var string
     */
    public $customPolicyId = null;

    /**
     * Customer-facing label shown on View Item pages for items to which the policy
     * applies. This seller-defined string is displayed as a system-generated hyperlink
     * pointing to detailed policy information.<br/><br/><b>Max length:</b> 65.
     *
     * @var string
     */
    public $label = null;

    /**
     * The seller-defined name for the custom policy. Names must be unique for policies
     * assigned to the same seller, policy type, and eBay marketplace.<br /><span
     * class="tablenote"><strong>Note:</strong> This field is visible only to the
     * seller. </span><br /><br /><b>Max length:</b> 65.
     *
     * @var string
     */
    public $name = null;

    /**
     * Specifies the type of Custom Policy being returned. <br/><br/>Two Custom Policy
     * types are supported: <ul><li>Product Compliance (PRODUCT_COMPLIANCE)</li>
     * <li>Takeback (TAKE_BACK)</li></ul> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:CustomPolicyTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $policyType = null;
}
