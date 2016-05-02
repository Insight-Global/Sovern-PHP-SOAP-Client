<?php

namespace Sovern;

class ParseResume
{

    /**
     * @var ParseResumeRequest $request
     */
    protected $request = null;

    /**
     * @param ParseResumeRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ParseResumeRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ParseResumeRequest $request
     * @return \Sovern\ParseResume
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
