<?php

namespace Sovern;

class GetAccountInfoResponse
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

    /**
     * @var int $CreditsUsed
     */
    protected $CreditsUsed = null;

    /**
     * @var int $CreditsRemaining
     */
    protected $CreditsRemaining = null;

    /**
     * @var string $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @param int $CreditsUsed
     * @param int $CreditsRemaining
     */
    public function __construct($CreditsUsed, $CreditsRemaining)
    {
      $this->CreditsUsed = $CreditsUsed;
      $this->CreditsRemaining = $CreditsRemaining;
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
     * @return \Sovern\GetAccountInfoResponse
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
     * @return \Sovern\GetAccountInfoResponse
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
     * @return \Sovern\GetAccountInfoResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreditsUsed()
    {
      return $this->CreditsUsed;
    }

    /**
     * @param int $CreditsUsed
     * @return \Sovern\GetAccountInfoResponse
     */
    public function setCreditsUsed($CreditsUsed)
    {
      $this->CreditsUsed = $CreditsUsed;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreditsRemaining()
    {
      return $this->CreditsRemaining;
    }

    /**
     * @param int $CreditsRemaining
     * @return \Sovern\GetAccountInfoResponse
     */
    public function setCreditsRemaining($CreditsRemaining)
    {
      $this->CreditsRemaining = $CreditsRemaining;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param string $ExpirationDate
     * @return \Sovern\GetAccountInfoResponse
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

}
