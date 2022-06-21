<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\Model\Program as ProgramModel;
use Ebay\Sell\Account\V1\Model\Programs;
use OpenAPI\Runtime\UnexpectedResponse;

class Program extends AbstractAPI
{
    /**
     * This method gets a list of the seller programs that the seller has opted-in to.
     *
     * @return Programs|UnexpectedResponse
     */
    public function getOptedIns()
    {
        return $this->request(
        'getOptedInPrograms',
        'GET',
        'program/get_opted_in_programs',
        null,
        [],
        []
        );
    }

    /**
     * This method opts the seller in to an eBay seller program. Refer to the <a
     * href="/api-docs/sell/account/overview.html#opt-in" target="_blank">Account API
     * overview</a> for information about available eBay seller programs.<br /><br
     * /><span class="tablenote"><b>Note:</b> It can take up to 24-hours for eBay to
     * process your request to opt-in to a Seller Program. Use the <a
     * href="/api-docs/sell/account/resources/program/methods/getOptedInPrograms"
     * target="_blank">getOptedInPrograms</a> call to check the status of your request
     * after the processing period has passed.</span>.
     *
     * @param ProgramModel $Model program being opted-in to
     *
     * @return object|UnexpectedResponse
     */
    public function optInTo(ProgramModel $Model)
    {
        return $this->request(
        'optInToProgram',
        'POST',
        'program/opt_in',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method opts the seller out of a seller program to which you have previously
     * opted-in to. Get a list of the seller programs you have opted-in to using the
     * <b>getOptedInPrograms</b> call.
     *
     * @param ProgramModel $Model program being opted-out of
     *
     * @return object|UnexpectedResponse
     */
    public function optOutOf(ProgramModel $Model)
    {
        return $this->request(
        'optOutOfProgram',
        'POST',
        'program/opt_out',
        $Model->getArrayCopy(),
        [],
        []
        );
    }
}
