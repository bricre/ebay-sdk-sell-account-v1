<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\Model\SellingPrivileges as SellingPrivileges;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Privilege extends AbstractAPI
{
    /**
     * This method retrieves the seller's current set of privileges, including whether
     * or not the seller's eBay registration has been completed, as well as the details
     * of their site-wide <b>sellingLimt</b> (the amount and quantity they can sell on
     * a given day).
     *
     * @return SellingPrivileges
     */
    public function gets(): SellingPrivileges
    {
        return $this->client->request('getPrivileges', 'GET', 'privilege',
            [
            ]
        );
    }
}
