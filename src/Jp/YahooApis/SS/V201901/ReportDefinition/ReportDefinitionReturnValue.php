<?php

namespace Jp\YahooApis\SS\V201901\ReportDefinition;

class ReportDefinitionReturnValue extends \Jp\YahooApis\SS\V201901\ListReturnValue
{

    /**
     * @var ReportDefinitionValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReportDefinitionValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ReportDefinitionValues[] $values
     * @return \Jp\YahooApis\SS\V201901\ReportDefinition\ReportDefinitionReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
