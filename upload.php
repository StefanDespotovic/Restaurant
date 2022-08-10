<?php
// include the database configuration file
include 'config.php';
$statusMsg = '';

// sending given files to db 
if(isset($_POST["submit"])){
     $name = $_POST['name'];
     $surname = $_POST['surname'];
     $email = $_POST['email'];
     $question = $_POST['question'];
}
$insert = $db->query("INSERT into contact (name, surname, email, question) VALUES ('$name','$surname','$email','$question')");
if($insert){
    $statusMsg = "The file ".$name. " has been uploaded successfully.";
   // header("Location: login.php");
}
echo $statusMsg;
?>