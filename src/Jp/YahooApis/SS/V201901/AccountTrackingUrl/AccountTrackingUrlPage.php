<?php

namespace Jp\YahooApis\SS\V201901\AccountTrackingUrl;

class AccountTrackingUrlPage extends \Jp\YahooApis\SS\V201901\Page
{

    /**
     * @var AccountTrackingUrlValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AccountTrackingUrlValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AccountTrackingUrlValues[] $values
     * @return \Jp\YahooApis\SS\V201901\AccountTrackingUrl\AccountTrackingUrlPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
