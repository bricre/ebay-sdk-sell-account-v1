<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This root container defines a seller's fulfillment policy for a specific
 * marketplace and category group. This type is used when creating or updating a
 * fulfillment business policy.
 */
class FulfillmentPolicyRequest extends AbstractModel
{
    /**
     * This container is used to specify whether the fulfillment business policy
     * applies to motor vehicle listings, or if it applies to non-motor vehicle
     * listings.
     *
     * @var \Ebay\Sell\Account\V1\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * A seller-defined description of the fulfillment policy. This description is only
     * for the seller's use, and is not exposed on any eBay pages.  <br/><br/><b>Max
     * length</b>: 250.
     *
     * @var string
     */
    public $description = null;

    /**
     * This field is included and set to <code>true</code> if freight shipping is
     * available for the item. Freight shipping can be used for large items over 150
     * lbs.<br/><br/><b>Default</b>: false.
     *
     * @var bool
     */
    public $freightShipping = null;

    /**
     * This field is included and set to <code>true</code> if the seller wants to use
     * the Global Shipping Program for international shipments. See the <a
     * href="https://pages.ebay.com/help/sell/shipping-globally.html">Global Shipping
     * Program</a> help topic for more details and requirements on the Global Shipping
     * Program.<br/><br/>It is possible for a seller to use a combination of the Global
     * Shipping Program and other international shipping services. <br/><br/>If this
     * value is set to <code>false</code> or if the field is omitted, the seller is
     * responsible for manually specifying individual international shipping services
     * (if the seller ships internationally)., as described in <a
     * href="https://developer.ebay.com/api-docs/sell/static/seller-accounts/ht_shipping-worldwide.html">Setting
     * up worldwide shipping</a>. <br/><br/>Sellers can opt in or out of the Global
     * Shipping Program through the Shipping preferences in My eBay.<p><b>Default</b>:
     * false</p>.
     *
     * @var bool
     */
    public $globalShipping = null;

    /**
     * This container is used to specify the maximum number of business days the seller
     * commits to for preparing and shipping an order after receiving a cleared payment
     * for the order. This time does not include the transit time it takes the shipping
     * carrier to deliver the order.<p>Valid values can vary by site and by category.
     * To obtain the supported values for a site, call <b>GeteBayDetails</b> in the
     * Trading API with <b>DetailName</b> set to <code>DispatchTimeMaxDetails</code>,
     * then inspect the <b>DispatchTimeMaxDetails</b> container in the response for the
     * time values supported by the site (typical handling times are <code>0</code>,
     * <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code>, <code>5</code>,
     * <code>10</code>, <code>15</code>, and <code>20</code>, but these can vary by
     * site and may change over time.)</p> <p>This field is conditionally required when
     * the seller is offering one or more domestic or international shipping options,
     * but it is not applicable when the item is only available through local pickup
     * (<code>"localPickup": "true"</code>), or if it will be shipped through a freight
     * shipping service (<code>"freightShipping": "true"</code>). </p> <p>Note that
     * Top-Rated sellers must offer same-day or one-day handling for a listing in order
     * for that listing to receive a Top Rated Plus seal on the View Item or Search
     * Results pages. To offer zero-day or one-day handling, set field to '0' or '1',
     * respectively.</p>.
     *
     * @var \Ebay\Sell\Account\V1\Model\TimeDuration
     */
    public $handlingTime = null;

    /**
     * This field should be included and set to <code>true</code> if local pickup is
     * one of the fulfillment options available to the buyer. It is possible for the
     * seller to make local pickup and some shipping service options available to the
     * buyer.<br/><br/>With local pickup, the buyer and seller make arrangements for
     * pickup time and location.<br/><br/><b>Default</b>: <code>false</code>.
     *
     * @var bool
     */
    public $localPickup = null;

