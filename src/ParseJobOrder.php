<?php

namespace Sovern;

class ParseJobOrder
{

    /**
     * @var ParseJobOrderRequest $request
     */
    protected $request = null;

    /**
     * @param ParseJobOrderRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ParseJobOrderRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ParseJobOrderRequest $request
     * @return \Sovern\ParseJobOrder
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
