<?php

namespace Ebay\Sell\Account\V1\Api;

use Ebay\Sell\Account\V1\ResponseHandlerStack;
use OpenAPI\Runtime\AbstractAPI as BaseClass;

class AbstractAPI extends BaseClass implements APIInterface
{
    protected string $responseHandlerStackClass = ResponseHandlerStack::class;

    public function __construct(?HttpClientInterface $client = null)
    {
        parent::__construct($client);
    }
}
