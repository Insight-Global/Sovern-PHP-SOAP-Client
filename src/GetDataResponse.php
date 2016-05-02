<?php

namespace Sovern;

class GetDataResponse extends BaseResponse
{

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
     * @return ArrayOfString
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ArrayOfString $Content
     * @return \Sovern\GetDataResponse
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
     * @return \Sovern\GetDataResponse
     */
    public function setContentBytes($ContentBytes)
    {
      $this->ContentBytes = $ContentBytes;
      return $this;
    }

}
