<?php

namespace LoggerExchange\adapters;

class Monolog implements \LoggerExchange\interfaces\Logger
{
  /**
   * Monolog object
   * @var object
   */
  protected $logger;

  /**
   * __construct
   * @param object $logger A fully configured Monolog object
   */
  public function __construct($logger)
  {
    $this->logger = $logger;
  }

  protected function log($level, $message, $context = array())
  {
    $this->logger->log($level, $message, $context);
  }


	public function addDebug($message, $context = array())
  {
    $this->log(100, $message, $context);
  }


	public function addInfo($message, $context = array())
  {
    $this->log(200, $message, $context);
  }

  public function addNotice($message, $context = array())
  {
    $this->log(250, $message, $context);
  }


	public function addWarning($message, $context = array())
  {
    $this->log(300, $message, $context);
  }


	public function addError($message, $context = array())
  {
    $this->log(400, $message, $context);
  }


	public function addCritical($message, $context = array())
  {
    $this->log(500, $message, $context);
  }


	public function addAlert($message, $context = array())
  {
    $this->log(550, $message, $context);
  }


	public function addEmergency($message, $context = array())
  {
    $this->log(600, $message, $context);
  }
}
