<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Type used by the <b>sellingLimit</b> container, a container that lists the
 * monthly cap for the quantity of items sold and total sales amount allowed for
 * the seller's account.
 */
class SellingLimit extends AbstractModel
{
    /**
     * This container shows the monthly cap for total sales amount allowed for the
     * seller's account. This container may not be returned if a seller does not have a
     * monthly cap for total sales amount.
     *
     * @var \Ebay\Sell\Account\V1\Model\Amount
     */
    public $amount = null;

    /**
     * This field shows the monthly cap for total quantity sold allowed for the
     * seller's account. This container may not be returned if a seller does not have a
     * monthly cap for total quantity sold.
     *
     * @var int
     */
    public $quantity = null;
}
