<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <b>shippingOptions</b> array, which is used to provide
 * detailed information on the domestic and international shipping options
 * available for the policy. A separate <b>ShippingOption</b> object covers
 * domestic shipping service options and international shipping service options (if
 * the seller ships to international locations).
 */
class ShippingOption extends AbstractModel
{
    /**
     * This field defines whether the shipping cost model is <code>FLAT_RATE</code>
     * (the same rate for all buyers, or buyers within a region if shipping rate tables
     * are used) or <code>CALCULATED</code> (the shipping rate varies by the ship-to
     * location and size and weight of the package). <br/><br/>This field is
     * conditionally required if any shipping service options are specified (domestic
     * and/or international). For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingCostTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $costType = null;

    /**
     * This field has been deprecated. <br/><br/>Shipping insurance is offered only via
     * a shipping carrier's shipping services and is no longer available via eBay
     * shipping policies.
     *
     * @var \Ebay\Sell\Account\V1\Model\Amount
     */
    public $insuranceFee = null;

    /**
     * This field has been deprecated. <br/><br/>Shipping insurance is offered only via
     * a shipping carrier's shipping services and is no longer available via eBay
     * shipping policies.
     *
     * @var bool
     */
    public $insuranceOffered = null;

    /**
     * This field is used to indicate if the corresponding shipping service options
     * (under <b>shippingServices</b> array) are domestic or international shipping
     * service options. This field is conditionally required if any shipping service
     * options are specified (domestic and/or international). For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $optionType = null;

    /**
     * This container is used if the seller adds handling charges to domestic and/or
     * international shipments. <br/><br/>Sellers can not specify any domestic handling
     * charges if they offered 'free shipping' in the policy.<br/><br/>This container
     * will only be returned if set for the policy.
     *
     * @var \Ebay\Sell\Account\V1\Model\Amount
     */
    public $packageHandlingCost = null;

    /**
     * This field is used if the seller wants to associate a domestic or international
     * shipping rate table to the fulfillment business policy. The <a
     * href="/api-docs/sell/account/resources/rate_table/methods/getRateTables">getRateTables</a>
     * method can be used to retrieve shipping rate table IDs.<br/><br/>With domestic
     * and international shipping rate tables, the seller can set different shipping
     * costs based on shipping regions and shipping speed/level of service (one-day,
     * expedited, standard, economy). There are also options to additional per-weight
     * and handling charges.<br/><br/>Sellers need to be careful that shipping rate
     * tables match the corresponding shipping service options. In other words, a
     * domestic shipping rate table must not be specified in the same container where
     * international shipping service options are being specified, and vice versa, and
     * the shipping speed/level of service of the provided shipping service options
     * should match the shipping speed/level of service options that are defined in the
     * shipping rate tables. For example, if the corresponding shipping rate table
     * defines costs for one-day shipping services, there should be at least one
     * one-day shipping service option specified under the <b>shippingServices</b>
     * array.<br/><br/>This field is returned if set.
     *
     * @var string
     */
    public $rateTableId = null;

    /**
     * This array consists of the domestic or international shipping services options
     * that are defined for the policy. The shipping service options defined under this
     * array should match what is set in the corresponding
     * <b>shippingOptions.optionType</b> field (which controls whether domestic or
     * international shipping service options are being defined). If a shipping rate
     * table is being used, the specified shipping service options should also match
     * the shipping rate table settings (domestic or international, shipping
     * speed/level of service, etc.) <br/><br/>Sellers can specify up to four domestic
     * shipping services and up to five international shipping service options by using
     * separate <b>shippingService</b> containers for each. If the seller is using the
     * Global Shipping Program as an international option, only a total of four
     * international shipping service options (including GSP) can be offered.
     * <br/><br/> See <a
     * href="/api-docs/sell/static/seller-accounts/ht_shipping-setting-shipping-carrier-and-service-values.html"
     * target="_blank">How to set up shipping carrier and shipping service values</a>.
     * <br /><br />To use the eBay standard envelope service (eSE), see <a
     * href="/api-docs/sell/static/seller-accounts/using-the-ebay-standard-envelope-service.html"
     * target="_blank">Using eBay standard envelope (eSE) service</a>.<br /><br />This
     * array is conditionally required if the seller is offering one or more domestic
     * and/or international shipping service options.
     *
     * @var \Ebay\Sell\Account\V1\Model\ShippingService[]
     */
    public $shippingServices = null;
}
