<?php 

$json = file_get_contents("../users.json");



$json_array = json_decode($json, true);


foreach ($json_array["users"] as $user) {

    if (($user["username"]==$_REQUEST["username"]) && ($user["password"]==$_REQUEST["password"])){
        
        // Ajout de session
        $_SESSION["user"] = $user["username"];
        $_SESSION["type"] = $user["type"];
        // Redirection
        header('Location: /index.php');
        exit();
    } 
};
header('Location: /login.php');
exit();
?>