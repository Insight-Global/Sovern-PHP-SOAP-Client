<?php

namespace Sovern;

class BaseResponse
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $SubCode
     */
    protected $SubCode = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Sovern\BaseResponse
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubCode()
    {
      return $this->SubCode;
    }

    /**
     * @param string $SubCode
     * @return \Sovern\BaseResponse
     */
    public function setSubCode($SubCode)
    {
      $this->SubCode = $SubCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Sovern\BaseResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
