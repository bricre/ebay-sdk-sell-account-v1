<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\Model\SalesTax as SalesTaxModel;
use Ebay\Sell\Account\V1\Model\SalesTaxBase as SalesTaxBase;
use Ebay\Sell\Account\V1\Model\SalesTaxes as SalesTaxes;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class SalesTax extends AbstractAPI
{
    /**
     * This call gets the current sales tax table entry for a specific tax
     * jurisdiction. Specify the jurisdiction to retrieve using the <b>countryCode</b>
     * and <b>jurisdictionId</b> path parameters. All four response fields will be
     * returned if a sales tax entry exists for the tax jurisdiction. Otherwise, the
     * response will be returned as empty.<br/><br/><span
     * class="tablenote"><b>Important!</b> In most US states and territories, eBay now
     * 'collects and remits' sales tax, so sellers can no longer configure sales tax
     * rates for these states/territories.</span>.
     *
     * @param string $countryCode    This path parameter specifies the two-letter <a
     *                               href="https://www.iso.org/iso-3166-country-codes.html"
     *                               title="https://www.iso.org" target="_blank">ISO 3166</a> code for the country
     *                               whose sales tax table you want to retrieve.
     * @param string $jurisdictionId This path parameter specifies the ID of the sales
     *                               tax jurisdiction for the tax table entry you want to retrieve. Retrieve valid
     *                               jurisdiction IDs using <b>getSalesTaxJurisdictions</b> in the Metadata API.
     *
     * @return SalesTaxModel
     */
    public function get(string $countryCode, string $jurisdictionId): SalesTaxModel
    {
        return $this->client->request('getSalesTax', 'GET', "sales_tax/{$countryCode}/{$jurisdictionId}",
            [
            ]
        );
    }

    /**
     * This method creates or updates a sales tax table entry for a jurisdiction.
     * Specify the tax table entry you want to configure using the two path parameters:
     * <b>countryCode</b> and <b>jurisdictionId</b>.  <br/><br/>A tax table entry for a
     * jurisdiction is comprised of two fields: one for the jurisdiction's sales-tax
     * rate and another that's a boolean value indicating whether or not shipping and
     * handling are taxed in the jurisdiction.  <br/><br/>You can set up <i>tax
     * tables</i> for countries that support different <i>tax jurisdictions</i>.
     * Currently, only Canada, India, and the US support separate tax jurisdictions. If
     * you sell into any of these countries, you can set up tax tables for any of the
     * country's jurisdictions. Retrieve valid jurisdiction IDs using
     * <b>getSalesTaxJurisdictions</b> in the Metadata API.  <br/><br/>For details on
     * using this call, see <a
     * href="/api-docs/sell/static/seller-accounts/tax-tables.html">Establishing
     * sales-tax tables</a>. <br/><br/><span class="tablenote"><b>Important!</b> In the
     * US, eBay now 'collects and remits' sales tax for every US state except for
     * Missouri (and a few US territories), so sellers can no longer configure sales
     * tax rates for any states except Missouri. With eBay 'collect and remit', eBay
     * calculates the sales tax, collects the sales tax from the buyer, and remits the
     * sales tax to the tax authorities at the buyer's location.</span>.
     *
     * @param string       $countryCode    This path parameter specifies the two-letter <a
     *                                     href="https://www.iso.org/iso-3166-country-codes.html"
     *                                     title="https://www.iso.org" target="_blank">ISO 3166</a> code for the country
     *                                     for which you want to create a sales tax table entry.
     * @param string       $jurisdictionId This path parameter specifies the ID of the tax
     *                                     jurisdiction for the table entry you want to create. Retrieve valid jurisdiction
     *                                     IDs using <b>getSalesTaxJurisdictions</b> in the Metadata API.
     * @param SalesTaxBase $Model          a container that describes the how the sales tax is
     *                                     calculated
     *
     * @return mixed
     */
    public function createOrReplace(string $countryCode, string $jurisdictionId, SalesTaxBase $Model): mixed
    {
        return $this->client->request('createOrReplaceSalesTax', 'PUT', "sales_tax/{$countryCode}/{$jurisdictionId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This call deletes a sales tax table entry for a jurisdiction. Specify the
     * jurisdiction to delete using the <b>countryCode</b> and <b>jurisdictionId</b>
     * path parameters.
     *
     * @param string $countryCode    This path parameter specifies the two-letter <a
     *                               href="https://www.iso.org/iso-3166-country-codes.html"
     *                               title="https://www.iso.org" target="_blank">ISO 3166</a> code for the country
     *                               whose sales tax table entry you want to delete.
     * @param string $jurisdictionId This path parameter specifies the ID of the sales
     *                               tax jurisdiction whose table entry you want to delete. Retrieve valid
     *                               jurisdiction IDs using <b>getSalesTaxJurisdictions</b> in the Metadata API.
     *
     * @return mixed
     */
    public function delete(string $countryCode, string $jurisdictionId): mixed
    {
        return $this->client->request('deleteSalesTax', 'DELETE', "sales_tax/{$countryCode}/{$jurisdictionId}",
            [
            ]
        );
    }

    /**
     * Use this call to retrieve all sales tax table entries that the seller has
     * defined for a specific country. All four response fields will be returned for
     * each tax jurisdiction that matches the search criteria. <br/><br/><span
     * class="tablenote"><b>Important!</b> In most US states and territories, eBay now
     * 'collects and remits' sales tax, so sellers can no longer configure sales tax
     * rates for these states/territories.</span>.
     *
     * @param array $queries options:
     *                       'country_code'	string	This path parameter specifies the two-letter <a
     *                       href="https://www.iso.org/iso-3166-country-codes.html"
     *                       title="https://www.iso.org" target="_blank">ISO 3166</a> code for the country
     *                       whose tax table you want to retrieve. For implementation help, refer to eBay API
     *                       documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum
     *
     * @return SalesTaxes
     */
    public function getes(array $queries = []): SalesTaxes
    {
        return $this->client->request('getSalesTaxes', 'GET', 'sales_tax',
            [
                'query' => $queries,
            ]
        );
    }
}
