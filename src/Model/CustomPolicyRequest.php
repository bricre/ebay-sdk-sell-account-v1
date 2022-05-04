<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CustomPolicyRequest extends AbstractModel
{
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
