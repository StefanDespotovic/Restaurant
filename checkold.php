<?php
include "config.php"; 
$id = $_GET['id']; 
$del = mysqli_query($db,"delete from reservation where time < DATE_SUB(NOW() , INTERVAL 1 minute)"); 
if($del)
{
    mysqli_close($db); 
    header("location:userpanel.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>