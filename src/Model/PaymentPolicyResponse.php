<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The response payload for the <b>getPaymentPolicies</b> method. <br /><br /><span
 * class="tablenote"><b>Note</b>: Pagination has not yet been enabled for
 * <b>getPaymentPolicies</b>, so all of the pagination-related fields are for
 * future use.</span>.
 */
class PaymentPolicyResponse extends AbstractModel
{
    /**
     * This field is for future use.
     *
     * @var string
     */
    public $href = null;

    /**
     * This field is for future use.
     *
     * @var int
     */
    public $limit = null;

    /**
     * This field is for future use.
     *
     * @var string
     */
    public $next = null;

    /**
     * This field is for future use.
     *
     * @var int
     */
    public $offset = null;

    /**
     * A list of all of the seller's payment business policies defined for the
     * specified marketplace. This array will be returned as empty if no payment
     * business policies are defined for the specified marketplace.
     *
     * @var \Ebay\Sell\Account\V1\Model\PaymentPolicy[]
     */
    public $paymentPolicies = null;

    /**
     * This field is for future use.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The total number of payment business policies retrieved in the result set.
     * <br/><br/>If no payment business policies are defined for the specified
     * marketplace, this field is returned with a value of <code>0</code>.
     *
     * @var int
     */
    public $total = null;
}
