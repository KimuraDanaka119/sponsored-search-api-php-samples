<?php

namespace Jp\YahooApis\SS\V201901\AdGroupFeed;

class AdGroupFeedReturnValue extends \Jp\YahooApis\SS\V201901\ListReturnValue
{

    /**
     * @var AdGroupFeedValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupFeedValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AdGroupFeedValues[] $values
     * @return \Jp\YahooApis\SS\V201901\AdGroupFeed\AdGroupFeedReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
