<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['template.php'] = "Page Template";
$nav1['contactme.php'] = "Contact Arthur";

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Arthur's SCC IT162 Portal Page";
    break;
    
    case 'contactme.php':
        $title = "Arthur's SCC IT162 Contact Page";
    break;
        
    case 'aia.php':
        $title = "Arthur's SCC IT162 AIA Page";
    break;
        
    case 'flowchart.php':
        $title = "Arthur's SCC IT162 Flowchart Page";
    break;
        
    case 'template.php':
        $title = "Arthur's Portal Page Template";
    break;

    default:
        $title = THIS_PAGE;
   }


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>
