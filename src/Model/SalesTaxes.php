<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the root response of the <b>getSalesTaxes</b> method.
 */
class SalesTaxes extends AbstractModel
{
    /**
     * An array of one or more sales tax rate entries for a specific marketplace (or
     * all applicable marketplaces if the <b>country_code</b> query parameter is not
     * used.<br><br>If no sales tax rate entries are set up, no response payload is
     * returned, but only an HTTP status code of <code>204 No Content</code>.
     *
     * @var \Ebay\Sell\Account\V1\Model\SalesTax[]
     */
    public $salesTaxes = null;
}