    /**
     * The ID of the eBay marketplace to which this fulfillment policy applies. For
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
     * This field should be included and set to <code>true</code> if the seller offers
     * the "Click and Collect" feature for an item. <p>To enable "Click and Collect" on
     * a listing, a seller must be eligible for Click and Collect. Currently, Click and
     * Collect is available to only large retail merchants selling in the eBay AU and
     * UK marketplaces.</p>  <p>In addition to setting this field to <code>true</code>,
     * the merchant must also do the following to enable the "Click and Collect" option
     * on a listing: <ul><li>Have inventory for the product at one or more physical
     * stores tied to the merchant's account. <p>Sellers can use the
     * <b>createInventoryLocaion</b> method in the Inventory API to associate physical
     * stores to their account and they can then can add inventory to specific store
     * locations.</p></li><li>Set an immediate payment requirement on the item. The
     * immediate payment feature requires the seller to: <ul><li>Set the
     * <b>immediatePay</b> flag in the payment policy to 'true'.</li><li>Have a valid
     * store location with a complete street address.</li></ul></li></ul><p>When a
     * merchant successfully lists an item with Click and Collect, prospective buyers
     * within a reasonable distance from one of the merchant's stores (that has stock
     * available) will see the "Available for Click and Collect" option on the listing,
     * along with information on the closest store that has the
     * item.</p><b>Default</b>: false.
     *
     * @var bool
     */
    public $pickupDropOff = null;

    /**
     * This array is used to provide detailed information on the domestic and
     * international shipping options available for the policy. A separate
     * <b>ShippingOption</b> object is required for domestic shipping service options
     * and for international shipping service options (if the seller ships to
     * international locations). The <b>optionType</b> field is used to indicate
     * whether the <b>ShippingOption</b> object applies to domestic or international
     * shipping, and the <b>costType</b> field is used to indicate whether flat-rate
     * shipping or calculated shipping will be used. The <b>rateTableId</b> field can
     * be used to associate a defined shipping rate table to the policy, and the
     * <b>packageHandlingCost</b> container can be used to set a handling charge for
     * the policy. <p>A separate <b>ShippingServices</b> object will be used to specify
     * cost and other details for every available domestic and international shipping
     * service option. </p>.
     *
     * @var \Ebay\Sell\Account\V1\Model\ShippingOption[]
     */
    public $shippingOptions = null;

    /**
     * This container consists of the <b>regionIncluded</b> and <b>regionExcluded</b>
     * arrays, which are used to define the geographical regions/countries/states or
     * provinces/domestic regions that a seller does and does not ship to for the
     * associated fulfillment policy. Note that this container can be considered the
     * master list of where the seller ships and does not ship, but there is also a
     * <b>shipToLocations</b> container that can be set at the shipping service option
     * level. <br/><br/>To retrieve the valid geographical shipping region values,
     * two-digit country values, or special domestic regions for an eBay marketplace,
     * call <b>GeteBayDetails</b> with <b>DetailName</b> value set to
     * <code>ExcludeShippingLocationDetails</code>, then review the
     * <b>ExcludeShippingLocationDetails</b> containers in the response for the strings
     * you use in both the <b>regionIncluded.regionName</b> and in the
     * <b>regionExcluded.regionName</b> fields. For valid geographical region names,
     * look for the <code>ExcludeShippingLocationDetails</code> containers in the
     * <b>GeteBayDetails</b> response where the <b>Region</b> value is
     * <code>Worldwide</code>, and the valid values will be shown in the corresponding
     * <b>Location</b> fields. For valid two-digit country codes, look for
     * <code>ExcludeShippingLocationDetails</code> in the <b>GeteBayDetails</b>
     * response where the <b>Region</b> value is one of the defined geographical
     * regions, and the valid values will be shown in the corresponding <b>Location</b>
     * fields. Alternatively, you can find the two-digit country code values in the <a
     * href="/api-docs/sell/account/types/ba:CountryCodeEnum">CountryCodeEnum</a> type
     * definition. For valid domestic region values, look for
     * <code>ExcludeShippingLocationDetails</code> in the <b>GeteBayDetails</b>
     * response where the <b>Region</b> value is either <code>Domestic Location</code>
     * or <code>Additional Locations</code>, and the valid values will be shown in the
     * corresponding <b>Location</b> fields. The <code>STATE_OR_PROVINCE</code> region
     * type is only applicable to the US and Canada, and valid values for US states are
     * the same <a
     * href="https://about.usps.com/who-we-are/postal-history/state-abbreviations.htm">two-digit
     * abbreviations</a> used by the United States Postal Service, and valid values for
     * Canadian provinces and territories are the same <a
     * href="https://www.canadapost-postescanada.ca/cpc/en/support/articles/addressing-guidelines/symbols-and-abbreviations.page">two-digit
     * abbreviations</a> used by the Canada Post.
     *
     * @var \Ebay\Sell\Account\V1\Model\RegionSet
     */
    public $shipToLocations = null;
}
