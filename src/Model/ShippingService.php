<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the <b>shippingServices</b> array, an array that provides
 * details about every domestic and international shipping service option that is
 * defined for the policy.
 */
class ShippingService extends AbstractModel
{
    /**
     * This container is used by the seller to cover the use case when a single buyer
     * purchases multiple quantities of the same line item. This cost cannot exceed the
     * corresponding <b>shippingCost</b> value. A seller will generally set this field
     * when he/she wants to pass on a shipping discount to the buyer if that buyer
     * purchases multiple quantities of a line item. The seller can ship multiple
     * quantities of the line item in the same package and pass on the shipping savings
     * to the buyer.<br/><br/>If this field is not set, and a buyer purchases multiple
     * quantities of an item, the seller can technically charge the same cost set in
     * the <b>shippingCost</b> container for each individual item, but in general, it
     * behooves both the seller and the buyer (and saves both parties money) if they
     * discuss combined shipping.<br/><br/>This field is not applicable to auction
     * listings or single-quantity, fixed-price listings.<br/><br/>This container is
     * returned if set.
     *
     * @var \Ebay\sell\account\v1\Model\Amount
     */
    public $additionalShippingCost = null;

    /**
     * This field should be included and set to <code>true</code> for a motor vehicle
     * listing if it will be the buyer's responsibility to pick up the purchased motor
     * vehicle after full payment is made. This field is only applicable to motor
     * vehicle listings. In the majority of motor vehicle listings, the seller does
     * make the buyer responsible for pickup or shipment of the vehicle. <br/><br/>This
     * field is returned if set.<br/><br/><b>Default</b>: false.
     *
     * @var bool
     */
    public $buyerResponsibleForPickup = null;

    /**
     * This field should be included and set to <code>true</code> for a motor vehicle
     * listing if it will be the buyer's responsibility to arrange for shipment of a
     * purchased motor vehicle after full payment is made. This field is only
     * applicable to motor vehicle listings. In the majority of motor vehicle listings,
     * the seller does make the buyer responsible for pickup or shipment of the
     * vehicle. <br/><br/>This field is returned if set.<br/><br/><b>Default</b>: false.
     *
     * @var bool
     */
    public $buyerResponsibleForShipping = null;

    /**
     * This container is used if the seller charges a Cash on Delivery (COD) fee. This
     * fee will only be applicable in the case of a 'local pickup', and if one of the
     * specified offline payment methods is a 'cash on pickup' or 'cash on delivery'
     * option. This fee is added to the total cost of the item, and the total cost is
     * due from the buyer upon the delivery of the item.<br/><br/>This container is
     * returned if set.
     *
     * @var \Ebay\sell\account\v1\Model\Amount
     */
    public $cashOnDeliveryFee = null;

    /**
     * This field is included and set to <code>true</code> if the seller offers a free
     * shipping option to the buyer. This field can only be included and set to
     * <code>true</code> for the first domestic shipping service option specified in
     * the <b>shippingServices</b> container (it is ignored if set for subsequent
     * shipping services or for any international shipping service option). The first
     * specified shipping service option has a <b>sortOrder</b> value of <code>1</code>
     * or if the <b>sortOrderId</b> field is not used, it is the shipping service
     * option that's specified first in the <b>shippingServices</b>
     * container.<br/><br/>This container is returned if set.
     *
     * @var bool
     */
    public $freeShipping = null;

    /**
     * This field sets/indicates the shipping carrier, such as <code>USPS</code>,
     * <code>FedEx</code>, or <code>UPS</code>. Although this field uses the
     * <b>string</b> type, the seller must pass in a pre-defined enumeration value
     * here. For a full list of shipping carrier enum values for a specified eBay
     * marketplace, the <b>GeteBayDetails</b> call of the <b>Trading API</b> can be
     * used, and the <b>DetailName</b> field's value should be set to
     * <code>ShippingCarrierDetails</code>. The enum values for each shipping carriers
     * can be found in each <b>ShippingCarrierDetails.ShippingCarrier</b> field in the
     * response payload.<br/><br/> This field is actually optional, as the shipping
     * carrier is also tied into the <b>shippingServiceCode</b> enum value, and that
     * field is required for every specified shipping service option.<br/><br/>This
     * field is returned if set.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * This container is used to set the shipping cost to ship one item using the
     * corresponding shipping service option. This container is conditionally required
     * if the seller is using flat-rate shipping and is not using a domestic or
     * international shipping rate table. This container is not necessary for
     * calculated shipping, since eBay will calculate the shipping cost and display it
     * in the View Item page based off of the potential buyer's ship-to
     * location.<br/><br/>This value is automatically set to <code>0.0</code> for the
     * first specified domestic shipping service option and if the corresponding
     * <b>freeShipping</b> field is set to <code>true</code>.  <br/><br/>This container
     * is returned if set for the policy.
     *
     * @var \Ebay\sell\account\v1\Model\Amount
     */
    public $shippingCost = null;

