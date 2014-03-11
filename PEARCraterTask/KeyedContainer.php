<?php

/**
 * This file contains {@link PEARCraterTask_KeyedContainer}
 * 
 * 
 * @license http://www.opensource.org/licenses/bsd-license.php Simplified BSD License
 * 
 * @package phing.tasks.ext
 * 
 * @subpackage PEARCraterTask
 * 
 */

/**
 * Holds data that will be tranformed into an associative array
 *
 * @see PEARCraterTask, PEARCraterTask::createInstallExceptions(), PEARCraterTask::createDirRoles(),
 */
class PEARCraterTask_KeyedContainer {

  private $_key = '';
  private $_value = '';

  /**
   * Handles the key attribute
   *
   * @param string $key
   */
  public function setKey($key) {
    $this->_key = $key;
  }

  /**
   * Handles the value attribute
   *
   * @param string $value
   */
  public function setValue($value) {
    $this->_value = $value;
  }

  /**
   * Allows this element to wrap plain text instead of specifying a value attribute
   *
   * @param string $value
   *
   * @see setValue()
   */
  public function addText($value) {
    $this->setValue($value);
  }

  /**
   * Allows the key and value properties to be accessed in a read-only fashion
   *
   * @param string $key Either key or value
   *
   * @return string
   */
  public function __get($key) {
    switch ($key) {
      case 'key' :
        return $this->_key;

      case 'value' :
        return $this->_value;
    }
  }

}
