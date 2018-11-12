<?php
/*
config.php

Stores configuration data for our application

dollar sign underscore means super global

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo 'the constant is storing: ' .THIS_PAGE;

//die;

switch(THIS_PAGE){
        
    case 'template.php':
        $title = 'My Template page';
    break;
   case 'contact.php':
        $title = 'My Contact page';
    break;
        
        
    default:
        $title =THIS_PAGE;
        
   
        
        
        
        
        
        
    
}

