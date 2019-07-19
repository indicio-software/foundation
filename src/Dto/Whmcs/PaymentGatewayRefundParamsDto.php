<?php

namespace Indicio\Foundation\Dto\Whmcs;
/**
 * @property-read string $transactionId
 */
class PaymentGatewayRefundParamsDto extends PaymentGatewayParamsDto
{
    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function fieldMap()
    {
        $fields =  parent::fieldMap();

        return $fields + ['transid' => 'transactionId'];
    }
}
