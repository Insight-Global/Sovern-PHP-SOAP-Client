<?php

namespace Sovern;

class ListDataResponse extends BaseResponse
{

    /**
     * @var ArrayOfData $DataList
     */
    protected $DataList = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfData
     */
    public function getDataList()
    {
      return $this->DataList;
    }

    /**
     * @param ArrayOfData $DataList
     * @return \Sovern\ListDataResponse
     */
    public function setDataList($DataList)
    {
      $this->DataList = $DataList;
      return $this;
    }

}
