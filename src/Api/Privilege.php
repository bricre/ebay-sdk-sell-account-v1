<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\Model\SellingPrivileges;

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
        return $this->request(
        'getPrivileges',
        'GET',
        'privilege',
        null,
        [],
        []
        );
    }
}
