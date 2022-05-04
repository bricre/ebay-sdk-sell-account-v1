<?php

namespace Ebay\Sell\Account\V1\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the <b>paymentMethods</b> container, which is used by the
 * seller to specify one or more offline payment methods. <br /><br /> <span
 * class="tablenote"><b>Note</b>: eBay now controls all electronic payment methods
 * available for a marketplace, so a seller will no longer use this type to specify
 * any electronic payment methods.</span>.
 */
class PaymentMethod extends AbstractModel
{
    /**
     * <span class="tablenote"><b>Note</b>: This array is no longer applicable and
     * should not be used. eBay now controls all electronic payment methods available
     * for a marketplace, and a seller never has to specify any electronic payment
     * methods, including any credit card brands accepted. </span>.
     *
     * @var string[]|
     */
    public $brands = null;

    /**
     * eBay now controls all electronic payment methods available for a marketplace, so
     * only offline payment method enum values may be used in this field, and offline
     * payment methods will only be applicable to listings that require or support
     * offline payments. See the <b>PaymentMethodTypeEnum</b> type for supported
     * offline payment method enum values. </p> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentMethodTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $paymentMethodType = null;

    /**
     * <span class="tablenote"><b>Note</b>: This container is no longer applicable and
     * should not be used. eBay now controls all electronic payment methods available
     * for a marketplace, and a seller never has to specify any electronic payment
     * methods, including PayPal. </span>.
     *
     * @var \Ebay\Sell\Account\V1\Model\RecipientAccountReference
     */
    public $recipientAccountReference = null;
}
