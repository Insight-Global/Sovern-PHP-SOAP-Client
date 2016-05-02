<?php

namespace Sovern;

class ListData
{

    /**
     * @var ListDataRequest $request
     */
    protected $request = null;

    /**
     * @param ListDataRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ListDataRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ListDataRequest $request
     * @return \Sovern\ListData
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
