<?php

namespace Jp\YahooApis\SS\V201901\FeedFolder;

class getResponse
{

    /**
     * @var FeedFolderPage $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\SS\V201901\Error $error
     */
    protected $error = null;

    /**
     * @param FeedFolderPage $rval
     * @param \Jp\YahooApis\SS\V201901\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return FeedFolderPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param FeedFolderPage $rval
     * @return \Jp\YahooApis\SS\V201901\FeedFolder\getResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\SS\V201901\Error
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param \Jp\YahooApis\SS\V201901\Error $error
     * @return \Jp\YahooApis\SS\V201901\FeedFolder\getResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
