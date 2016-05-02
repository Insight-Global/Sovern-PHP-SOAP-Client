<?php

namespace Sovern;

class DeleteDataRequest extends BaseRequest
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Culture
     */
    protected $Culture = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Sovern\DeleteDataRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
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
     * @return \Sovern\DeleteDataRequest
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
     * @return \Sovern\DeleteDataRequest
     */
    public function setCulture($Culture)
    {
      $this->Culture = $Culture;
      return $this;
    }

}
