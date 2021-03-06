<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to define specific shipping regions. There are four 'levels'
 * of shipping regions, including large geographical regions (like 'Asia',
 * 'Europe', or 'Middle East'), individual countries, US states or Canadian
 * provinces, and special locations/domestic regions within a country (like
 * 'Alaska/Hawaii' or 'PO Box').
 */
class Region extends AbstractModel
{
    /**
     * A string that indicates the name of a region, as defined by eBay. A "region" can
     * be either a 'world region' (e.g., the "Middle East" or "Southeast Asia"), a
     * country (represented with a two-letter country code), a state or province
     * (represented with a two-letter code), or a special domestic region within a
     * country. The <b>GeteBayDetails</b> call in the Trading API can be used to
     * retrieve the world regions and special domestic regions within a specific
     * country. To get these enumeration values, call <b>GeteBayDetails</b>with the
     * <b>DetailName</b> value set to <b>ExcludeShippingLocationDetails</b>.
     *
     * @var string
     */
    public $regionName = null;

    /**
     * Reserved for future use. <!--The region's type, which can be one of the
     * following: 'COUNTRY', 'COUNTRY_REGION', 'STATE_OR_PROVINCE', 'WORLD_REGION', or
     * 'WORLDWIDE'.--> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:RegionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $regionType = null;
}
