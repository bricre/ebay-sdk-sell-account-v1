<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type consists of the <b>regionIncluded</b> and <b>regionExcluded</b>
 * arrays, which indicate the areas to where the seller does and doesn't ship.
 */
class RegionSet extends AbstractModel
{
    /**
     * An array of one or more <b>regionName</b> values that specify the areas to where
     * a seller does not ship. A <b>regionExcluded</b> list should only be set in the
     * top-level <b>shipToLocations</b> container and not within the
     * <b>shippingServices.shipToLocations</b> container used to specify which shipping
     * regions are serviced by each available shipping service option. <p>Many sellers
     * are willing to ship to many international locations, but they may want to
     * exclude some world regions or some countries as places they are willing to ship
     * to.<br/><br/>This array will be returned as empty if no shipping regions are
     * excluded with the fulfillment business policy.
     *
     * @var \Ebay\sell\account\v1\Model\Region[]
     */
    public $regionExcluded = null;

    /**
     * An array of one or more <b>regionName</b> fields that specify the areas to where
     * a seller ships. <br><br>Each eBay marketplace supports its own set of allowable
     * shipping locations.
     *
     * @var \Ebay\sell\account\v1\Model\Region[]
     */
    public $regionIncluded = null;
}
