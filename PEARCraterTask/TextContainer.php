<?php

/**
 * This file contains {@link PEARCraterTask_TextContainer}
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
 * This holds simple string data that is present as the nodeValue of any element
 *
 * @see PEARCraterTask
 */
class PEARCraterTask_TextContainer {

  private $_value = '';

  /**
   * Handles the nodeValue portion of any element
   *
   * @param string $value
   */
  public function addText($value) {
    $this->_value = $value;
  }

  /**
   * Returns the value this object represents
   *
   * @return string
   */
  public function __toString() {
    return $this->_value;
  }

}
