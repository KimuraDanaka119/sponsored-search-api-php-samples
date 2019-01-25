<?php

namespace Jp\YahooApis\SS\V201901\AdGroupCriterionLabel;

class AdGroupCriterionLabelOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var AdGroupCriterionLabel[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param AdGroupCriterionLabel[] $operand
     */
    public function __construct($operator, $accountId, array $operand)
    {
      parent::__construct($operator);
      $this->accountId = $accountId;
      $this->operand = $operand;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\SS\V201901\AdGroupCriterionLabel\AdGroupCriterionLabelOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return AdGroupCriterionLabel[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param AdGroupCriterionLabel[] $operand
     * @return \Jp\YahooApis\SS\V201901\AdGroupCriterionLabel\AdGroupCriterionLabelOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
