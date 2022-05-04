<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Complex type that that gets populated with a response containing a return
 * policy.
 */
class SetReturnPolicyResponse extends AbstractModel
{
    /**
     * This field always returns <code>ALL_EXCLUDING_MOTORS_VEHICLES</code> for return
     * business policies, since return business policies are not applicable to motor
     * vehicle listings.
     *
     * @var \Ebay\Sell\Account\V1\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span>
     * This field is deprecated, since eBay no longer supports extended holiday
     * returns. This field should no longer be returned.</p>.
     *
     * @var bool
     */
    public $extendedHolidayReturnsOffered = null;

    /**
     * This container is used by the seller to specify a separate  international return
     * policy, and will only be returned if the seller has set a separate return policy
     * for international orders. If a separate international return policy is not
     * defined by a seller, all of the domestic return policy settings will also apply
     * to international orders.
     *
     * @var \Ebay\Sell\Account\V1\Model\InternationalReturnOverrideType
     */
    public $internationalOverride = null;

    /**
     * The ID of the eBay marketplace to which this return business policy applies. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A seller-defined name for this return business policy. Names must be unique for
     * policies assigned to the same marketplace.<br /><br /><b>Max length:</b> 64.
     *
     * @var string
     */
    public $name = null;

    /**
     * This value indicates the refund method that will be used by the seller for buyer
     * returns. In most cases, buyers will get their money back for returns, but for
     * sellers who offer the 'Click and Collect' and 'Buy Online, Pick up in Store'
     * option, the seller is able to offer a store/merchandise credit in addition to
     * the 'money back' option. The buyer recieving money back for a return is always
     * an option available to the buyer, even if this field is set to
     * <code>MERCHANDISE_CREDIT</code>, or if this field is not returned at all. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:RefundMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $refundMethod = null;

    /**
     * <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span>
     * This field is deprecated, since eBay no longer allows sellers to charge a
     * restocking fee for buyer remorse returns.</p>.
     *
     * @var string
     */
    public $restockingFeePercentage = null;

    /**
     * This text-based field provides more details on seller-specified return
     * instructions. <p class="tablenote"><span  style="color:
     * #dd1e31;"><b>Important!</b></span> This field is no longer supported on many
     * eBay marketplaces. To see if a marketplace and eBay category does support this
     * field, call <a
     * href="/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies">getReturnPolicies</a>
     * method of the <b>Metadata API</b>. Then you will look for the
     * <b>policyDescriptionEnabled</b> field with a value of <code>true</code> for the
     * eBay category.</span></p><br/><b>Max length</b>: 5000 (8000 for DE).
     *
     * @var string
     */
    public $returnInstructions = null;

    /**
     * This field will be returned if the seller is willing and able to offer an
     * alternative return method other than 'money back', such as an exchange or
     * replacement item. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnMethod = null;

    /**
     * This container specifies the amount of days that the buyer has to return the
     * item after receiving it. The return period begins when the item is marked
     * "delivered" at the buyer's specified ship-to location. This container will be
     * returned unless the business policy states that the seller does not accept
     * returns.
     *
     * @var \Ebay\Sell\Account\V1\Model\TimeDuration
     */
    public $returnPeriod = null;

    /**
     * A unique eBay-assigned ID for a return business policy. This ID is generated
     * when the policy is created.
     *
     * @var string
     */
    public $returnPolicyId = null;

    /**
     * If set to <code>true</code>, the seller accepts returns. If set to
     * <code>false</code>, this field indicates that the seller does not accept
     * returns.
     *
     * @var bool
     */
    public $returnsAccepted = null;

    /**
     * This field indicates who is responsible for paying for the shipping charges for
     * returned items. The field can be set to either <code>BUYER</code> or
     * <code>SELLER</code>.  <br/><br/>Note that the seller is always responsible for
     * return shipping costs for SNAD-related issues.  <br/><br/>This container will be
     * returned unless the business policy states that the seller does not accept
     * returns. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnShippingCostPayer = null;

    /**
     * An array of one or more errors or warnings that were generated during the
     * processing of the request. If there were no issues with the request, this array
     * will return empty.
     *
     * @var \Ebay\Sell\Account\V1\Model\Error[]
     */
    public $warnings = null;
}
