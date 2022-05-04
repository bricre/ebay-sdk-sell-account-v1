<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The base response type of the <b>getOptedInPrograms</b> method.
 */
class Programs extends AbstractModel
{
    /**
     * An array of seller programs that the seller's account is opted in to.
     *
     * @var \Ebay\Sell\Account\V1\Model\Program[]
     */
    public $programs = null;
}
