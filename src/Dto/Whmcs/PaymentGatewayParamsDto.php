<?php

namespace Indicio\Foundation\Dto\Whmcs;

/**
 * @property-read int $invoiceId
 * @property string $description
 * @property float $amount
 * @property string $currency
 * @property ClientDetailsDto $clientDetails;
 * @property-read string $companyName
 * @property-read string $systemURL
 * @property-read string $returnURL
 * @property-read string $langPayNow
 * @property-read string $name
 * @property-read string $paymentMethod
 * @property-read string $whmcsVersion
 */
class PaymentGatewayParamsDto extends AbstractDto
{
    /**
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return string
     */
    public function getSystemURL()
    {
        return $this->systemURL;
    }

    /**
     * @return string
     */
    public function getReturnURL()
    {
        return $this->returnURL;
    }

    /**
     * @return string
     */
    public function getLangPayNow()
    {
        return $this->langPayNow;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @return string
     */
    public function getWhmcsVersion()
    {
        return $this->whmcsVersion;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return (float) $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return ClientDetailsDto
     */
    public function getClientDetails()
    {
        return $this->clientDetails;
    }

    public function fieldMap() {
        return [
            'invoiceid' => 'invoiceId',
            'clientdetails' => ['clientDetails', ClientDetailsDto::class],
            'companyname' => 'companyName',
            'systemurl' => 'systemURL',
            'returnurl' => 'returnURL',
            'langpaynow' => 'langPayNow',
            'paymentmethod' => 'paymentMethod'
        ];
    }
}
