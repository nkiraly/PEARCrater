<?php

/**
 * This file contains {@link PEARCraterTask_Maintainer}
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
 * Handle the various maintainer elements
 *
 * @see PEARCraterTask,
 *      PEARCraterTask::createLead(),
 *      PEARCraterTask::createDeveloper(),
 *      PEARCraterTask::createHelper(),
 *      PEARCraterTask::createContributor()
 */
class PEARCraterTask_Maintainer {

  private $_name = null;
  private $_user = null;
  private $_email = null;
  private $_active = 'yes';
  private $_role = null;

  /**
   * Handle the role attribute, if any
   *
   * This is called with the appropriate role depending on which type of maintainer was created.
   * 
   * @param string $role
   *
   * @see PEARCraterTask::createLead(),
   *      PEARCraterTask::createDeveloper(),
   *      PEARCraterTask::createHelper(),
   *      PEARCraterTask::createContributor()
   */
  public function setRole($role) {
    $this->_role = $role;
  }

  /**
   * Handle the name attribute
   *
   * @param string $name
   */
  public function setName($name) {
    $this->_name = $name;
  }

  /**
   * Handle the user attribute
   *
   * @param string $user
   */
  public function setUser($user) {
    $this->_user = $user;
  }

  /**
   * Handle the email attribute
   *
   * @param string $email
   */
  public function setEmail($email) {
    $this->_email = $email;
  }

  /**
   * Handle the active attribute
   *
   * A user is considered active by default.  If a particular user is inactive, use this to set
   * their active state to "no".
   *
   * @param string $active
   */
  public function setActive($active) {
    $this->_active = $active;
  }

  /**
   * Allows for the role, name, user, email, and active properties to be accessed in a read-only
   * fashion.
   *
   * @param string $key Either role, name, user, email, or active
   *
   * @return string
   */
  public function __get($key) {
    switch ($key) {
      case 'role' :
      case 'name' :
      case 'user' :
      case 'email' :
      case 'active' :
        $real_key = '_' . $key;
        return $this->$real_key;
    }
  }

}
