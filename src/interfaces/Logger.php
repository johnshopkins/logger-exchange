<?php

namespace LoggerExchange\interfaces;

interface Logger
{
	/**
	 * Fully configured logger object
	 * @param object $logger
	 */
	public function __construct($logger);

	/**
   * Adds a debug log record.
   * 100 Detailed debug information.
   *
   * @param  string  $message The log message
   * @param  array   $context The log context
   * @return Boolean Whether the record has been processed
   */
	public function addDebug($message, $context = array());

	/**
   * Adds an info log record.
   * 200 Interesting events. Examples: User logs in, SQL logs.
   *
   * @param  string  $message The log message
   * @param  array   $context The log context
   * @return Boolean Whether the record has been processed
   */
	public function addInfo($message, $context = array());

	/**
   * Adds a notice log record.
   * 250 Normal but significant events.
   *
   * @param  string  $message The log message
   * @param  array   $context The log context
   * @return Boolean Whether the record has been processed
   */
	public function addNotice($message, $context = array());

	/**
   * Adds a warning log record.
   * 300 Exceptional occurrences that are not errors.
   * Examples: Use of deprecated APIs, poor use of an API,
   * undesirable things that are not necessarily wrong.
   *
   * @param  string  $message The log message
   * @param  array   $context The log context
   * @return Boolean Whether the record has been processed
   */
	public function addWarning($message, $context = array());

	/**
   * Adds an error log record.
   * 400 Runtime errors that do not require immediate action
   * but should typically be logged and monitored.
   *
   * @param  string  $message The log message
   * @param  array   $context The log context
   * @return Boolean Whether the record has been processed
   */
	public function addError($message, $context = array());

	/**
   * Adds a critical log record.
   * 500 Critical conditions. Example: Application component
   * unavailable, unexpected exception.
   *
   * @param  string  $message The log message
   * @param  array   $context The log context
   * @return Boolean Whether the record has been processed
   */
	public function addCritical($message, $context = array());

	/**
   * Adds an alert log record.
   * 550 Action must be taken immediately. Example: Entire
   * website down, database unavailable, etc. This should
   * trigger the SMS alerts and wake you up.
   *
   * @param  string  $message The log message
   * @param  array   $context The log context
   * @return Boolean Whether the record has been processed
   */
	public function addAlert($message, $context = array());

	/**
   * Adds an emergency log record.
   * 600 Emergency: system is unusable.
   *
   * @param  string  $message The log message
   * @param  array   $context The log context
   * @return Boolean Whether the record has been processed
   */
	public function addEmergency($message, $context = array());

}
