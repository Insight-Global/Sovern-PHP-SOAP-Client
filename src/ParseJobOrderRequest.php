<?php

namespace Sovern;

class ParseJobOrderRequest
{

    /**
     * @var string $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $ServiceKey
     */
    protected $ServiceKey = null;

    /**
     * @var base64Binary $FileBytes
     */
    protected $FileBytes = null;

    /**
     * @var string $FileText
     */
    protected $FileText = null;

    /**
     * @var ParseJobOrderConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var boolean $OutputXmlDoc
     */
    protected $OutputXmlDoc = null;

    /**
     * @var boolean $OutputHtml
     */
    protected $OutputHtml = null;

    /**
     * @var boolean $OutputRtf
     */
    protected $OutputRtf = null;

    /**
     * @var boolean $OutputWordXml
     */
    protected $OutputWordXml = null;

    /**
     * @var string $RevisionDate
     */
    protected $RevisionDate = null;

    /**
     * @var string $ParserVersion
     */
    protected $ParserVersion = null;

    /**
     * @var string $SkillsData
     */
    protected $SkillsData = null;

    /**
     * @var string $NormalizerData
     */
    protected $NormalizerData = null;

    
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
     * @return \Sovern\ParseJobOrderRequest
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
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setServiceKey($ServiceKey)
    {
      $this->ServiceKey = $ServiceKey;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getFileBytes()
    {
      return $this->FileBytes;
    }

    /**
     * @param base64Binary $FileBytes
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setFileBytes($FileBytes)
    {
      $this->FileBytes = $FileBytes;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileText()
    {
      return $this->FileText;
    }

    /**
     * @param string $FileText
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setFileText($FileText)
    {
      $this->FileText = $FileText;
      return $this;
    }

    /**
     * @return ParseJobOrderConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param ParseJobOrderConfiguration $Configuration
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOutputXmlDoc()
    {
      return $this->OutputXmlDoc;
    }

    /**
     * @param boolean $OutputXmlDoc
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setOutputXmlDoc($OutputXmlDoc)
    {
      $this->OutputXmlDoc = $OutputXmlDoc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOutputHtml()
    {
      return $this->OutputHtml;
    }

    /**
     * @param boolean $OutputHtml
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setOutputHtml($OutputHtml)
    {
      $this->OutputHtml = $OutputHtml;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOutputRtf()
    {
      return $this->OutputRtf;
    }

    /**
     * @param boolean $OutputRtf
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setOutputRtf($OutputRtf)
    {
      $this->OutputRtf = $OutputRtf;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOutputWordXml()
    {
      return $this->OutputWordXml;
    }

    /**
     * @param boolean $OutputWordXml
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setOutputWordXml($OutputWordXml)
    {
      $this->OutputWordXml = $OutputWordXml;
      return $this;
    }

    /**
     * @return string
     */
    public function getRevisionDate()
    {
      return $this->RevisionDate;
    }

    /**
     * @param string $RevisionDate
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setRevisionDate($RevisionDate)
    {
      $this->RevisionDate = $RevisionDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getParserVersion()
    {
      return $this->ParserVersion;
    }

    /**
     * @param string $ParserVersion
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setParserVersion($ParserVersion)
    {
      $this->ParserVersion = $ParserVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkillsData()
    {
      return $this->SkillsData;
    }

    /**
     * @param string $SkillsData
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setSkillsData($SkillsData)
    {
      $this->SkillsData = $SkillsData;
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
     * @return \Sovern\ParseJobOrderRequest
     */
    public function setNormalizerData($NormalizerData)
    {
      $this->NormalizerData = $NormalizerData;
      return $this;
    }

}
