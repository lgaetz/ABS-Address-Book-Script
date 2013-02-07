<?php

// specify IP address of asterisk server (if localhost or 127.0.0.1 don't work try actual ip)
$strHost = "10.41.2.10";
// specify manager port number
$strPort = "5038";
// specify the asterisk manager username you want to login with
$strUser = "lorne";
// specify the password for the above user
$strSecret = "lorne";
// Specify context, probably should be from-internal
$strContext = "from-internal";
// specify the amount of time you want to try calling the specified channel before hangin up
$strWaitTime = "30";
// specify the priority you wish to place on making this call
$strPriority = "1";
// specify the maximum amount of retries
$strMaxRetry = "2";

?>
