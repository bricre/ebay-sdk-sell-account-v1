<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class Onboarding extends AbstractAPI
{
    /**
     * <span class="tablenote"><b>Note:</b> This method is no longer applicable, as all
     * seller accounts globally have been enabled for the new eBay payment and checkout
     * flow.</span><br/><br/>This method retrieves a seller's onboarding status for a
     * payments program for a specified marketplace. The overall onboarding status of
     * the seller and the status of each onboarding step is returned.
     *
     * @param string $marketplace_id        the eBay marketplace ID associated with the
     *                                      onboarding status to retrieve
     * @param string $payments_program_type the type of payments program whose status
     *                                      is returned by the method
     *
     * @return PaymentsProgramOnboardingResponse|UnexpectedResponse
     */
    public function getPaymentsProgram(string $marketplace_id, string $payments_program_type)
    {
        return $this->request(
        'getPaymentsProgramOnboarding',
        'GET',
        "payments_program/$marketplace_id/$payments_program_type/onboarding",
        null,
        [],
        []
        );
    }
}
