<?php

namespace Sovern;

class NormalizeResumeRequest extends BaseRequest
{

    /**
     * @var string $Xml
     */
    protected $Xml = null;

    /**
     * @var string $NormalizerData
     */
    protected $NormalizerData = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getXml()
    {
      return $this->Xml;
    }

    /**
     * @param string $Xml
     * @return \Sovern\NormalizeResumeRequest
     */
    public function setXml($Xml)
    {
      $this->Xml = $Xml;
      return $this;
    }

    /**
     * @return string
     */
    public function getNormalizerData()
    {
      return $this->NormalizerData;
    }

    /**
     * @param string $NormalizerData
     * @return \Sovern\NormalizeResumeRequest
     */
    public function setNormalizerData($NormalizerData)
    {
      $this->NormalizerData = $NormalizerData;
      return $this;
    }

}
