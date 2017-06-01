<?php
$access_token = 'HtgPvG1Wuvb+eHE/Os8UsbfeCR+RPRRrY60A+73HeC1ySEVWHUcwB3IdLu6B6Tyh/mF5hBh/puk0m1tcpKRKdxZW0CX/gtr1lqIps/LOQfQ7TGcTprx8117SBmeKUZtT9SIwf82P89S4z5NHzh5ZzwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
