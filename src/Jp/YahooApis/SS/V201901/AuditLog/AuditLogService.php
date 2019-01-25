<?php

namespace Jp\YahooApis\SS\V201901\AuditLog;

class AuditLogService extends \Jp\YahooApis\SS\AdApiSample\Util\Service
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SoapHeader' => 'Jp\\YahooApis\\SS\\V201901\\SoapHeader',
      'SoapResponseHeader' => 'Jp\\YahooApis\\SS\\V201901\\SoapResponseHeader',
      'Paging' => 'Jp\\YahooApis\\SS\\V201901\\Paging',
      'Error' => 'Jp\\YahooApis\\SS\\V201901\\Error',
      'ErrorDetail' => 'Jp\\YahooApis\\SS\\V201901\\ErrorDetail',
      'Page' => 'Jp\\YahooApis\\SS\\V201901\\Page',
      'ReturnValue' => 'Jp\\YahooApis\\SS\\V201901\\ReturnValue',
      'ListReturnValue' => 'Jp\\YahooApis\\SS\\V201901\\ListReturnValue',
      'AuditLogPage' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\AuditLogPage',
      'AuditLogReturnValue' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\AuditLogReturnValue',
      'AuditLogValues' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\AuditLogValues',
      'AuditLogJob' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\AuditLogJob',
      'EventSelector' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\EventSelector',
      'DateRange' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\DateRange',
      'AuditLogSelector' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\AuditLogSelector',
      'AuditLogOperation' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\AuditLogOperation',
      'get' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\get',
      'getResponse' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\getResponse',
      'addJob' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\addJob',
      'addJobResponse' => 'Jp\\YahooApis\\SS\\V201901\\AuditLog\\addJobResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $endpoint Service Endpont URL
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($wsdl = null, $endpoint = null, array $options = array())
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
        $wsdl = 'https://ss.yahooapis.jp/services/V201901/AuditLogService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param get $parameters
     * @return getResponse
     */
    public function get(get $parameters)
    {
      return parent::invoke('get', $parameters);
    }

    /**
     * @param addJob $parameters
     * @return addJobResponse
     */
    public function addJob(addJob $parameters)
    {
      return parent::invoke('addJob', $parameters);
    }

}
