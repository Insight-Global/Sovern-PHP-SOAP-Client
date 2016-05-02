<?php

namespace Sovern;

class SetData
{

    /**
     * @var SetDataRequest $request
     */
    protected $request = null;

    /**
     * @param SetDataRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return SetDataRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SetDataRequest $request
     * @return \Sovern\SetData
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
