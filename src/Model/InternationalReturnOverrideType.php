<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields for a seller's international return policy. Sellers
 * have the ability to set separate domestic and international return policies, but
 * if an international return policy is not set, the same return policy settings
 * specified for the domestic return policy are also used for returns for
 * international buyers.
 */
class InternationalReturnOverrideType extends AbstractModel
{
    /**
     * This field sets/indicates if the seller offers replacement or exchange items to
     * the buyer in the case of an international return. The buyer must be willing to
     * accept a replacement or exchange item; otherwise, the seller will need to issue
     * a refund for a return. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnMethod = null;

    /**
     * This container indicates the number of calendar days that the buyer has to
     * return an item. The return period begins when the item is marked "delivered" at
     * the buyer's specified ship-to location.  <br/><br/>You must set the value to one
     * that's accepted by the marketplace and category where the item is listed. Most
     * categories support 30-day and 60-day return periods. For a definitive list of
     * return periods for one or more categories, call <a
     * href="/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies">getReturnPolicies</a>
     * method of the <b>Metadata API</b>. <br/><br/>The <b>TimeDuration</b> type is
     * used to set/indicate the return period, and you set the <b>unit</b> value to
     * <code>DAY</code> and the <b>value</b> field to either <code>30</code> or
     * <code>60</code> (or other value, as appropriate).  <br/><br/>Note that this
     * value cannot be modified if the listing has bids or sales, or if the listing
     * ends within 12 hours.  <br/><br/>This field is conditionally required if the
     * <b>internationalOverride.returnsAccepted</b> field is set to <code>true</code>.
     *
     * @var \Ebay\Sell\Account\V1\Model\TimeDuration
     */
    public $returnPeriod = null;

    /**
     * If set to <code>true</code>, the seller accepts international returns. If set to
     * <code>false</code>, the seller does not accept international returns.
     * <br/><br/>This field is conditionally required if the seller chooses to have a
     * separate international return policy.
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
     * costs for 'significantly not as described' (SNAD) issues.  <br/><br/>This field
     * is conditionally required if the <b>internationalOverride.returnsAccepted</b>
     * field is set to <code>true</code>. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnShippingCostPayer = null;
}
