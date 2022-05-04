<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to provide sales tax settings for a specific tax jurisdiction.
 */
class SalesTax extends AbstractModel
{
    /**
     * The country code enumeration value identifies the country to which this sales
     * tax rate applies. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * A unique ID that identifies the sales tax jurisdiction to which the salest tax
     * rate applies (for example, a state within the United States).
     *
     * @var string
     */
    public $salesTaxJurisdictionId = null;

    /**
     * The sales tax rate that will be applied to sales price. The
     * <b>shippingAndHandlingTaxed</b> value will indicate whether or not sales tax is
     * also applied to shipping and handling charges<br><br>Although it is a string, a
     * percentage value is returned here, such as <code>7.75</code>.
     *
     * @var string
     */
    public $salesTaxPercentage = null;

    /**
     * If returned as <code>true</code>, sales tax is also applied to shipping and
     * handling charges, and not just the total sales price of the order.
     *
     * @var bool
     */
    public $shippingAndHandlingTaxed = null;
}
