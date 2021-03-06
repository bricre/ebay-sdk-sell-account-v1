<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A seller program in to which a seller can opt-in.
 */
class Program extends AbstractModel
{
    /**
     * A seller program in to which a seller can opt-in. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ProgramTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $programType = null;
}
