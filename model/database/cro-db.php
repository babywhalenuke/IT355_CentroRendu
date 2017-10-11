<?php
require '/home/cro/config.php';

/**
 * Provides CRUD acces
 *
 * PHP Version 5
 *
 * @author Kevin Locke 
 * @author Patrick Callahan 
 * @author Jeff Pratt
 * @author Caleb Ostrander 
 * @version 1.0
 */

/*
 * Database commands
 */
class CroDB {
  private $_pdo;
  
  function __construct() {
    try {
      //Establish database connection
      $this->_pdo = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
      
      //Keep the connection open for reuse to improve performance
      $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
      
      //Throw an exception whenever a database error occurs
      $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch (PDOException $e) {
      die( "Error!: " . $e->getMessage());
    }
  }  
}