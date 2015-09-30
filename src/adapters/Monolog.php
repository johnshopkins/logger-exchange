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
   * @param object $cache  Instance of CacheExchange\Cache
   */
  public function __construct($logger, $cache = null)
  {
    $this->logger = $logger;
    $this->cache = $cache;
  }

  protected function log($level, $message, $context = array(), $ttl = null, $key = null)
  {
    if ($this->cache && $ttl) {

      $key = $this->makeKey($key, $message);
      $cached = $this->cache->fetch($key, false);

      if (!$cached) {

        $this->cache->store(true, $key, $ttl, false);
        $this->logger->log($level, $message, $context);

      } else {
        return false;
      }

    } else {
      $this->logger->log($level, $message, $context);
    }

    return true;

  }

  protected function makeKey($key, $message)
  {
    if ($key) return $key;

    // create a key based on the message, but can cause collisions
    return abs(crc32($message));
  }


	public function addDebug($message, $context = array(), $ttl = null, $key = null)
  {
    return $this->log(100, $message, $context, $ttl, $key);
  }


	public function addInfo($message, $context = array(), $ttl = null, $key = null)
  {
    return $this->log(200, $message, $context, $ttl, $key);
  }

  public function addNotice($message, $context = array(), $ttl = null, $key = null)
  {
    return $this->log(250, $message, $context, $ttl, $key);
  }


	public function addWarning($message, $context = array(), $ttl = null, $key = null)
  {
    return $this->log(300, $message, $context, $ttl, $key);
  }


	public function addError($message, $context = array(), $ttl = null, $key = null)
  {
    return $this->log(400, $message, $context, $ttl, $key);
  }


	public function addCritical($message, $context = array(), $ttl = null, $key = null)
  {
    return $this->log(500, $message, $context, $ttl, $key);
  }


	public function addAlert($message, $context = array(), $ttl = null, $key = null)
  {
    return $this->log(550, $message, $context, $ttl, $key);
  }


	public function addEmergency($message, $context = array(), $ttl = null, $key = null)
  {
    return $this->log(600, $message, $context, $ttl, $key);
  }
}
