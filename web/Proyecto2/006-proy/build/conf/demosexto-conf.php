<?php
// This file generated by Propel 1.7.1 convert-conf target
// from XML runtime conf file /home/jesus/web/vendor/bin/demosexto/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'demosexto' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=bdpropel',
        'user' => 'sextosemestre',
        'password' => 'emestresexto',
      ),
    ),
    'default' => 'demosexto',
  ),
  'generator_version' => '1.7.1',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-demosexto-conf.php');
return $conf;