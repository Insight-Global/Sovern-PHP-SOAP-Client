<?php

namespace Sovern;

class ParseResumeResponse
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
     * @var string $FileType
     */
    protected $FileType = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $TextCode
     */
    protected $TextCode = null;

    /**
     * @var string $Xml
     */
    protected $Xml = null;

    /**
     * @var XmlDoc $XmlDoc
     */
    protected $XmlDoc = null;

    /**
     * @var string $Html
     */
    protected $Html = null;

    /**
     * @var string $HtmlCode
     */
    protected $HtmlCode = null;

    /**
     * @var string $Rtf
     */
    protected $Rtf = null;

    /**
     * @var string $RtfCode
     */
    protected $RtfCode = null;

    /**
     * @var string $WordXml
     */
    protected $WordXml = null;

    /**
     * @var string $WordXmlCode
     */
    protected $WordXmlCode = null;

    /**
     * @var int $CreditsRemaining
     */
    protected $CreditsRemaining = null;

    /**
     * @var string $ParserVersion
     */
    protected $ParserVersion = null;

    /**
     * @var string $FileExtension
     */
    protected $FileExtension = null;

    /**
     * @param int $CreditsRemaining
     */
    public function __construct($CreditsRemaining)
    {
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
     * @return \Sovern\ParseResumeResponse
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
     * @return \Sovern\ParseResumeResponse
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
     * @return \Sovern\ParseResumeResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileType()
    {
      return $this->FileType;
    }

    /**
     * @param string $FileType
     * @return \Sovern\ParseResumeResponse
     */
    public function setFileType($FileType)
    {
      $this->FileType = $FileType;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \Sovern\ParseResumeResponse
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextCode()
    {
      return $this->TextCode;
    }

    /**
     * @param string $TextCode
     * @return \Sovern\ParseResumeResponse
     */
    public function setTextCode($TextCode)
    {
      $this->TextCode = $TextCode;
      return $this;
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
     * @return \Sovern\ParseResumeResponse
     */
    public function setXml($Xml)
    {
      $this->Xml = $Xml;
      return $this;
    }

    /**
     * @return XmlDoc
     */
    public function getXmlDoc()
    {
      return $this->XmlDoc;
    }

    /**
     * @param XmlDoc $XmlDoc
     * @return \Sovern\ParseResumeResponse
     */
    public function setXmlDoc($XmlDoc)
    {
      $this->XmlDoc = $XmlDoc;
      return $this;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
      return $this->Html;
    }

    /**
     * @param string $Html
     * @return \Sovern\ParseResumeResponse
     */
    public function setHtml($Html)
    {
      $this->Html = $Html;
      return $this;
    }

    /**
     * @return string
     */
    public function getHtmlCode()
    {
      return $this->HtmlCode;
    }

    /**
     * @param string $HtmlCode
     * @return \Sovern\ParseResumeResponse
     */
    public function setHtmlCode($HtmlCode)
    {
      $this->HtmlCode = $HtmlCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRtf()
    {
      return $this->Rtf;
    }

    /**
     * @param string $Rtf
     * @return \Sovern\ParseResumeResponse
     */
    public function setRtf($Rtf)
    {
      $this->Rtf = $Rtf;
      return $this;
    }

    /**
     * @return string
     */
    public function getRtfCode()
    {
      return $this->RtfCode;
    }

    /**
     * @param string $RtfCode
     * @return \Sovern\ParseResumeResponse
     */
    public function setRtfCode($RtfCode)
    {
      $this->RtfCode = $RtfCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getWordXml()
    {
      return $this->WordXml;
    }

    /**
     * @param string $WordXml
     * @return \Sovern\ParseResumeResponse
     */
    public function setWordXml($WordXml)
    {
      $this->WordXml = $WordXml;
      return $this;
    }

    /**
     * @return string
     */
    public function getWordXmlCode()
    {
      return $this->WordXmlCode;
    }

    /**
     * @param string $WordXmlCode
     * @return \Sovern\ParseResumeResponse
     */
    public function setWordXmlCode($WordXmlCode)
    {
      $this->WordXmlCode = $WordXmlCode;
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
     * @return \Sovern\ParseResumeResponse
     */
    public function setCreditsRemaining($CreditsRemaining)
    {
      $this->CreditsRemaining = $CreditsRemaining;
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
     * @return \Sovern\ParseResumeResponse
     */
    public function setParserVersion($ParserVersion)
    {
      $this->ParserVersion = $ParserVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileExtension()
    {
      return $this->FileExtension;
    }

    /**
     * @param string $FileExtension
     * @return \Sovern\ParseResumeResponse
     */
    public function setFileExtension($FileExtension)
    {
      $this->FileExtension = $FileExtension;
      return $this;
    }

}
