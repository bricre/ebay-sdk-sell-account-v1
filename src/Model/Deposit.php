<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to specify/indicate that an initial deposit is required for a
 * motor vehicle listing.
 */
class Deposit extends AbstractModel
{
    /**
     * This value indicates the initial deposit amount required from the buyer in order
     * to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate
     * payment is not required, and up to $500.00 if immediate payment is
     * required.<br/><br/><b>Max</b>: <code>2000.0</code>.
     *
     * @var \Ebay\sell\account\v1\Model\Amount
     */
    public $amount = null;

    /**
     * This value indicates the number of hours that the buyer has (after they commit
     * to buy) to pay the initial deposit on a motor vehicle. Valid <b>dueIn</b> times
     * are 24, 48, and 72 hours. <code>HOUR</code> is set as the <b>unit</b> value, and
     * <code>24</code>, <code>48</code> or <code>72</code> are set in the <b>value</b>
     * field.<br /><br /><span class="tablenote"><b>Note</b>: The <b>dueIn</b> value is
     * overridden if the seller has set the motor vehicle listing to require immediate
     * payment. If the listing requires immediate payment, the buyer must pay the
     * deposit immediately in order to be eligible to purchase the motor
     * vehicle.</span><br/><br/><b>Min</b>=24 (hours)<b>Max</b>=72 (hours),
     * <b>Default</b>=48 (hours).
     *
     * @var \Ebay\sell\account\v1\Model\TimeDuration
     */
    public $dueIn = null;

    /**
     * This array is no longer applicable and should not be used since eBay now manages
     * the electronic payment options available to buyers to pay the deposit.
     *
     * @var \Ebay\sell\account\v1\Model\PaymentMethod[]
     */
    public $paymentMethods = null;
}
