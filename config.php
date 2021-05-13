  
<?php
session_start();
error_reporting(0);
$con =mysqli_connect('localhost','root','');
if($con){
    echo "success";
    
}
mysqli_select_db($con, form1);
?>