<?php

$db['host']="localhost";
$db['user']='root';
$db['pass']='';
$db['name']='php_cms';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
    echo "<script>console.log('" . $key . "' );</script>";
}

$conn = new mysqli(HOST,USER,PASS,NAME);

if($conn){
    echo "<script>console.log('connected' );</script>";
}
