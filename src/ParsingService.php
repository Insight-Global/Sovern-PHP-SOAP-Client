<?php

namespace Sovern;

class ParsingService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ParseResume' => 'Sovern\\ParseResume',
      'ParseResumeRequest' => 'Sovern\\ParseResumeRequest',
      'ParseResumeResponse' => 'Sovern\\ParseResumeResponse',
      'XmlDoc' => 'Sovern\\XmlDoc',
      'GetAccountInfo' => 'Sovern\\GetAccountInfo',
      'GetAccountInfoRequest' => 'Sovern\\GetAccountInfoRequest',
      'GetAccountInfoResponse' => 'Sovern\\GetAccountInfoResponse',
      'ParseJobOrder' => 'Sovern\\ParseJobOrder',
      'ParseJobOrderRequest' => 'Sovern\\ParseJobOrderRequest',
      'ParseJobOrderConfiguration' => 'Sovern\\ParseJobOrderConfiguration',
      'ParseJobOrderResponse' => 'Sovern\\ParseJobOrderResponse',
      'SetData' => 'Sovern\\SetData',
      'SetDataRequest' => 'Sovern\\SetDataRequest',
      'BaseRequest' => 'Sovern\\BaseRequest',
      'ArrayOfString' => 'Sovern\\ArrayOfString',
      'SetDataResponse' => 'Sovern\\SetDataResponse',
      'BaseResponse' => 'Sovern\\BaseResponse',
      'GetData' => 'Sovern\\GetData',
      'GetDataRequest' => 'Sovern\\GetDataRequest',
      'GetDataResponse' => 'Sovern\\GetDataResponse',
      'ListData' => 'Sovern\\ListData',
      'ListDataRequest' => 'Sovern\\ListDataRequest',
      'ListDataResponse' => 'Sovern\\ListDataResponse',
      'ArrayOfData' => 'Sovern\\ArrayOfData',
      'Data' => 'Sovern\\Data',
      'DeleteData' => 'Sovern\\DeleteData',
      'DeleteDataRequest' => 'Sovern\\DeleteDataRequest',
      'DeleteDataResponse' => 'Sovern\\DeleteDataResponse',
      'NormalizeResume' => 'Sovern\\NormalizeResume',
      'NormalizeResumeRequest' => 'Sovern\\NormalizeResumeRequest',
      'NormalizeResumeResponse' => 'Sovern\\NormalizeResumeResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://services.resumeparsing.com/ParsingService.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Parse a Resume/CV and returns the results in HR-XML format.
     *
     * @param ParseResume $parameters
     * @return ParseResumeResponse
     */
    public function ParseResume(ParseResume $parameters)
    {
      return $this->__soapCall('ParseResume', array($parameters));
    }

    /**
     * Gets the Member Account information.
     *
     * @param GetAccountInfo $parameters
     * @return GetAccountInfoResponse
     */
    public function GetAccountInfo(GetAccountInfo $parameters)
    {
      return $this->__soapCall('GetAccountInfo', array($parameters));
    }

    /**
     * Parses a job order and returns the results in Sovren-defined Job Order XML format.
     *
     * @param ParseJobOrder $parameters
     * @return ParseJobOrderResponse
     */
    public function ParseJobOrder(ParseJobOrder $parameters)
    {
      return $this->__soapCall('ParseJobOrder', array($parameters));
    }

    /**
     * Sets the custom data to optionally be used during parsing.
     *
     * @param SetData $parameters
     * @return SetDataResponse
     */
    public function SetData(SetData $parameters)
    {
      return $this->__soapCall('SetData', array($parameters));
    }

    /**
     * Gets the specified custom data content.
     *
     * @param GetData $parameters
     * @return GetDataResponse
     */
    public function GetData(GetData $parameters)
    {
      return $this->__soapCall('GetData', array($parameters));
    }

    /**
     * Lists the custom data that has been uploaded via the SetData method.
     *
     * @param ListData $parameters
     * @return ListDataResponse
     */
    public function ListData(ListData $parameters)
    {
      return $this->__soapCall('ListData', array($parameters));
    }

    /**
     * Deletes the specified custom data.
     *
     * @param DeleteData $parameters
     * @return DeleteDataResponse
     */
    public function DeleteData(DeleteData $parameters)
    {
      return $this->__soapCall('DeleteData', array($parameters));
    }

    /**
     * Normalizes the resume values within the supplied XML document.
     *
     * @param NormalizeResume $parameters
     * @return NormalizeResumeResponse
     */
    public function NormalizeResume(NormalizeResume $parameters)
    {
      return $this->__soapCall('NormalizeResume', array($parameters));
    }

}
