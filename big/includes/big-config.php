<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['accessibility.php'] = "Web Accessiblity";
$nav1['webcam.php'] = "Web Cam";
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
        $title = "Arthur's SCC IT162 BIG Project Page";
        $logo = "fa-user-circle";
        $pageID = "Index";
    break;
    
    case 'accessibility.php':
        $title = "A Video on Web Accessibility";
        $logo = "fa-universal-access";
        $pageID = "Accessibility";
    break;
        
    case 'webcam.php':
        $title = "Live Web Cams";
        $logo = "fa-video-camera";
        $pageID = "Web Cams";
    break;
        
    case 'responsivemobile.php':
        $title = "BIG Research #1: Responsive vs Mobile";
        $logo = "fa-mobile";
        $pageID = "ResponsiveMobile";
    break;
        
    case 'galleries.php':
        $title = "BIG Research #2: Galleries";
        $logo = "fa-picture-o";
        $pageID = "Galleries";
    break;
        
    case 'flexbox.php':
        $title = "BIG Research #3: Flexbox";
        $logo = "fa-th-large";
        $pageID = "Flexbox";
    break;
        
    case 'shoppingcarts.php':
        $title = "BIG Research #4: Shopping Carts";
        $logo = "fa-shopping-cart";
        $pageID = "ShoppingCarts";
    break;
        
    case 'questionaire.php':
        $title = "User Questionaire";
        $logo = "fa-check-square-o";
        $pageID = "Questionaire";
    break;
        
    case 'map.php':
        $title = "Google Map of Seattle Central College";
        $logo = "fa-map";
        $pageID = "Map";
    break;
        
    case 'calendar.php':
        $title = "Google Calendar";
        $logo = "fa-calendar";
        $pageID = "Calendar";
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
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
