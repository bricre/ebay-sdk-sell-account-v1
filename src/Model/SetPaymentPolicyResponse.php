<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Complex type that that gets populated with a response containing a payment
 * policy.
 */
class SetPaymentPolicyResponse extends AbstractModel
{
    /**
     * This container indicates whether the payment business policy applies to motor
     * vehicle listings, or if it applies to non-motor vehicle listings.
     *
     * @var \Ebay\Sell\Account\V1\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * This container is only returned if the seller just created or updated a motor
     * vehicles payment business policy and requires buyers to pay an initial deposit
     * after they commit to buying a motor vehicle.
     *
     * @var \Ebay\Sell\Account\V1\Model\Deposit
     */
    public $deposit = null;

    /**
     * A seller-defined description of the payment business policy. This description is
     * only for the seller's use, and is not exposed on any eBay pages. This field is
     * returned if set for the policy. <br/><br/><b>Max length</b>: 250.
     *
     * @var string
     */
    public $description = null;

    /**
     * The number of days (after the buyer commits to buy) that a buyer has to pay the
     * remaining balance of a motor vehicle transaction. Sellers can set this value to
     * 3, 7, 10, or 14 days.<p class="tablenote"><b>Note:</b> This value is always
     * returned if <b>categoryTypes</b> is set to <code>MOTORS_VEHICLES</code>.</p>.
     *
     * @var \Ebay\Sell\Account\V1\Model\TimeDuration
     */
    public $fullPaymentDueIn = null;

    /**
     * The value returned in this field will reflect the value set by the seller in the
     * <b>immediatePay</b> request field. A value of <code>true</code> indicates that
     * immediate payment is required from the buyer for: <ul><li>A fixed-price
     * item</li><li>An auction item where the buyer is using the 'Buy it Now'
     * option</li><li>A deposit for a motor vehicle listing</li></ul><br />It is
     * possible for the seller to set this field as <code>true</code> in the payment
     * business policy, but it will not apply in some scenarios. For example, immediate
     * payment is not applicable for auction listings that have a winning bidder, for
     * buyer purchases that involve the Best Offer feature, or for transactions that
     * happen offline between the buyer and seller.
     *
     * @var bool
     */
    public $immediatePay = null;

    /**
     * The ID of the eBay marketplace to which this payment business policy applies.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A seller-defined name for this payment business policy. Names must be unique for
     * policies assigned to the same marketplace.<br /><br /><b>Max length:</b> 64.
     *
     * @var string
     */
    public $name = null;

    /**
     * <p class="tablenote"><b>Note:</b> NO LONGER SUPPORTED. Although this field may
     * be returned for some older payment business policies, payment instructions are
     * no longer supported by payment business policies. If this field is returned, it
     * can be ignored and these payment instructions will not appear in any listings
     * that use the corresponding business policy.</p>A free-form string field that
     * allows sellers to add detailed payment instructions to their listings.
     *
     * @var string
     */
    public $paymentInstructions = null;

    /**
     * This array shows the available payment methods that the seller has set for the
     * payment business policy.<br /><br />Sellers do not have to specify any
     * electronic payment methods for listings, so this array will often be returned
     * empty unless the payment business policy is intended for motor vehicle listings
     * or other items in categories where offline payments are required or supported.
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

    /**
     * An array of one or more errors or warnings that were generated during the
     * processing of the request. If there were no issues with the request, this array
     * will return empty.
     *
     * @var \Ebay\Sell\Account\V1\Model\Error[]
     */
    public $warnings = null;
}
