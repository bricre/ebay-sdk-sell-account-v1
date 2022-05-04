<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base response of the <b>getPrivileges</b> method.
 */
class SellingPrivileges extends AbstractModel
{
    /**
     * If this field is returned as <code>true</code>, the seller's registration is
     * completed. If this field is returned as <code>false</code>, the registration
     * process is not complete.
     *
     * @var bool
     */
    public $sellerRegistrationCompleted = null;

    /**
     * This container lists the monthly cap for the quantity of items sold and total
     * sales amount allowed for the seller's account. This container may not be
     * returned if a seller does not have a monthly cap for total quantity sold and
     * total sales amount.
     *
     * @var \Ebay\sell\account\v1\Model\SellingLimit
     */
    public $sellingLimit = null;
}
