<?php
$url = "URL";
// As an example, enter "json" as follows
header("Content-type: text/json");
header("Cache-Control: no-cache");
$response_data = file_get_contents($url);
echo $response_data;
?>