<?php

/**
 * This file contains {@link PEARCraterTask_Dependencies}
 * 
 * 
 * @license http://www.opensource.org/licenses/bsd-license.php Simplified BSD License
 * 
 * @package phing.tasks.ext
 * 
 * @subpackage PEARCraterTask
 * 
 */
require_once __DIR__ . '/Dependencies/Extension.php';
require_once __DIR__ . '/Dependencies/Group.php';
require_once __DIR__ . '/Dependencies/Package.php';
require_once __DIR__ . '/Dependencies/PHP.php';
require_once __DIR__ . '/Dependencies/PEAR.php';

class PEARCraterTask_Dependencies {

  private $_groups = array();
  private $_packages = array();
  private $_extensions = array();
  private $_php = false;
  private $_pear = false;

  public function __construct() {
    
  }

  public function __get($key) {
    switch ($key) {
      case 'groups' :
        return $this->_groups;
      case 'packages' :
        return $this->_packages;
      case 'extensions' :
        return $this->_extensions;
      case 'php' :
        return $this->_php;
      case 'pear' :
        return $this->_pear;
    }
  }

  public function createPackage() {
    $package = new PEARCraterTask_Dependencies_Package();
    $this->_packages[] = $package;
    return $package;
  }

  public function createPHP() {
    $php = new PEARCraterTask_Dependencies_PHP();
    $this->_php = $php;
    return $php;
  }

  public function createPEAR() {
    $pear = new PEARCraterTask_Dependencies_PEAR();
    $this->_pear = $pear;
    return $pear;
  }

  public function createExtension() {
    $extension = new PEARCraterTask_Dependencies_Extension();
    $this->_extensions[] = $extension;
    return $extension;
  }

  public function createGroup() {
    $group = new PEARCraterTask_Dependencies_Group();
    $this->_groups[] = $group;
    return $group;
  }

}
