<?php

$email=$_POST["email"];
$password=$_POST["password"];
function verifEmail($email)
{
    if (isset($email) ) {
        if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
            return true;
        else
            return false;
    }
}
function verifPass($password){
    if(isset($password)){
        if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,16}/', $password)) {
           return true;
        }
        else {
           return false;
        }
    }
}
if(!verifEmail($email))
{
    echo "Email non valide";
}
if(!verifPass($password)){
    echo "Mot de passe non valide";
}
if(verifPass($password)&&verifEmail($email) ){
        $file = fopen("login.txt", "r");
        while(!feof($file)){
        $line = fgets($file);
        list($em, $pass) = explode('|', $line);
        if(trim($em) == $email && trim($pass) == $password){
            echo 'Authentification reussite';

            break;
        }
    }
    fclose($file);


    }

?>
