<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is the base response of the <b>getRateTables</b> method.
 */
class RateTableResponse extends AbstractModel
{
    /**
     * An array of all shipping rate tables defined for a marketplace (or all
     * marketplaces if no <b>country_code</b> query parameter is used). This array will
     * be returned as empty if the seller has no defined shipping rate tables for the
     * specified marketplace.
     *
     * @var \Ebay\sell\account\v1\Model\RateTable[]
     */
    public $rateTables = null;
}
