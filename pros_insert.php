<?php
include('config.php');
 
$nom1=$_POST['nom1'];
$nom2=$_POST['nom2'];
$operation=$_POST['operation'];
$catatan=$_POST['catatan'];
 
if((is_numeric($nom1))&&(is_numeric($nom2)))
{
    switch($operation)
    {
        case '+':
            $result=$nom1+$nom2;
            break;
        case '-':
            $result=$nom1-$nom2;
            break;
        case '*':
            $result=$nom1*$nom2;
            break;
        case '/':
            $result=$nom1/$nom2;
            break;
        case '%':
            $result=$nom1%$nom2;
            break;
    }
}
else
    $result="";
 


 $query="INSERT INTO calculator VALUES 
 ('$nom1', '$nom2', '$operation', '$result','$catatan')";
 
if(mysql_query($query)&&$result==""){
header("Location: profcalculate.php?result=0");}
else
    header("Location: profcalculate.php?result=".$result);


?>