    /**
     * This field sets/indicates the domestic or international shipping service option,
     * such as <code>USPSPriority</code>, <code>FedEx2Day</code>, or
     * <code>UPS3rdDay</code>. Although this field uses the <b>string</b> type, the
     * seller must pass in a pre-defined enumeration value here. For a full list of
     * shipping service option enum values for a specified eBay marketplace, the
     * <b>GeteBayDetails</b> call of the <b>Trading API</b> can be used, and the
     * <b>DetailName</b> field's value should be set to
     * <code>ShippingServiceDetails</code>. The enum values for each shipping service
     * option can be found in each <b>ShippingServiceDetails.ShippingService</b> field
     * in the response payload. The seller must make sure that the shipping service
     * option is still valid, which is indicated by a <code>true</code> value in the
     * corresponding <b>ValidForSellingFlow</b> boolean field. International shipping
     * service options are typically returned at the top of the response payload, and
     * are indicated by an <b>InternationalService</b> boolean field that reads
     * <code>true</code>. The <b>InternationalService</b> boolean field is not returned
     * at all for domestic shipping service options. <br/><br/> This field is required
     * for every specified shipping service option.<br/><br/>This field is returned if
     * set.
     *
     * @var string
     */
    public $shippingServiceCode = null;

    /**
     * This container is used to set the ship-to locations applicable to the
     * corresponding shipping service option. Although the <b>regionExcluded</b>
     * container is defined for <b>RegionSet</b> type and could technically be used
     * here, it is recommened that only the <b>regionIncluded</b> container be used at
     * the shipping service level. The excluded shipping regions (if any) can instead
     * be set up in the top-level <b>regionExcluded</b> container. The
     * <b>regionIncluded</b> and <b>regionExcluded</b> containers define the
     * geographical regions/countries/states or provinces/domestic regions where the
     * seller does and doesn't ship to with this fulfillment policy.<br/><br/>To
     * retrieve the valid geographical shipping region values, two-digit country
     * values, or special domestic regions for an eBay marketplace, call
     * <b>GeteBayDetails</b> with <b>DetailName</b> value set to
     * <code>ExcludeShippingLocationDetails</code>, then review the
     * <b>ExcludeShippingLocationDetails</b> containers in the response for the strings
     * you use in the <b>regionIncluded.regionName</b> field. For valid geographical
     * region names, look for the <code>ExcludeShippingLocationDetails</code>
     * containers in the <b>GeteBayDetails</b> response where the <b>Region</b> value
     * is <code>Worldwide</code>, and the valid values will be shown in the
     * corresponding <b>Location</b> fields. For valid two-digit country codes, look
     * for <code>ExcludeShippingLocationDetails</code> in the <b>GeteBayDetails</b>
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
     * @var \Ebay\sell\account\v1\Model\RegionSet
     */
    public $shipToLocations = null;

    /**
     * The integer value set in this field controls the order of the corresponding
     * domestic or international shipping service option in the View Item and Checkout
     * pages. <br/><br/>Sellers can specify up to four domestic shipping services (in
     * four separate <b>shippingService</b> containers), so valid values are 1, 2, 3,
     * and 4. A shipping service option with a <b>sortOrder</b> value of <code>1</code>
     * appears at the top of View Item and Checkout pages. Conversely, a shipping
     * service option with a <b>sortOrder</b> value of <code>1</code> appears at the
     * bottom of the list. <br/><br/>Sellers can specify up to five international
     * shipping services (in five separate <b>shippingService</b> containers), so valid
     * values for international shipping services are 1, 2, 3, 4, and 5. Similarly to
     * domestic shipping service options, the <b>sortOrder</b> value of a international
     * shipping service option controls the placement of that shipping service option
     * in the View Item and Checkout pages. <br/><br/>If the <b>sortOrder</b> field is
     * not supplied, the order of domestic and international shipping service options
     * is determined by the order in which they are listed in the API call.
     * <br/><br/><b>Min</b>: 1. <b>Max</b>: 4 (for domestic shipping service) or 5 (for
     * international shipping service).
     *
     * @var int
     */
    public $sortOrder = null;

    /**
     * <span class="tablenote"> <strong>Note:</strong> DO NOT USE THIS FIELD. Shipping
     * surcharges for domestic shipping service options can no longer be set with
     * fulfillment business policies, except through shipping rate tables. To do this,
     * a seller would set up a surcharge-based shipping rate table and specify the
     * surcharge in that table. Then, the seller would need to associate this shipping
     * rate table to the fulfillment business policy by specifying the unique ID of the
     * shipping rate table through the <b>shippingOptions.rateTableId</b> field.
     * </span><br/><br/>Shipping surcharges cannot be applied at all to international
     * shipping service options.
     *
     * @var \Ebay\sell\account\v1\Model\Amount
     */
    public $surcharge = null;
}
