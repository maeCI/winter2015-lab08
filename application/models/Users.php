<?php

/**
 * This is a model for the users table.
 *
 * @author maecst
 */
class Users extends CI_Model {
  
   // Constructor
   public function __construct() 
   {
        parent::__construct('users', 'id');
   }
}