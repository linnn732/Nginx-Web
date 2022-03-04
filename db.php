<?php
$DBServer = 'localhost:3306';
$DBUser = 'lynn';
$DBPass = 'wowooo122';
$DBName = 'ES_web';

$link= new mysqli($DBServer, $DBUser, $DBPass);
if(!$link) echo "fail";
else echo "success connect!";
?>