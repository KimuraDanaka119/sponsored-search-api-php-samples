<?php

namespace Jp\YahooApis\SS\V201901\Dictionary;

class DisapprovalReasonValues extends \Jp\YahooApis\SS\V201901\ReturnValue
{

    /**
     * @var DisapprovalReason $disapprovalReason
     */
    protected $disapprovalReason = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DisapprovalReason
     */
    public function getDisapprovalReason()
    {
      return $this->disapprovalReason;
    }

    /**
     * @param DisapprovalReason $disapprovalReason
     * @return \Jp\YahooApis\SS\V201901\Dictionary\DisapprovalReasonValues
     */
    public function setDisapprovalReason($disapprovalReason)
    {
      $this->disapprovalReason = $disapprovalReason;
      return $this;
    }

}
