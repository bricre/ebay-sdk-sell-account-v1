<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

class CustomPolicyRequest extends AbstractModel
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
}
