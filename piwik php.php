<?php
// -- Piwik Tracking API init --
require_once "PiwikTracker.php";
PiwikTracker::$URL = ‘//analytics.openaire.eu';
//Set the id of your piwik site here
$idSite = 6;
//Create a PiwikTracker Object
$piwikTracker = new PiwikTracker($idSite);
//Specify the title of the page as retrieved from the portal
$page_title="Get page title from DB";
$piwikTracker->doTrackPageView($page_title);
?>