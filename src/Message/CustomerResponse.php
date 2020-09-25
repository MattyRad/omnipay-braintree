<?php

namespace Omnipay\Braintree\Message;

/**
 * CustomerResponse
 */
class CustomerResponse extends Response
{

    public function isSuccessful()
    {
       return isset($this->data->id);
    }

    public function getCustomerData()
    {
        if (isset($this->data)) {
            return $this->data;
        }

        return null;
    }
}
