<?php

namespace Sovern;

class GetData
{

    /**
     * @var GetDataRequest $request
     */
    protected $request = null;

    /**
     * @param GetDataRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetDataRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetDataRequest $request
     * @return \Sovern\GetData
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
