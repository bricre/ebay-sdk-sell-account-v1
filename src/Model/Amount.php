<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that describes the value of a monetary amount as represented by a
 * global currency. When passing in an amount in a request payload, both
 * <b>currency</b> and <b>value</b> fields are required, and both fields are also
 * always returned for an amount in a response field.
 */
class Amount extends AbstractModel
{
    /**
     * The base currency applied to the <b>value</b> field to establish a monetary
     * amount.  <br/><br/>The currency is represented as a 3-letter <a
     * href="https://www.iso.org/iso-4217-currency-codes.html"
     * title="https://www.iso.org" target="_blank">ISO 4217</a> currency code. For
     * example, the code for the Canadian Dollar is <code>CAD</code>.
     * <br/><br/><b>Default:</b> The default currency of the eBay marketplace that
     * hosts the listing. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary amount in the specified <b>currency</b>.
     *
     * @var string
     */
    public $value = null;
}
