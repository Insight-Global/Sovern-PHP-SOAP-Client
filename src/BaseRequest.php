<?php

namespace Sovern;

class BaseRequest
{

    /**
     * @var string $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $ServiceKey
     */
    protected $ServiceKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param string $AccountId
     * @return \Sovern\BaseRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceKey()
    {
      return $this->ServiceKey;
    }

    /**
     * @param string $ServiceKey
     * @return \Sovern\BaseRequest
     */
    public function setServiceKey($ServiceKey)
    {
      $this->ServiceKey = $ServiceKey;
      return $this;
    }

}
