<?php
echo 'La date saisie est: '. $_POST['date'];
//$d=date_format($_POST['date'],'d, m,Y');
$time = date('Y-m-d', strtotime($_POST['date']));
echo '<br>'.$time.'<br>';
/*$result=checkdate('m','Y', 'Y');
if($result==true){
    echo 'La date est valide';
}
else{
    echo 'La date n\'est pas valide';
}*/
if (isset($_POST['date'])) {
    $timestamp = strtotime($_POST['date']);
    $date=date('d',$timestamp);
    $month=date('m',$timestamp);
    $year=date('Y',$timestamp);
}

$result=checkdate($month,$date,$year);
if($result==true){
    echo 'La date est valide';
}
else{
    echo 'La date n\'est pas valide';


}
?>