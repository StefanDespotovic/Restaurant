<?php
include "config.php"; 
$id = $_GET['id']; 
$del = mysqli_query($db,"delete from reservation where id = '$id'"); 
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