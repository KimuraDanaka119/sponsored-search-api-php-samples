<?php

namespace Jp\YahooApis\SS\V201901\ReportDefinition;

class ReportDefinitionFieldValue extends \Jp\YahooApis\SS\V201901\ReturnValue
{

    /**
     * @var ReportFieldAttribute[] $fields
     */
    protected $fields = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReportFieldAttribute[]
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param ReportFieldAttribute[] $fields
     * @return \Jp\YahooApis\SS\V201901\ReportDefinition\ReportDefinitionFieldValue
     */
    public function setFields(array $fields = null)
    {
      $this->fields = $fields;
      return $this;
    }

}
