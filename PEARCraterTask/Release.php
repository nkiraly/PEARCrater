<?php

/**
 * This file contains {@link PEARCraterTask_Release}
 * 
 * 
 * @license http://www.opensource.org/licenses/bsd-license.php Simplified BSD License
 * 
 * @package phing.tasks.ext
 * 
 * @subpackage PEARCraterTask
 * 
 */
require_once __DIR__ . '/Release/Install.php';

/**
 * Object to handle <release> elements
 *
 * @see PEARCraterTask::createRelease()
 */
class PEARCraterTask_Release {

  private $_install = array();

  /**
   * Handle instantiation
   * 
   * @ignore
   */
  public function __construct() {
    
  }

  /**
   * Creates a {@link PEARCraterTask_Release_Install} object to
   * handle <install> elements
   *
   * @return PEARCraterTask_Release_Install
   */
  public function createInstall() {
    $install = new PEARCraterTask_Release_Install();
    $this->_install[] = $install;
    return $install;
  }

  /**
   * Magic method to expose following properties as read-only:
   * 
   * install: Contains an array of <install> elements
   *
   * @return mixed
   */
  public function __get($key) {
    switch ($key) {
      case 'install' :
        $real_key = "_{$key}";
        return $this->$real_key;
    }
  }

}
