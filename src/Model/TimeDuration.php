<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type used to specify a period of time using a specified time-measurement unit.
 * Payment, return, and fulfillment business policies all use this type to specify
 * time windows.<br/><br/>Whenever a container that uses this type is used in a
 * request, both of these fields are required. Similarly, whenever a container that
 * uses this type is returned in a response, both of these fields are always
 * returned.
 */
class TimeDuration extends AbstractModel
{
    /**
     * These enum values represent the time measurement unit, such as <code>DAY</code>.
     * A span of time is defined when you apply the value specified in the <b>value</b>
     * field to the value specified for <b>unit</b>. <br/><br/>See
     * <b>TimeDurationUnitEnum</b> for a complete list of possible time-measurement
     * units. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:TimeDurationUnitEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $unit = null;

    /**
     * An integer that represents an amount of time, as measured by the
     * time-measurement unit specified in the <b>unit</b> field.
     *
     * @var int
     */
    public $value = null;
}
