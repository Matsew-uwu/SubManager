<?php 

$json = file_get_contents("../users.json");

echo $json;

$json_array = json_decode($json);

foreach ($json_array["users"] as $key => $value) {
    echo $key . $value;
}


?>