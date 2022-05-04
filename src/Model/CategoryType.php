<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The category type discerns whether the policy applies to motor vehicle listings,
 * or to any other items except motor vehicle listings. <br/><br/>Each business
 * policy can be associated with either or both categories ('MOTORS_VEHICLES' and
 * 'ALL_EXCLUDING_MOTORS_VEHICLES'); however, return business policies are not
 * applicable for motor vehicle listings.
 */
class CategoryType extends AbstractModel
{
    /**
     * The category type to which the policy applies (motor vehicles or non-motor
     * vehicles). <br /><br />The <code>MOTORS_VEHICLES</code> category type is not
     * valid for return policies. eBay flows do not support the return of motor
     * vehicles. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:CategoryTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $name = null;
}
