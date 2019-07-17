<?php

namespace Omnipay\NMI\Message;

/**
 * NMI Direct Post Authorize Request
 */
class DirectPostAuthRequest extends AbstractRequest
{
    protected $type = 'auth';

    /**
     * @return string
     */
    public function getMerchantDefinedField1()
    {
        return $this->getParameter('merchant_defined_field_1');
    }

    /**
     * Sets the first merchant defined field.
     *
     * @param string
     *
     * @return AbstractRequest Provides a fluent interface
     */
    public function setMerchantDefinedField1($value)
    {
        return $this->setParameter('merchant_defined_field_1', $value);
    }

    /**
     * @return string
     */
    public function getMerchantDefinedField2()
    {
        return $this->getParameter('merchant_defined_field_2');
    }

    /**
     * Sets the second merchant defined field.
     *
     * @param string
     *
     * @return AbstractRequest Provides a fluent interface
     */
    public function setMerchantDefinedField2($value)
    {
        return $this->setParameter('merchant_defined_field_2', $value);
    }

    /**
     * @return string
     */
    public function getMerchantDefinedField3()
    {
        return $this->getParameter('merchant_defined_field_3');
    }

    /**
     * Sets the third merchant defined field.
     *
     * @param string
     *
     * @return AbstractRequest Provides a fluent interface
     */
    public function setMerchantDefinedField3($value)
    {
        return $this->setParameter('merchant_defined_field_3', $value);
    }

    /**
     * @return string
     */
    public function getMerchantDefinedField4()
    {
        return $this->getParameter('merchant_defined_field_4');
    }

    /**
     * Sets the fourth merchant defined field.
     *
     * @param string
     *
     * @return AbstractRequest Provides a fluent interface
     */
    public function setMerchantDefinedField4($value)
    {
        return $this->setParameter('merchant_defined_field_4', $value);
    }

    public function getData()
    {
        $this->validate('amount');

        $data = $this->getBaseData() + array_filter([
            'amount'                   => $this->getAmount(),
            'payment'                  => $this->getPaymentMethod(),
            'merchant_defined_field_1' => $this->getMerchantDefinedField1(),
            'merchant_defined_field_2' => $this->getMerchantDefinedField2(),
            'merchant_defined_field_3' => $this->getMerchantDefinedField3(),
            'merchant_defined_field_4' => $this->getMerchantDefinedField4(),
        ]);

        if ($this->getCustomerId()) {
            $this->validate('customer_vault');

            $data['customer_vault_id'] = $this->getCustomerId();
            $data['customer_vault']    = $this->getCustomerVault();

            if ($data['customer_vault'] !== 'update_customer') {
                $this->validate('card_reference');

                $data['payment_token'] = $this->getCardReference();
            }
        } elseif ($this->getCardReference()) {
            $this->validate('card_reference');

            $data['payment_token'] = $this->getCardReference();
        } else {
           $this->getCard()->validate();

           $data['ccnumber'] = $this->getCard()->getNumber();
           $data['ccexp']    = $this->getCard()->getExpiryDate('my');
           $data['cvv']      = $this->getCard()->getCvv();
        }

        return array_merge(
            $data,
            $this->getOrderData(),
            $this->getBillingData(),
            $this->getShippingData()
        );
    }
}
