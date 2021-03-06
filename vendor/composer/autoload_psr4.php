<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Exception\\' => array($baseDir . '/Exceptions'),
    'Config\\' => array($baseDir . '/config'),
    'ConfigDataProvider\\Factory\\' => array($baseDir . '/DataProvider/Factory'),
    'ConfigDataProvider\\ConfigFileDataProvider\\' => array($baseDir . '/dataProvider/fileDataProvider'),
    'ConfigDataProvider\\' => array($baseDir . '/dataProvider'),
    'ConfigContainerDumper\\' => array($baseDir . '/ConfigContainerDumper'),
);
