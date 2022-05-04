<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <b>paymentPolicy</b> response container, a container
 * which defines a seller's payment business policy for a specific marketplace.
 */
class PaymentPolicy extends AbstractModel
{
    /**
     * This container indicates whether the fulfillment policy applies to motor vehicle
     * listings, or if it applies to non-motor vehicle listings.
     *
     * @var \Ebay\Sell\Account\V1\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * This container is applicable only if the <b>categoryTypes.name</b> field is set
     * to <code>MOTORS_VEHICLES</code>, and is only returned if the seller requires an
     * initial deposit on motor vehicles.<br /><br />The container shows the amount due
     * for the deposit and when it is due (within 1-3 days after commitment to
     * purchase, unless the listing requires immediate payment). <p
     * class="tablenote"><b>Note:</b> The due date that is specified in the
     * <b>deposit</b> container will be overridden if the payment business policy
     * requires immediate payment (in this case, for the deposit), and the buyer
     * commits to purchasing the motor vehicle through a fixed-price listing or through
     * the 'Buy it Now' option of an auction listing. </p>.
     *
     * @var \Ebay\Sell\Account\V1\Model\Deposit
     */
    public $deposit = null;

    /**
     * A seller-defined description of the payment policy. This description is only for
     * the seller's use, and is not exposed on any eBay pages.  <br/><br/><b>Max
     * length</b>: 250.
     *
     * @var string
     */
    public $description = null;

    /**
     * This container applies to motor vehicles listings only and indicates when a
     * final payment for the vehicle is due. This value is always returned if
     * <b>categoryTypes</b> is set to <code>MOTORS_VEHICLES</code>. <br><br>This
     * container indicates the number of days that a buyer has to make their full
     * payment to the seller and close the remaining balance on a motor vehicle
     * transaction. The period starts when the buyer commits to buy. The valid values,
     * as specified with <b>TimeDuration</b>, are:<ul><li>3 DAYS</li><li>7 DAYS (the
     * default)</li><li>10 DAYS</li><li>14 DAYS</li></ul>A
     * <code>MOTORS_VEHICLES</code>) payment business policy must specify at least one
     * of the following <b>paymentMethods</b> values for the final payment: <ul>
     * <li>CASH_ON_PICKUP<br /><br /><span class="tablenote"><b>Note:</b> This payment
     * method is only available to sellers outside the US.</span></li>
     * <li>CASHIER_CHECK</li> <li>MONEY_ORDER</li><li>PERSONAL_CHECK</li></ul>.
     *
     * @var \Ebay\Sell\Account\V1\Model\TimeDuration
     */
    public $fullPaymentDueIn = null;

    /**
     * If this field is returned as <code>true</code>, immediate payment is required
     * from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the
     * buyer uses the 'Buy it Now' option</li><li>A deposit for a motor vehicle
     * listing</li></ul><br />It is possible for the seller to set this field as
     * <code>true</code> in the payment business policy, but it will not apply in some
     * scenarios. For example, immediate payment is not applicable for auction listings
     * that have a winning bidder, for buyer purchases that involve the Best Offer
     * feature, or for transactions that happen offline between the buyer and seller.
     *
     * @var bool
     */
    public $immediatePay = null;

    /**
     * The ID of the eBay marketplace to which the payment business policy applies. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A seller-defined name for this fulfillment policy. Names must be unique for
     * policies assigned to the same marketplace. <br/><br/><b>Max length</b>: 64.
     *
     * @var string
     */
    public $name = null;

    /**
     * Although this field may be returned for some older payment business policies,
     * payment instructions are no longer supported by payment business policies. If
     * this field is returned, it can be ignored and these payment instructions will
     * not appear in any listings that use the corresponding business policy.
     * <br/><br/><b>Max length</b>: 1000.
     *
     * @var string
     */
    public $paymentInstructions = null;

    /**
     * This container is returned to show the payment methods that are accepted for the
     * payment business policy.  <br><br>Sellers do not have to specify any electronic
     * payment methods for listings, so this array will often be returned empty unless
     * the payment business policy is intended for motor vehicle listings or other
     * items in categories where offline payments are required or supported.
     *
     * @var \Ebay\Sell\Account\V1\Model\PaymentMethod[]
     */
    public $paymentMethods = null;

    /**
     * A unique eBay-assigned ID for a payment business policy. This ID is generated
     * when the policy is created.
     *
     * @var string
     */
    public $paymentPolicyId = null;
}
