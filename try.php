<?php

$client = new MongoDB\Client(
    'mongodb+srv://user_access:pass_user_access@cluster0-s1pxl.mongodb.net/test?retryWrites=true&w=majority');

echo "Database connected<br>"


$db = $client->Farmer;

$access = $db->access;

$collection = $access->find();


foreach($collection as $doc){
      echo $doc["username"] . "\n";
   }





?>
