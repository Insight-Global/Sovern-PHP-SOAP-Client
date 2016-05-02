<?php

namespace Sovern;

class GetDataRequest extends BaseRequest
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Culture
     */
    protected $Culture = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Sovern\GetDataRequest
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCulture()
    {
      return $this->Culture;
    }

    /**
     * @param string $Culture
     * @return \Sovern\GetDataRequest
     */
    public function setCulture($Culture)
    {
      $this->Culture = $Culture;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Sovern\GetDataRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
