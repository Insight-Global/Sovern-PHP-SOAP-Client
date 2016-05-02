<?php

namespace Sovern;

class NormalizeResumeResponse extends BaseResponse
{

    /**
     * @var string $Xml
     */
    protected $Xml = null;

    /**
     * @var int $CreditsRemaining
     */
    protected $CreditsRemaining = null;

    /**
     * @var string $NormalizerVersion
     */
    protected $NormalizerVersion = null;

    /**
     * @param int $CreditsRemaining
     */
    public function __construct($CreditsRemaining)
    {
      parent::__construct();
      $this->CreditsRemaining = $CreditsRemaining;
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
     * @return \Sovern\NormalizeResumeResponse
     */
    public function setXml($Xml)
    {
      $this->Xml = $Xml;
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
     * @return \Sovern\NormalizeResumeResponse
     */
    public function setCreditsRemaining($CreditsRemaining)
    {
      $this->CreditsRemaining = $CreditsRemaining;
      return $this;
    }

    /**
     * @return string
     */
    public function getNormalizerVersion()
    {
      return $this->NormalizerVersion;
    }

    /**
     * @param string $NormalizerVersion
     * @return \Sovern\NormalizeResumeResponse
     */
    public function setNormalizerVersion($NormalizerVersion)
    {
      $this->NormalizerVersion = $NormalizerVersion;
      return $this;
    }

}
