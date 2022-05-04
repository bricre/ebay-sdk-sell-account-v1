<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\Model\KycResponse;

class Kyc extends AbstractAPI
{
    /**
     * <span class="tablenote"><b>Note:</b>This method was originally created to see
     * which onboarding requirements were still pending for sellers being onboarded for
     * eBay managed payments, but now that all seller accounts are onboarded globally,
     * this method should now just returne an empty payload with a <code>204 No
     * Content</code> HTTP status code. </span>.
     *
     * @return KycResponse
     */
    public function getKYC(): KycResponse
    {
        return $this->request(
        'getKYC',
        'GET',
        'kyc',
        null,
        [],
        []
        );
    }
}
