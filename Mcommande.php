<?php

$file1 = fopen("pscde01_CLI1001.txt","a+");
$file2 = fopen("psccl01_CLI1004.txt","a+");

if ($file= fopen("fichier.txt","r+"))
{
    while(!feof($file)) {
        $M1="CLI1001";
        $M2="CLI1004";
        $L = fgets($file);
        if (strpos($L, $M1) !== FALSE)
        {
            fputs($file1, $L);
            echo $L;
        }
        if (strpos($L, $M2) !== FALSE)
        {
            fputs($file2, $L);
            echo $L;
        }
        echo "\n";

    }
    fclose($file);
}
fclose($file1);
fclose($file2);


?>

