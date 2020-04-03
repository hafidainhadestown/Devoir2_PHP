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
        $handle = fopen("login.txt", "r");
    $file_contents = fread( $handle, filesize( "login.txt" ) );
    fclose( $handle );
    // On met chaque ligne du fichier dans un tableau
    $lines = explode ( '|', $file_contents );
    //On sépare chacune des lignes .
    foreach ( $lines as $line ) {
        list( $em, $pass ) = explode( ' ', $line );}

        if ( ( $em == "$email" ) && ( $pass == "$password" ) ) {
            echo "Vous etes authorises";
            $link_address1 = 'Accueil1.php';
            echo "<a href='$link_address1'>Home page</a>";

        }
        else {echo"Vous n'etes pas autorises ";}


    }

?>
