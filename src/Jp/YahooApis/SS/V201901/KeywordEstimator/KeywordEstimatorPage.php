<?php

namespace Jp\YahooApis\SS\V201901\KeywordEstimator;

class KeywordEstimatorPage extends \Jp\YahooApis\SS\V201901\Page
{

    /**
     * @var KeywordEstimateValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return KeywordEstimateValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param KeywordEstimateValues[] $values
     * @return \Jp\YahooApis\SS\V201901\KeywordEstimator\KeywordEstimatorPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
