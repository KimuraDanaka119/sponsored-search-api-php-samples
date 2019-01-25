<?php

namespace Jp\YahooApis\SS\V201901\CampaignFeed;

class CampaignFeedService extends \Jp\YahooApis\SS\AdApiSample\Util\Service
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
      'CampaignFeed' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\CampaignFeed',
      'CampaignFeedList' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\CampaignFeedList',
      'CampaignFeedSelector' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\CampaignFeedSelector',
      'CampaignFeedPage' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\CampaignFeedPage',
      'CampaignFeedValues' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\CampaignFeedValues',
      'CampaignFeedOperation' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\CampaignFeedOperation',
      'CampaignFeedReturnValue' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\CampaignFeedReturnValue',
      'Operation' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\Operation',
      'get' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\get',
      'getResponse' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\getResponse',
      'mutate' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\SS\\V201901\\CampaignFeed\\mutateResponse',
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
        $wsdl = 'https://ss.yahooapis.jp/services/V201901/CampaignFeedService?wsdl';
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
     * @param mutate $parameters
     * @return mutateResponse
     */
    public function mutate(mutate $parameters)
    {
      return parent::invoke('mutate', $parameters);
    }

}
