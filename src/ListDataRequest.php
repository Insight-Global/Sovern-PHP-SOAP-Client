<?php

namespace Sovern;

class ListDataRequest extends BaseRequest
{

    /**
     * @var string $Type
     */
    protected $Type = null;

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
     * @return \Sovern\ListDataRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \Sovern\ListDataRequest
     */
    public function setCulture($Culture)
    {
      $this->Culture = $Culture;
      return $this;
    }

}
