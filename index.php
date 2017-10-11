<?php

// Get autoloads, and start f3 session and php session
require_once('vendor/autoload.php');
session_start();
new Session();

/*
 * Name: Patrick Callahan
 * Name: Jeff Pratt
 * Name: Kevin Locke
 * Name: Caleb Ostrander
 * Filename: index.php
 * A controll for the MVC based CRO website
*/

// Create a database object
$dbc = new CroDB();

// create an instance of the Base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function($f3) {
	$dbc = $GLOBALS['dbc'];
	
	echo Template::instance()->render('view/pages/home.html');
});

// run fat-free
$f3->run();

function validatePass($pass) {
  $r1='/[A-Z]/';  //Uppercase
  $r2='/[a-z]/';  //lowercase
  $r3='/[!@#$%^&*()\-_=+{};:,<.>]/';  // special characters
  $r4='/[0-9]/';  //numbers
  
  if(preg_match($r1, $pass) < 1 && preg_match($r2, $pass) < 1) return false;
  
  if(preg_match($r3, $pass) < 1) return false;
 
  if(preg_match($r4, $pass) < 1) return false;
 
  if(strlen($pass) < 6) return false;
 
  return true;
}