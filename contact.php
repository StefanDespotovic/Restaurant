<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png">
    <title>First Steak</title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
      
      .main {
        margin-left:7%;
        width: 90%;
        height: 50%;
      }
      
      .contact{
        padding-left:8%;
        width: 50%;
        height: auto;
        float:left;
      }
      .contact-form{
        width: 65%;
        height: 20vw;
      }
      .contact p {
        font-size:3.125rem;
        color: #71a1d1;
      }
      input[type="text"]
    {
        text-transform: capitalize;
        background: transparent;
        display: block;
        padding: .8em 1em;
        width: 29.5vw;
        border: 1px solid #71a1d1;
        border-radius: .375em;
        transition: .2s ease-out;
    }
    input[type="email"]
    {
        background: transparent;
        display: block;
        padding: .8em 1em;
        width: 29.5vw;
        border: 1px solid #71a1d1;
        border-radius: .375em;  
        transition: .2s ease-out;    
    }
    .submit
    {
        background: transparent;
        display: block;
        padding: .8em 1em;
        width: 8vw;
        border: 1px solid #71a1d1;
        border-radius: .375em;  
        transition: .6s ease-out;  
        color: #426e9a;  
        margin-left: 23.4vw;
    }
    input:focus {
        border: 1.5px solid #426e9a !important;
        outline: none;
    }
    .submit:hover {
        color: #b1c8bc;
        background:#426e9a;
    }
    .surname {
      margin-left: 2.45vw;
    }
      .location{
        padding-top: 8%;
        width: 42%;
        height: auto;
        float:left;
      }
      .locationgmaps{
        top:0px;
        right:0px;
        border-bottom-left-radius:10em;
        position:absolute;
        width:46vw;
        height:34vw;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.4);
        transition: .2s ease-out;
      }
      .locationgmaps:hover {
        box-shadow: 0 3px 10px rgba(0,0,0,.2);
        transform: translate3d(0,-2px,0);
      }
      table{
        display: inline-block;
        vertical-align: top;
      }
      th {
        display: inline-block;
        vertical-align: top;
        font-size:1.125rem;
        color: #71a1d1;
        padding-left: 5%;
        text-align: right;  
      }   

      @media screen and (max-width: 720px) {
        .sidenav {
          display: none;
        }
        .locationgmaps {
          width: 53vw !important;
          height: 40vw;
        }
        input[type="text"]
    {
        width: 29.5vw !important;
    }
    input[type="email"]
    {
        width: 29.5vw;
    }
    input[type="submit"]
    {
        width: 10.5vw;
    }
    .surname{
      margin-left: 0;
    }
    .worktime{
      margin-top: 26vh;
    }

}
      </style>

</head>
<?php
if(isset($_GET['action'])=='submitfunc') {
  submitfunc();
}else
//show form
?>
<body>
    <nav>
    <div class="sidenav">
        <a href="index.php">About</a>
        <a href="menu.php">Menu</a>
        <a href="contact.php">Contact</a>
      </div>
    </nav>

    <main>	
        <div class="contact">
            <div class="contact-form">
                    <form action="?action=submitfunc" method="post" enctype="multipart/form-data">
                        <p style="width:50%">Questions or comments?</p>
                        <input style="width:12.5vw; float:left;" id="name" name='name' type="text" placeholder="Name" required/>
                        <input style="width:12.5vw; float:left;" class="surname" id="surname" name='surname' type="text" placeholder="Surname" required/>
                        <br><br><br><input id="mail" name='email' type="email" placeholder="Email" required/>
                        <br>
                        <input style="padding-bottom: 6vw;" id="message" name='question' type="text" placeholder="Message" required/>
                        <br>
                        <button type="submit"  class="submit" value="Upload" name="submit">Send</button>
                    </form>

            </div>
        </div>
        <div class="location">
       <iframe class="locationgmaps" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAcCfU2AH3-CnzMXITFU70lpIQ7QbEWmYA
          &q=Empire+Steak+House,New+York+NY">
      </iframe>
    </div>
   

        
    </main>	
    <div class="worktime"> 
            <p>237 W 54th St NY<br> New York 10019 </p>
            <p>+1 212-586-9700 </p>
            <p>firststeak@gmail.com</p> 
            <table class="table" style="margin-left: 20%;">
              <tr><th>Sunday</th><td>Closed</td></tr>
              <tr><th>Monday</th><td>9am - 10pm</td></tr>
              <tr><th>Tuesday</th><td>9am - 10pm</td></tr>
              <tr><th>Wednesday&nbsp;&nbsp;</th><td>9am - 10pm</td></tr>
            </table>
          <table>
            <tr><th>Thursday&nbsp;&nbsp;</th><td>9am - 10pm</td></tr>
              <tr><th>Friday</th><td>9am - 11pm</td></tr>
              <tr><th>Saturday</th><td>12am -11pm</td></tr>
            </table>
     </div>
</body>
<?php
function submitfunc() {
  include 'config.php';
// sending given files to db 
if(isset($_POST["submit"])){
     $name = $_POST['name'];
     $surname = $_POST['surname'];
     $email = $_POST['email'];
     $question = $_POST['question'];
}
$insert = $db->query("INSERT into contact (name, surname, email, question) VALUES ('$name','$surname','$email','$question')");
if($insert){
  echo "<script type='text/javascript'>alert('Successful')</script>";
   // header("Location: login.php");
} }

?>
</html> 