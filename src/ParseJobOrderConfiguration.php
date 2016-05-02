<?php

namespace Sovern;

class ParseJobOrderConfiguration
{

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var string $KnownType
     */
    protected $KnownType = null;

    /**
     * @var boolean $IncludeRecruitingTerms
     */
    protected $IncludeRecruitingTerms = null;

    /**
     * @var boolean $IncludeSupplementalText
     */
    protected $IncludeSupplementalText = null;

    /**
     * @var boolean $PreferShorterJobTitles
     */
    protected $PreferShorterJobTitles = null;

    /**
     * @param boolean $IncludeRecruitingTerms
     * @param boolean $IncludeSupplementalText
     * @param boolean $PreferShorterJobTitles
     */
    public function __construct($IncludeRecruitingTerms, $IncludeSupplementalText, $PreferShorterJobTitles)
    {
      $this->IncludeRecruitingTerms = $IncludeRecruitingTerms;
      $this->IncludeSupplementalText = $IncludeSupplementalText;
      $this->PreferShorterJobTitles = $PreferShorterJobTitles;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \Sovern\ParseJobOrderConfiguration
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \Sovern\ParseJobOrderConfiguration
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return string
     */
    public function getKnownType()
    {
      return $this->KnownType;
    }

    /**
     * @param string $KnownType
     * @return \Sovern\ParseJobOrderConfiguration
     */
    public function setKnownType($KnownType)
    {
      $this->KnownType = $KnownType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeRecruitingTerms()
    {
      return $this->IncludeRecruitingTerms;
    }

    /**
     * @param boolean $IncludeRecruitingTerms
     * @return \Sovern\ParseJobOrderConfiguration
     */
    public function setIncludeRecruitingTerms($IncludeRecruitingTerms)
    {
      $this->IncludeRecruitingTerms = $IncludeRecruitingTerms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeSupplementalText()
    {
      return $this->IncludeSupplementalText;
    }

    /**
     * @param boolean $IncludeSupplementalText
     * @return \Sovern\ParseJobOrderConfiguration
     */
    public function setIncludeSupplementalText($IncludeSupplementalText)
    {
      $this->IncludeSupplementalText = $IncludeSupplementalText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferShorterJobTitles()
    {
      return $this->PreferShorterJobTitles;
    }

    /**
     * @param boolean $PreferShorterJobTitles
     * @return \Sovern\ParseJobOrderConfiguration
     */
    public function setPreferShorterJobTitles($PreferShorterJobTitles)
    {
      $this->PreferShorterJobTitles = $PreferShorterJobTitles;
      return $this;
    }

}
