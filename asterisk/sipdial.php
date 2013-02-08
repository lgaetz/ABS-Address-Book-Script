<?php

$strChannel=$_REQUEST['IN'];
$number=$_REQUEST['OUT'];

include_once("./config.php");

/**** Debug output 
echo "Action: login\r\n<br>";
echo "Username: $strUser\r\n<br>";
echo "Secret: $strSecret\r\n<br>";
echo "Events: off\r\n\r\n<br>";
echo "Action: Originate\r\n<br>";
echo "Channel: $strChannel\r\n<br>";
echo "Context: $strContext\r\n<br>";
echo "Exten: $number\r\n<br>";
echo "Priority: $strPriority\r\n\r\n<br>";
echo "Callerid: $number\r\n\r\n<br>";
echo "Timeout: 30\r\n\r\n<br>";
echo "host: $strHost<br>";
echo "port: $strPort<br>";
echo "user: $strUser<br>";
echo "secret: $strSecret<br>";
************************/
echo "Now bridging<br>Extension: $strChannel<br>Number: $number." ;
$errno=0 ;
$errstr=0 ;
$strCallerId = "Web Call $number";
$oSocket = fsockopen ($strHost, $strPort, &$errno, &$errstr, 20);
if (!$oSocket) {
	echo "$errstr ($errno)<br>\n";
}
 else
{
	fputs ($oSocket, "Action: login\r\n");
	fputs ($oSocket, "Username: $strUser\r\n");
	fputs ($oSocket, "Secret: $strSecret\r\n");
	fputs ($oSocket, "Events: off\r\n\r\n");
	sleep(1) ;
	fputs ($oSocket, "Action: Originate\r\n");
	fputs ($oSocket, "Channel: $strChannel\r\n");
	fputs ($oSocket, "Application: Dial\r\n");
	fputs ($oSocket, "Data: SIP/$number,120,tr\r\n");
	fputs ($oSocket, "Priority: $strPriority\r\n\r\n");
	fputs ($oSocket, "Callerid: $strCallerId\r\n\r\n");
	fputs ($oSocket, "Timeout: 30\r\n\r\n");
	sleep(2) ;
	fclose ($oSocket);
}


?>