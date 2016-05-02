<?php


 function autoload_6974b14f98663592172db3550fee46e1($class)
{
    $classes = array(
        'Sovern\ParsingService' => __DIR__ .'/ParsingService.php',
        'Sovern\ParseResume' => __DIR__ .'/ParseResume.php',
        'Sovern\ParseResumeRequest' => __DIR__ .'/ParseResumeRequest.php',
        'Sovern\ParseResumeResponse' => __DIR__ .'/ParseResumeResponse.php',
        'Sovern\XmlDoc' => __DIR__ .'/XmlDoc.php',
        'Sovern\GetAccountInfo' => __DIR__ .'/GetAccountInfo.php',
        'Sovern\GetAccountInfoRequest' => __DIR__ .'/GetAccountInfoRequest.php',
        'Sovern\GetAccountInfoResponse' => __DIR__ .'/GetAccountInfoResponse.php',
        'Sovern\ParseJobOrder' => __DIR__ .'/ParseJobOrder.php',
        'Sovern\ParseJobOrderRequest' => __DIR__ .'/ParseJobOrderRequest.php',
        'Sovern\ParseJobOrderConfiguration' => __DIR__ .'/ParseJobOrderConfiguration.php',
        'Sovern\ParseJobOrderResponse' => __DIR__ .'/ParseJobOrderResponse.php',
        'Sovern\SetData' => __DIR__ .'/SetData.php',
        'Sovern\SetDataRequest' => __DIR__ .'/SetDataRequest.php',
        'Sovern\BaseRequest' => __DIR__ .'/BaseRequest.php',
        'Sovern\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'Sovern\SetDataResponse' => __DIR__ .'/SetDataResponse.php',
        'Sovern\BaseResponse' => __DIR__ .'/BaseResponse.php',
        'Sovern\GetData' => __DIR__ .'/GetData.php',
        'Sovern\GetDataRequest' => __DIR__ .'/GetDataRequest.php',
        'Sovern\GetDataResponse' => __DIR__ .'/GetDataResponse.php',
        'Sovern\ListData' => __DIR__ .'/ListData.php',
        'Sovern\ListDataRequest' => __DIR__ .'/ListDataRequest.php',
        'Sovern\ListDataResponse' => __DIR__ .'/ListDataResponse.php',
        'Sovern\ArrayOfData' => __DIR__ .'/ArrayOfData.php',
        'Sovern\Data' => __DIR__ .'/Data.php',
        'Sovern\DeleteData' => __DIR__ .'/DeleteData.php',
        'Sovern\DeleteDataRequest' => __DIR__ .'/DeleteDataRequest.php',
        'Sovern\DeleteDataResponse' => __DIR__ .'/DeleteDataResponse.php',
        'Sovern\NormalizeResume' => __DIR__ .'/NormalizeResume.php',
        'Sovern\NormalizeResumeRequest' => __DIR__ .'/NormalizeResumeRequest.php',
        'Sovern\NormalizeResumeResponse' => __DIR__ .'/NormalizeResumeResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_6974b14f98663592172db3550fee46e1');

// Do nothing. The rest is just leftovers from the code generation.
{
}
