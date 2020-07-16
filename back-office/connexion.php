<?php

if(array_key_exists('login', $_POST)) {


$username = $_POST['name'];

$password = $_POST['password'];

if($password === "camille2001" and $username === "cam's")
{
echo "A vous d'écrire ;)";
}
else {

echo "réessayer mot de passe incorect/nom d'utilisateur incorect";

}
}
?>