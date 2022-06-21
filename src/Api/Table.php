<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\Model\RateTableResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class Table extends AbstractAPI
{
    /**
     * This method retrieves a seller's <i>shipping rate tables</i> for the country
     * specified in the <b>country_code</b> query parameter. If you call this method
     * without specifying a country code, the call returns all of the seller's shipping
     * rate tables.  <br/><br/>The method's response includes a <b>rateTableId</b> for
     * each table defined by the seller. This <b>rateTableId</b> value is used in
     * add/revise item call or in create/update fulfillment business policy call to
     * specify the shipping rate table to use for that policy's domestic or
     * international shipping options. <br/><br/>This call currently supports getting
     * rate tables related to the following
     * marketplaces:<ul><li><code>EBAY_AU</code></li> <li><code>EBAY_CA</code></li>
     * <li><code>EBAY_DE</code></li> <li><code>EBAY_ES</code></li>
     * <li><code>EBAY_FR</code></li> <li><code>EBAY_GB</code></li>
     * <li><code>EBAY_IT</code></li> <li><code>EBAY_US</code></li></ul>  <span
     * class="tablenote"><b>Note:</b> Rate tables created with the Trading API might
     * not have been assigned a <b>rateTableId</b> at the time of their creation. This
     * method can assign and return <b>rateTableId</b> values for rate tables with
     * missing IDs if you make a request using the <b>country_code</b> where the seller
     * has defined rate tables.</span>  <br/><br/>Sellers can define up to 40 shipping
     * rate tables for their account, which lets them set up different rate tables for
     * each of the marketplaces they sell into. Go to <a
     * href="https://www.ebay.com/ship/rt">Shipping rate tables</a> in  <b>My eBay</b>
     * to create and update rate tables.
     *
     * @param array $queries options:
     *                       'country_code'	string	This query parameter specifies the two-letter <a
     *                       href="https://www.iso.org/iso-3166-country-codes.html"
     *                       title="https://www.iso.org" target="_blank">ISO 3166</a> code of country for
     *                       which you want shipping rate table information. If you do not specify a country
     *                       code, the request returns all of the seller's defined shipping rate tables for
     *                       all eBay marketplaces. For implementation help, refer to eBay API documentation
     *                       at https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum
     *
     * @return RateTableResponse|UnexpectedResponse
     */
    public function gets(array $queries = [])
    {
        return $this->request(
        'getRateTables',
        'GET',
        'rate_table',
        null,
        $queries,
        []
        );
    }
}
