<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the request payload of the createCustomPolicy method to
 * define a new custom policy for a specific marketplace.
 */
class CustomPolicyCreateRequest extends AbstractModel
{
    /**
     * Details of the seller's specific policy and terms for this
     * policy.<br/><br/><b>Max length:</b> 15,000.
     *
     * @var string
     */
    public $description = null;

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
     * seller. </span><br/><br/><b>Max length:</b> 65.
     *
     * @var string
     */
    public $name = null;

    /**
     * Specifies the type of custom policy being created. <br/><br/>Two Custom Policy
     * types are supported: <ul><li>Product Compliance (PRODUCT_COMPLIANCE)</li>
     * <li>Takeback (TAKE_BACK)</li></ul> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:CustomPolicyTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $policyType = null;
}
