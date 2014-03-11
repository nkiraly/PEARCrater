<?php

/**
 * This file contains {@link PEARCraterTask_Frontend}
 * 
 * @license http://www.opensource.org/licenses/bsd-license.php Simplified BSD License
 * 
 * @package phing.tasks.ext
 * 
 * @subpackage PEARCraterTask
 * 
 */
/**
 * Load super class
 * @ignore
 */
require_once 'PEAR/Frontend.php';

/**
 * Serves as an interface to the PEAR packager's frontend to capture
 * any output and redirect it through the phing log object.
 */
class PEARCraterTask_Frontend extends PEAR_Frontend {

  private $_caller;

  /**
   * Handle instantiation
   * 
   * @param PEARCraterTask $caller
   */
  public function __construct(PEARCraterTask $caller) {
    $this->_caller = $caller;
  }

  /**
   * Logs any output via the caller
   * 
   * @param string $msg
   */
  public function log($msg) {
    $this->_caller->log($msg);
  }

}
