<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Complex type that that gets populated with a response containing a fulfillment
 * policy.
 */
class SetFulfillmentPolicyResponse extends AbstractModel
{
    /**
     * This container indicates whether the fulfillment business policy applies to
     * motor vehicle listings, or if it applies to non-motor vehicle listings.
     *
     * @var \Ebay\sell\account\v1\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * If returned as <code>true</code>, the seller offers freight shipping. Freight
     * shipping can be used for large items over 150 lbs.
     *
     * @var bool
     */
    public $freightShipping = null;

    /**
     * A unique eBay-assigned ID for a fulfillment business policy. This ID is
     * generated when the policy is created.
     *
     * @var string
     */
    public $fulfillmentPolicyId = null;

    /**
     * If returned as <code>true</code>, eBay's Global Shipping Program will be used by
     * the seller to ship items to international locations.
     *
     * @var bool
     */
    public $globalShipping = null;

    /**
     * Specifies the maximum number of business days the seller commits to for
     * preparing and shipping an order after receiving a cleared payment for the order.
     * This time does not include the transit time it takes the shipping carrier to
     * deliver the order. <p>If only local pickup or freight shipping is available for
     * the item, this container may not get returned.</p>.
     *
     * @var \Ebay\sell\account\v1\Model\TimeDuration
     */
    public $handlingTime = null;

    /**
     * If returned as <code>true</code>, local pickup is available for this policy.
     *
     * @var bool
     */
    public $localPickup = null;

    /**
     * The ID of the eBay marketplace to which this fulfillment business policy
     * applies. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A seller-defined name for this fulfillment business policy. Names must be unique
     * for policies assigned to the same marketplace. <br/><br/><b>Max length</b>: 64.
     *
     * @var string
     */
    public $name = null;

    /**
     * If returned as <code>true</code>, the seller offers the "Click and Collect"
     * option. <br/><br/>Currently, "Click and Collect" is available only to large
     * retail merchants the eBay AU and UK marketplaces.
     *
     * @var bool
     */
    public $pickupDropOff = null;

    /**
     * This array is used to provide detailed information on the domestic and
     * international shipping options available for the policy. A separate
     * <b>ShippingOption</b> object covers domestic shipping service options and
     * international shipping service options (if the seller ships to international
     * locations). The <b>optionType</b> field indicates whether the
     * <b>ShippingOption</b> object applies to domestic or international shipping, and
     * the <b>costType</b> field indicates whether flat-rate shipping or calculated
     * shipping will be used. <p>A separate <b>ShippingServices</b> object is used to
     * specify cost and other details for every available domestic and international
     * shipping service option. </p>.
     *
     * @var \Ebay\sell\account\v1\Model\ShippingOption[]
     */
    public $shippingOptions = null;

    /**
     * This container consists of the <b>regionIncluded</b> and <b>regionExcluded</b>
     * containers, which define the geographical regions/countries/states or
     * provinces/domestic regions where the seller does and doesn't ship to with this
     * fulfillment policy.
     *
     * @var \Ebay\sell\account\v1\Model\RegionSet
     */
    public $shipToLocations = null;

    /**
     * An array of one or more errors or warnings that were generated during the
     * processing of the request. If there were no issues with the request, this array
     * will return empty.
     *
     * @var \Ebay\sell\account\v1\Model\Error[]
     */
    public $warnings = null;
}
