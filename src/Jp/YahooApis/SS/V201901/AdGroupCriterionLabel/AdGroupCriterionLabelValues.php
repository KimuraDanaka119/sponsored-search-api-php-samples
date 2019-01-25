<?php

namespace Jp\YahooApis\SS\V201901\AdGroupCriterionLabel;

class AdGroupCriterionLabelValues extends \Jp\YahooApis\SS\V201901\ReturnValue
{

    /**
     * @var AdGroupCriterionLabel $adGroupCriterionLabel
     */
    protected $adGroupCriterionLabel = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupCriterionLabel
     */
    public function getAdGroupCriterionLabel()
    {
      return $this->adGroupCriterionLabel;
    }

    /**
     * @param AdGroupCriterionLabel $adGroupCriterionLabel
     * @return \Jp\YahooApis\SS\V201901\AdGroupCriterionLabel\AdGroupCriterionLabelValues
     */
    public function setAdGroupCriterionLabel($adGroupCriterionLabel)
    {
      $this->adGroupCriterionLabel = $adGroupCriterionLabel;
      return $this;
    }

}
