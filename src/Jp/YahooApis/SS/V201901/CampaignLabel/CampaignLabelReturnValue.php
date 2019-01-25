<?php

namespace Jp\YahooApis\SS\V201901\CampaignLabel;

class CampaignLabelReturnValue extends \Jp\YahooApis\SS\V201901\ListReturnValue
{

    /**
     * @var CampaignLabelValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CampaignLabelValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param CampaignLabelValues[] $values
     * @return \Jp\YahooApis\SS\V201901\CampaignLabel\CampaignLabelReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
