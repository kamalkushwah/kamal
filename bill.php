<?php
$username= $_POST['user'];
$userpass= $_POST['mm'];
$usercap= $_POST['yy'];

if($usercap==1231){
    header("Location: yourbill.php"); 
}else{
  
    echo"PLEASE ENTER CAPTION";
}
?>
