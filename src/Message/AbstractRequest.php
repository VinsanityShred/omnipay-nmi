<?php
namespace Omnipay\NMI\Message;

/**
* NMI Abstract Request
*/
abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    protected $endpoint = 'https://secure.nmi.com/api/transact.php';

    public function getCustomerId()
    {
        return $this->getParameter('customerId');
    }
    
    public function setCustomerId($value)
    {
        return $this->setParameter('customerId', $value);
    }
    
    public function getCustomerVault()
    {
        return $this->getParameter('customer_vault') ?? $this->customer_vault ?? null;
    }
    
    public function setCustomerVault($value)
    {
        return $this->setParameter('customer_vault', $value);
    }
    
    public function getInitiatedBy()
    {
        return $this->getParameter('initiated_by');
    }
    
    public function setInitiatedBy($value)
    {
        return $this->setParameter('initiated_by', $value);
    }

    public function getStoredCredentialIndicator()
    {
        return $this->getParameter('stored_credential_indicator');
    }
    
    public function setStoredCredentialIndicator($value)
    {
        return $this->setParameter('stored_credential_indicator', $value);
    }

    public function getDiscountAmount()
    {
        return $this->getParameter('discount_amount');
    }
    
    public function setDiscountAmount($value)
    {
        return $this->setParameter('discount_amount', $value);
    }
    
    public function getVatTaxAmount()
    {
        return $this->getParameter('vat_tax_amount');
    }
    
    public function setVatTaxAmount($value)
    {
        return $this->setParameter('vat_tax_amount', $value);
    }
    
    public function getVatTaxRate()
    {
        return $this->getParameter('vat_tax_rate');
    }
    
    public function setVatTaxRate($value)
    {
        return $this->setParameter('vat_tax_rate', $value);
    }
    
    public function getCustomerVatRegistration()
    {
        return $this->getParameter('customer_vat_registration');
    }
    
    public function setCustomerVatRegistration($value)
    {
        return $this->setParameter('customer_vat_registration', $value);
    }
    
    public function getMerchantVatRegistration()
    {
        return $this->getParameter('merchant_vat_registration');
    }
    
    public function setMerchantVatRegistration($value)
    {
        return $this->setParameter('merchant_vat_registration', $value);
    }

    public function getBillingMethod()
    {
        return $this->getParameter('billing_method');
    }
    
    public function setBillingMethod($value)
    {
        return $this->setParameter('billing_method', $value);
    }

    public function getApiKey()
    {
        return $this->getParameter('api_key');
    }

    public function setApiKey($value)
    {
        return $this->setParameter('api_key', $value);
    }

    public function getUsername()
    {
        return $this->getParameter('username');
    }

    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    public function getProcessorId()
    {
        return $this->getParameter('processor_id');
    }

    public function setProcessorId($value)
    {
        return $this->setParameter('processor_id', $value);
    }

    public function getAuthorizationCode()
    {
        return $this->getParameter('authorization_code');
    }

    public function setAuthorizationCode($value)
    {
        return $this->setParameter('authorization_code', $value);
    }

    public function getDescriptor()
    {
        return $this->getParameter('descriptor');
    }

    public function setDescriptor($value)
    {
        return $this->setParameter('descriptor', $value);
    }

    public function getDescriptorPhone()
    {
        return $this->getParameter('descriptor_phone');
    }

    public function setDescriptorPhone($value)
    {
        return $this->setParameter('descriptor_phone', $value);
    }

    public function getDescriptorAddress()
    {
        return $this->getParameter('descriptor_address');
    }

    public function setDescriptorAddress($value)
    {
        return $this->setParameter('descriptor_address', $value);
    }

    public function getDescriptorCity()
    {
        return $this->getParameter('descriptor_city');
    }

    public function setDescriptorCity($value)
    {
        return $this->setParameter('descriptor_city', $value);
    }

    public function getDescriptorState()
    {
        return $this->getParameter('descriptor_state');
    }

    public function setDescriptorState($value)
    {
        return $this->setParameter('descriptor_state', $value);
    }

    public function getDescriptorPostal()
    {
        return $this->getParameter('descriptor_postal');
    }

    public function setDescriptorPostal($value)
    {
        return $this->setParameter('descriptor_postal', $value);
    }

    public function getDescriptorCountry()
    {
        return $this->getParameter('descriptor_country');
    }

    public function setDescriptorCountry($value)
    {
        return $this->setParameter('descriptor_country', $value);
    }

    public function getDescriptorMcc()
    {
        return $this->getParameter('descriptor_mcc');
    }

    public function setDescriptorMcc($value)
    {
        return $this->setParameter('descriptor_mcc', $value);
    }

    public function getDescriptorMerchantId()
    {
        return $this->getParameter('descriptor_merchant_id');
    }

    public function setDescriptorMerchantId($value)
    {
        return $this->setParameter('descriptor_merchant_id', $value);
    }

    public function getDescriptorUrl()
    {
        return $this->getParameter('descriptor_url');
    }

    public function setDescriptorUrl($value)
    {
        return $this->setParameter('descriptor_url', $value);
    }

    public function getOrderId()
    {
        return $this->getParameter('orderid');
    }

    public function setOrderId($value)
    {
        return $this->setParameter('orderid', $value);
    }

    public function getOrderDate()
    {
        return $this->getParameter('order_date');
    }

    public function setOrderDate($value)
    {
        return $this->setParameter('order_date', $value);
    }

    public function getOrderDescription()
    {
        return $this->getParameter('orderdescription');
    }

    public function setOrderDescription($value)
    {
        return $this->setParameter('orderdescription', $value);
    }

    public function getTax()
    {
        return $this->getParameter('tax');
    }

    public function setTax($value)
    {
        return $this->setParameter('tax', $value);
    }

    public function getShipping()
    {
        return $this->getParameter('shipping');
    }

    public function setShipping($value)
    {
        return $this->setParameter('shipping', $value);
    }

    public function getPONumber()
    {
        return $this->getParameter('ponumber');
    }

    public function setPONumber($value)
    {
        return $this->setParameter('ponumber', $value);
    }

    protected function getBaseData()
    {
        $data = [];

        if (isset($this->type)) {
            $data['type'] = $this->type;
        }

        if ($this->getApiKey()) {
            $data['security_key'] = $this->getApiKey();
        } else {
            $this->validate('username', 'password');

            $data['username'] = $this->getUsername();
            $data['password'] = $this->getPassword();
        }

        return array_merge($data, array_filter([
            'customer_vault' => $this->getCustomerVault(),
            'processor_id' => $this->getProcessorId(),
            'authorization_code' => $this->getAuthorizationCode(),
            'descriptor' => $this->getDescriptor(),
            'descriptor_phone' => $this->getDescriptorPhone(),
            'descriptor_address' => $this->getDescriptorAddress(),
            'descriptor_city' => $this->getDescriptorCity(),
            'descriptor_state' => $this->getDescriptorState(),
            'descriptor_postal' => $this->getDescriptorPostal(),
            'descriptor_country' => $this->getDescriptorCountry(),
            'descriptor_mcc' => $this->getDescriptorMcc(),
            'descriptor_merchant_id' => $this->getDescriptorMerchantId(),
            'descriptor_url' => $this->getDescriptorUrl(),
        ]));
    }

    protected function getOrderData()
    {
        return array_filter([
            'orderid' => $this->getOrderId(),
            'order_date' => $this->getOrderDate(),
            'orderdescription' => $this->getOrderDescription(),
            'discount_amount' => $this->getDiscountAmount(),
            'tax' => $this->getTax(),
            'vat_tax_amount' => $this->getVatTaxAmount(),
            'vat_tax_rate' => $this->getVatTaxRate(),
            'customer_vat_registration' => $this->getCustomerVatRegistration(),
            'merchant_vat_registration' => $this->getMerchantVatRegistration(),
            'billing_method' => $this->getBillingMethod(),
            'ponumber' => $this->getPONumber(),
            'ipaddress' => $this->getClientIp(),
            'currency' => $this->getCurrency(),
        ]);
    }

    protected function getBillingData()
    {
        $data = [];

        if ($card = $this->getCard()) {
            $data += [
                'firstname' => $card->getBillingFirstName(),
                'lastname' => $card->getBillingLastName(),
                'company' => $card->getBillingCompany(),
                'address1' => $card->getBillingAddress1(),
                'address2' => $card->getBillingAddress2(),
                'city' => $card->getBillingCity(),
                'state' => $card->getBillingState(),
                'zip' => $card->getBillingPostcode(),
                'country' => $card->getBillingCountry(),
                'phone' => $card->getBillingPhone(),
                'fax' => $card->getBillingFax(),
                'email' => $card->getEmail(),
                // 'website' => $card->getWebsite(),
            ];
        }

        return $data;
    }

    protected function getShippingData()
    {
        $data = [];

        if ($card = $this->getCard()) {
            $data += array_filter([
                'shipping_firstname' => $card->getShippingFirstName(),
                'shipping_lastname' => $card->getShippingLastName(),
                'shipping_company' => $card->getShippingCompany(),
                'shipping_address1' => $card->getShippingAddress1(),
                'shipping_address2' => $card->getShippingAddress2(),
                'shipping_city' => $card->getShippingCity(),
                'shipping_state' => $card->getShippingState(),
                'shipping_zip' => $card->getShippingPostcode(),
                'shipping_country' => $card->getShippingCountry(),
                'shipping_email' => $card->getEmail(),
            ]);
        }

        return $data;
    }

    public function sendData($data)
    {
        $httpResponse = $this->httpClient->request(
            'POST',
            $this->getEndpoint(),
            ['Content-Type' => 'application/x-www-form-urlencoded'],
            http_build_query($data, '', '&')
        );

        return $this->response = new DirectPostResponse($this, $httpResponse->getBody()->getContents());
    }

    public function setEndpoint($value)
    {
        return $this->setParameter('endpoint', $value);
    }

    public function getEndpoint()
    {
        return $this->getParameter('endpoint') ?? $this->endpoint;
    }
}
