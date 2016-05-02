<?php

namespace Sovern;

class GetAccountInfo
{

    /**
     * @var GetAccountInfoRequest $request
     */
    protected $request = null;

    /**
     * @param GetAccountInfoRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetAccountInfoRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetAccountInfoRequest $request
     * @return \Sovern\GetAccountInfo
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
