<?php

namespace Ebay\Sell\Account\V1;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getCustomPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\CustomPolicyResponse',
        ],
        'createCustomPolicy' => [
            '201.' => null,
        ],
        'getCustomPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\CustomPolicy',
        ],
        'createFulfillmentPolicy' => [
            '201.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetFulfillmentPolicyResponse',
        ],
        'getFulfillmentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\FulfillmentPolicy',
        ],
        'updateFulfillmentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetFulfillmentPolicyResponse',
        ],
        'getFulfillmentPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\FulfillmentPolicyResponse',
        ],
        'getFulfillmentPolicyByName' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\FulfillmentPolicy',
        ],
        'getPaymentPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentPolicyResponse',
        ],
        'createPaymentPolicy' => [
            '201.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetPaymentPolicyResponse',
        ],
        'getPaymentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentPolicy',
        ],
        'updatePaymentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetPaymentPolicyResponse',
        ],
        'getPaymentPolicyByName' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentPolicy',
        ],
        'getPaymentsProgram' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentsProgramResponse',
        ],
        'getPaymentsProgramOnboarding' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentsProgramOnboardingResponse',
        ],
        'getPrivileges' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SellingPrivileges',
        ],
        'getOptedInPrograms' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\Programs',
        ],
        'optInToProgram' => [
            '200.' => null,
        ],
        'optOutOfProgram' => [
            '200.' => null,
        ],
        'getRateTables' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\RateTableResponse',
        ],
        'getReturnPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\ReturnPolicyResponse',
        ],
        'createReturnPolicy' => [
            '201.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetReturnPolicyResponse',
        ],
        'getReturnPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\ReturnPolicy',
        ],
        'updateReturnPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetReturnPolicyResponse',
        ],
        'getReturnPolicyByName' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\ReturnPolicy',
        ],
        'getSalesTax' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SalesTax',
        ],
        'getSalesTaxes' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SalesTaxes',
        ],
        'getKYC' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\KycResponse',
        ],
    ];
}
