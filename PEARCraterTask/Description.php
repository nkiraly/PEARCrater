<?php

/**
 * This file contains {@link PEARCraterTask_Description}
 * 
 * 
 * @license http://www.opensource.org/licenses/bsd-license.php Simplified BSD License
 * 
 * @package phing.tasks.ext
 * 
 * @subpackage PEARCraterTask
 * 
 */
require_once __DIR__ . '/TextContainer.php';

class PEARCraterTask_Description extends PEARCraterTask_TextContainer {

  private $_indentions_to_remove = '4';
  private $_indention_type = 'space';

  public function __get($key) {
    switch ($key) {
      case 'indentions_to_remove' :
        return $this->_indentions_to_remove;

      case 'indention_type' :
        if ($this->_indention_type = 'tab') {
          return "\t";
        } else {
          return ' ';
        }
    }

    return parent::__get($key);
  }

  public function setIndentions_To_Remove($value) {
    $this->_indentions_to_remove = (int) $value;
  }

  public function setIndention_type($type) {
    $this->_indention_type = $type;
  }

}
