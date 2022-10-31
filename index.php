<?php

require 'User.php';
require 'UserCollection.php';

// create cURL connection to pull data
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/users");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);


//create a collection class object to hold all the users
$users = new UserCollection();

foreach (json_decode($data) as $user) {
    //create a class object to hold each user
    $user = new User($user->name, $user->email, $user->phone, $user->address->city, $user->company->name);
    $users->add($user);
}

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=users.csv");
header("Pragma: no-cache");
header("Expires: 0");

$output = fopen('php://output', 'w');
fputcsv($output, array('first name', 'last name', 'company name', 'email', 'phone', 'extension', 'city'));
foreach ($users->getUsers() as $user) {
    fputcsv($output, array($user->first_name, $user->last_name, $user->company, $user->email, $user->phoneDitis, $user->extension, $user->city));
}
fclose($output);
