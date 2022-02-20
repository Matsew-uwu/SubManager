<?php 

$json = file_get_contents("../users.json");

$json_array = json_decode($json, true);

// Verifier si les information sont existant


$user = array(
    "username" => $_REQUEST["firstname"] . "." . $_REQUEST["lastname"],
    "fistname" => $_REQUEST["firstname"],
    "lastname" => $_REQUEST["lastname"],
    "dob" => $_REQUEST["dob"],
    "number" => $_REQUEST["number"],
    "email" => $_REQUEST["email"],
    "password" => $_REQUEST["password"]
);

array_push($json_array["users"], $user);

$file = fopen("../users.json", "w+");
fwrite($file, json_encode($json_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
fclose($file);

header('Location: /index.php');
  exit();

?>