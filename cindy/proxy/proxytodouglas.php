<?php
$url = $_GET['url'];
$parsed = parse_url($url);
if ($parsed['host'] !== 'douglas.ruslanbes.com') {
  header('HTTP/1.0 403 Forbidden');
  die("Forbidden");
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
echo $output;