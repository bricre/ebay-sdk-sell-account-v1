<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

class CustomPolicyResponse extends AbstractModel
{
    /**
     * This array contains the custom policies that match the input criteria.
     *
     * @var \Ebay\Sell\Account\V1\Model\CompactCustomPolicyResponse[]
     */
    public $customPolicies = null;

    /**
     * <i>This field is for future use.</i>.
     *
     * @var string
     */
    public $href = null;

    /**
     * <i>This field is for future use.</i>.
     *
     * @var int
     */
    public $limit = null;

    /**
     * <i>This field is for future use.</i>.
     *
     * @var string
     */
    public $next = null;

    /**
     * <i>This field is for future use.</i>.
     *
     * @var int
     */
    public $offset = null;

    /**
     * <i>This field is for future use.</i>.
     *
     * @var string
     */
    public $prev = null;

    /**
     * <i>This field is for future use.</i>.
     *
     * @var int
     */
    public $total = null;
}
