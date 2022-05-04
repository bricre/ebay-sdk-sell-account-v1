<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the <b>returnPolicy</b> response container, a container
 * which defines a seller's return business policy for a specific marketplace.
 */
class ReturnPolicy extends AbstractModel
{
    /**
     * This container indicates which category group that the return policy applies
     * to.<br/><br/><span class="tablenote"><b>Note</b>: Return business policies are
     * not applicable to motor vehicle listings, so the <b>categoryTypes.name</b> value
     * will always be <code>ALL_EXCLUDING_MOTORS_VEHICLES</code> for return business
     * policies.</span>.
     *
     * @var \Ebay\sell\account\v1\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span>
     * This field is deprecated, since eBay no longer supports extended holiday
     * returns. Any value supplied in this field is neither read nor returned.</p>.
     *
     * @var bool
     */
    public $extendedHolidayReturnsOffered = null;

    /**
     * This container shows the seller's international return policy settings. This
     * container is only returned if the seller has set a separate international return
     * policy for the business policies. Interational return policies are optional,
     * even if the seller ships to international locations. If a separate international
     * return policy is not set, all of the domestic return policy settings also apply
     * to international orders.
     *
     * @var \Ebay\sell\account\v1\Model\InternationalReturnOverrideType
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
     * A seller-defined name for this payment business policy. Names must be unique for
     * policies assigned to the same marketplace.<br /><br /><b>Max length:</b> 64.
     *
     * @var string
     */
    public $name = null;

    /**
     * This value indicates the refund method that will be used by the seller for buyer
     * returns. In most cases, this value is going to be <code>MONEY_BACK</code>,
     * except for 'Click and Collect' and 'Buy Online, Pick up in Store' orders where
     * the seller is able to offer a store/merchandise credit in addition to the 'money
     * back' option. The buyer recieving money back for a return is always an option
     * available to the buyer, even if this field returns
     * <code>MERCHANDISE_CREDIT</code>. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:RefundMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $refundMethod = null;

    /**
     * <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span>
     * This field is deprecated, since eBay no longer allows sellers to charge a
     * restocking fee for buyer remorse returns. If this field is included, it is
     * ignored and it is no longer returned.</p>.
     *
     * @var string
     */
    public $restockingFeePercentage = null;

    /**
     * This text-based field provides more details on seller-specified return
     * instructions. This field is only returned if set for the return business policy.
     * <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span>
     * This field is no longer supported on many eBay marketplaces. To see if a
     * marketplace and eBay category does support this field, call <a
     * href="/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies">getReturnPolicies</a>
     * method of the <b>Metadata API</b>. Then you will look for the
     * <b>policyDescriptionEnabled</b> field with a value of <code>true</code> for the
     * eBay category.</span></p><br/><b>Max length</b>: 5000 (8000 for DE).
     *
     * @var string
     */
    public $returnInstructions = null;

    /**
     * This field is only returned if the seller wants to offer an alternative return
     * method other than 'money back', such as an exchange or replacement item. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnMethod = null;

    /**
     * This container indicates the number of calendar days that the buyer has to
     * return an item. The return period begins when the item is marked "delivered" at
     * the buyer's specified ship-to location.  <br/><br/>Most categories support
     * 30-day and 60-day return periods.<br/><br/><span class="tablenote"><b>Note</b>:
     * Unless the seller has set a separate international return policy through the
     * <b>internationalOverride</b> container, this return period will be valid for
     * domestic and international returns (if the seller ships internationally).</span>.
     *
     * @var \Ebay\sell\account\v1\Model\TimeDuration
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
     * If this field is returned as <code>true</code>, the seller accepts returns.
     * <br/><br/><span class="tablenote"><strong>Note:</strong>Top-Rated sellers must
     * accept item returns and the <b>handlingTime</b> should be set to zero days or
     * one day for a listing to receive a Top-Rated Plus badge on the View Item or
     * search result pages. For more information on eBay's Top-Rated seller program,
     * see <a href="https://pages.ebay.com/help/sell/top-rated.html">Becoming a Top
     * Rated Seller and qualifying for Top Rated Plus benefits</a>.</span>.
     *
     * @var bool
     */
    public $returnsAccepted = null;

    /**
     * This field indicates who is responsible for paying for the shipping charges for
     * returned items. The field can be set to either <code>BUYER</code> or
     * <code>SELLER</code>.  <br/><br/>Depending on the return policy and specifics of
     * the return, either the buyer or the seller can be responsible for the return
     * shipping costs. Note that the seller is always responsible for return shipping
     * costs for SNAD-related issues. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnShippingCostPayer = null;
}
