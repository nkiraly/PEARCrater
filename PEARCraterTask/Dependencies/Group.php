<?php

/**
 * This file contains {@link PEARCraterTask_Dependencies_Group}
 * 
 * 
 * @license http://www.opensource.org/licenses/bsd-license.php Simplified BSD License
 * 
 * @package phing.tasks.ext
 * 
 * @subpackage PEARCraterTask
 * 
 */
require_once __DIR__ . '/Package.php';

class PEARCraterTask_Dependencies_Group {

  private $_name = '';
  private $_hint = '';
  private $_packages = array();

  public function __construct() {
    
  }

  public function __get($key) {
    switch ($key) {
      case 'name' :
        return $this->_name;

      case 'hint' :
        return $this->_hint;

      case 'packages' :
        return $this->_packages;
    }
  }

  public function createPackage() {
    $package = new PEARCraterTask_Dependencies_Package();
    $this->_packages[] = $package;
    return $package;
  }

  public function setName($name) {
    $this->_name = $name;
  }

  public function setHint($hint) {
    $this->_hint = $hint;
  }

}
