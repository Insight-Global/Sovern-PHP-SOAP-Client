<?php

namespace Sovern;

class SetDataRequest extends BaseRequest
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

    /**
     * @var ArrayOfString $Content
     */
    protected $Content = null;

    /**
     * @var base64Binary $ContentBytes
     */
    protected $ContentBytes = null;

    
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
     * @return \Sovern\SetDataRequest
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
     * @return \Sovern\SetDataRequest
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
     * @return \Sovern\SetDataRequest
     */
    public function setCulture($Culture)
    {
      $this->Culture = $Culture;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ArrayOfString $Content
     * @return \Sovern\SetDataRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getContentBytes()
    {
      return $this->ContentBytes;
    }

    /**
     * @param base64Binary $ContentBytes
     * @return \Sovern\SetDataRequest
     */
    public function setContentBytes($ContentBytes)
    {
      $this->ContentBytes = $ContentBytes;
      return $this;
    }

}
