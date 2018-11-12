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

function randomize ($arr)
{//randomize function is called in the right sidebar - an example of random (on page reload)
	if(is_array($arr))
	{//Generate random item from array and return it
		return $arr[mt_rand(0, count($arr) - 1)];
	}else{
		return $arr;
	}
}


$heros[] = '<img src="images/coulson.png" />';
$heros[] = '<img src="images/fury.png" />';
$heros[] = '<img src="images/hulk.png" />';
$heros[] = '<img src="images/thor.png" />';
$heros[] = '<img src="images/black-widow.png" />';
$heros[] = '<img src="images/captain-america.png" />';
$heros[] = '<img src="images/machine.png" />';
$heros[] = '<img src="images/iron-man.png" />';
$heros[] = '<img src="images/loki.png" />';
$heros[] = '<img src="images/giant.png" />';
$heros[] = '<img src="images/hawkeye.png" />';


// default:
        $title =THIS_PAGE;
        $sitename = 'Site Name';
        $slogan= 'Whatever it is you do, we do it better.';
        $pageHeader = 'The Developer forgot to put a page header.';
        $subHeader = 'The Developer forgot to put a sub header.';
        $sloganIcon='';//will be replaced in contact.php by hero icons




switch(THIS_PAGE){
        
    case 'template.php':
        $title = 'My Template page';
        $pageHeader = 'Put page ID here';
        $subHeader = 'Put more information about page here.';
    break;

     case 'daily.php':
        $title = 'My Daily page';
        $pageHeader = 'Daily coffee specials';
        $subHeader = 'All our coffee is special!';
    break;
   case 'contact.php':
        $title = 'My Contact page';
        $pageHeader = 'Please contact us';
        $subHeader = 'We appreciate your feedback';
        $sloganIcon= randomize($heros);
    break;
        
        
   
    
}


/*BEgin array of images to be used on contact.php on the function named Randomize*/




