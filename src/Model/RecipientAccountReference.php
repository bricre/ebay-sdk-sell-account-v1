<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * <span class="tablenote"><b>Note</b>: This type is no longer applicable. eBay now
 * controls all electronic payment methods available for a marketplace, and a
 * seller never has to specify any electronic payment methods.</span>.
 */
class RecipientAccountReference extends AbstractModel
{
    /**
     * <span class="tablenote"><b>Note</b>: DO NOT USE THIS FIELD. eBay now controls
     * all electronic payment methods available for a marketplace, and a seller never
     * has to specify any electronic payment methods.</span>.
     *
     * @var string
     */
    public $referenceId = null;

    /**
     * <span class="tablenote"><b>Note</b>: DO NOT USE THIS FIELD. eBay now controls
     * all electronic payment methods available for a marketplace, and a seller never
     * has to specify any electronic payment methods.</span> For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:RecipientAccountReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $referenceType = null;
}
