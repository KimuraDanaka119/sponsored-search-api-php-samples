<?php

namespace Jp\YahooApis\SS\V201901\CampaignFeed;

class CampaignFeedReturnValue extends \Jp\YahooApis\SS\V201901\ListReturnValue
{

    /**
     * @var CampaignFeedValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CampaignFeedValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param CampaignFeedValues[] $values
     * @return \Jp\YahooApis\SS\V201901\CampaignFeed\CampaignFeedReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
