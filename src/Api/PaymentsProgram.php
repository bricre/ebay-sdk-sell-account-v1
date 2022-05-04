<?php

namespace Ebay\sell\account\v1\Api;

use Ebay\sell\account\v1\Model\PaymentsProgramResponse as PaymentsProgramResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class PaymentsProgram extends AbstractAPI
{
    /**
     * <span class="tablenote"><b>Note:</b> This method is no longer applicable, as all
     * seller accounts globally have been enabled for the new eBay payment and checkout
     * flow.</span><br/><br/>This method returns whether or not the user is opted-in to
     * the specified payments program. Sellers opt-in to payments programs by
     * marketplace and you use the <b>marketplace_id</b> path parameter to specify the
     * marketplace of the status flag you want returned.
     *
     * @param string $marketplace_id        this path parameter specifies the eBay marketplace
     *                                      of the payments program for which you want to retrieve the seller's status
     * @param string $payments_program_type this path parameter specifies the payments
     *                                      program whose status is returned by the call
     *
     * @return PaymentsProgramResponse
     */
    public function get(string $marketplace_id, string $payments_program_type): PaymentsProgramResponse
    {
        return $this->client->request('getPaymentsProgram', 'GET', "payments_program/{$marketplace_id}/{$payments_program_type}",
            [
            ]
        );
    }
}
