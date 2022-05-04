<?php

namespace Ebay\sell\account\v1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response payload for the <b>getReturnPolicies</b> method. <br /><br /><span
 * class="tablenote"><b>Note</b>: Pagination has not yet been enabled for
 * <b>getReturnPolicies</b>, so all of the pagination-related fields are for future
 * use.</span>.
 */
class ReturnPolicyResponse extends AbstractModel
{
    /**
     * This field is for future use.
     *
     * @var string
     */
    public $href = null;

    /**
     * This field is for future use.
     *
     * @var int
     */
    public $limit = null;

    /**
     * This field is for future use.
     *
     * @var string
     */
    public $next = null;

    /**
     * This field is for future use.
     *
     * @var int
     */
    public $offset = null;

    /**
     * This field is for future use.
     *
     * @var string
     */
    public $prev = null;

    /**
     * A list of all of the seller's return business policies defined for the specified
     * marketplace. This array will be returned as empty if no return business policies
     * are defined for the specified marketplace.
     *
     * @var \Ebay\sell\account\v1\Model\ReturnPolicy[]
     */
    public $returnPolicies = null;

    /**
     * The total number of return business policies retrieved in the result set.
     * <br/><br/>If no return business policies are defined for the specified
     * marketplace, this field is returned with a value of <code>0</code>.
     *
     * @var int
     */
    public $total = null;
}
