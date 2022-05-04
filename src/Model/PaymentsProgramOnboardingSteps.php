<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The payments program onboarding steps, status, and link.
 */
class PaymentsProgramOnboardingSteps extends AbstractModel
{
    /**
     * The name of the step in the steps array. Over time, these names are subject to
     * change as processes change. The output sample contains example step names.
     * Review an actual call response for updated step names.
     *
     * @var string
     */
    public $name = null;

    /**
     * This enumeration value indicates the status of the associated step. <p> <span
     * class="tablenote"><strong>Note:</strong> Only one step can be
     * <code>IN_PROGRESS</code> at a time.</span></p> For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentsProgramOnboardingStepStatus'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * This URL provides access to the <code>IN_PROGRESS</code> step.
     *
     * @var string
     */
    public $webUrl = null;
}
