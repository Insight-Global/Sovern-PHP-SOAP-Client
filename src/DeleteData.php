<?php

namespace Sovern;

class DeleteData
{

    /**
     * @var DeleteDataRequest $request
     */
    protected $request = null;

    /**
     * @param DeleteDataRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DeleteDataRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DeleteDataRequest $request
     * @return \Sovern\DeleteData
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
