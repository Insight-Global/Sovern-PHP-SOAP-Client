<?php

namespace Sovern;

class NormalizeResume
{

    /**
     * @var NormalizeResumeRequest $request
     */
    protected $request = null;

    /**
     * @param NormalizeResumeRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return NormalizeResumeRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param NormalizeResumeRequest $request
     * @return \Sovern\NormalizeResume
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
