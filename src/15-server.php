<?php


$is_float =filter_var('0,9', FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);  // false

$is_int = filter_var('125', FILTER_VALIDATE_INT);  // false

$is_ip = filter_var('0.0.0.0', FILTER_VALIDATE_IP);  // false

$is_url = filter_var('www.google.com', FILTER_VALIDATE_URL);  // true

$is_email = filter_var('pepito@net.not', FILTER_VALIDATE_EMAIL);  // true

echo "<pre>";
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url);
var_dump($is_email);
echo "</pre>";

?>