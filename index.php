<?php

// create cURL connection to pull data
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/users");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);

