<?php
/*
config.php
Stores configuration data for our application
*/

ob_start();// prevents header errors and forces the whole page to be read before loading. 
define('DEBUG',TRUE); #we want to see all errors
include 'credentials.php'; //database credentials

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


/*here are the urls and page names for our main navigation*/

$nav1['index.php']= 'Home';
$nav1['customer_list.php']= 'Customers';
$nav1['daily.php']= 'Daily';
$nav1['contact.php']= 'Contact';
$nav1['db-test.php']= 'DB-test';








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
        $sitename = "Jana's application site";
        $slogan= 'Whatever it is you do, we do it better.';
        $pageHeader = 'The Developer forgot to put a page header.';
        $subHeader = 'The Developer forgot to put a sub header.';
        $sloganIcon='';//will be replaced in contact.php by hero icons




switch(THIS_PAGE){
        
        case 'index.php':
        $title = 'My Home Page';
        $pageHeader = 'Welcome Home!';
        $subHeader = 'Some people say home is where the heart is, I say cats are where the wrapping paper is.';
    break;
        
    case 'template.php':
        $title = 'My Template page';
        $pageHeader = 'Ooooooo Templates!';
        $subHeader = 'This is a great place to start with new pages!';
    break;
        
     case 'customer_list.php':
        $title = 'A list of cutomers';
        $pageHeader = 'Our customers';
        $subHeader = "Don't sue us, because we're using celebrity photos";
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
        
   case 'db-test.php':
        $title = 'My Database test page';
        $pageHeader = 'Please check out my database!';
        $subHeader = 'Check this page to see if your db credentials are correct';
        $sloganIcon= randomize($heros);
    break;
        
        
   
    
}

function randomize ($arr)
{//randomize function is called in the right sidebar - an example of random (on page reload)
	if(is_array($arr))
	{//Generate random item from array and return it
		return $arr[mt_rand(0, count($arr) - 1)];
	}else{
		return $arr;
	}
}


/*BEgin array of images to be used on contact.php on the function named Randomize*/



function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

/*MakLinks() will create navigation items from an associative array
echo makeLinks($nav1);

' . xxx . ' concatenation pattern

*/

function makeLinks($nav)
{
$myReturn='';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){//current page add active class
            
              $myReturn .='
        <li class="nav-item ">
              <a class="nav-link active" href="' . $key . ' ">' . $value . ' </a>
        </li>'; 
            
            
        }else{//add no formatting
            

            
        $myReturn .='
        <li class="nav-item">
              <a class="nav-link" href="' . $key . ' ">' . $value . ' </a>
        </li>';  }
        
        
        
    }
    
    
    return $myReturn;



}







