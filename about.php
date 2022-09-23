  <!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" href="images/logo.png">
      <title>First Steak</title>
      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/reservation.css">
      <?php include 'worktime.php';?>
      <style>
      main {
        margin-left:7%;
        width: 90%;
        height: 50%;
      }
      .reservation{
      margin-left: 76%;
      margin-top: -12.5vh;
  }
      .contact{
        margin-left: 3vw;
        height: auto;
      }
      .contact-form p{
        font-size: 1.5rem;
        margin-left: 2vw;
      }
      input[type="text"]
    {
        text-transform: capitalize;
        background: transparent;
        display: block;
        padding: .8em 1em;
        border: 1px solid #71a1d1;
        border-radius: .375em;
        transition: .2s ease-out;
        margin-top: 3.5vh;
    }
    input[type="email"]
    {
        background: transparent;
        display: inline-block;
        padding: .8em 1em;
        width: 16.4vw;
        border: 1px solid   #71a1d1;
        border-radius: .375em;  
        transition: .2s ease-out;       
        float: left;    
        margin-top: 1%;
        clear: both;
    }
    input[type="date"]
    {
        background: transparent;
        display: inline-block;
        padding: .8em 1em;
        border: 1px solid #71a1d1;
        border-radius: .375em;
        transition: .2s ease-out;
        width: 7vw;
        clear: both;
        margin-top: 1%;
        float: left;
    }
    input[type="time"]
    {
        background: transparent;
        display: inline-block;
        padding: .8em 1em;
        border: 1px solid #71a1d1;
        border-radius: .375em;
        transition: .2s ease-out;
        width: 7vw;
        margin-top: 1%;
        float: left;
        margin-left: .5vw;

    }
    .submit
    {
        background: transparent;
        display: block;
        padding: .8em 1em;
        border: 1px solid #71a1d1;
        border-radius: .375em;  
        transition: .6s ease-out;  
        color: #426e9a;  
        margin-left: -4.8vw;
        margin-top: 10vw;
    }
    input:focus {
        border: 1.5px solid #426e9a !important;
        outline: none;
    }
    .submit:hover {
        color: #b1c8bc;
        background:#426e9a;
    }


      .allmeals{
        margin-top: 12.5vh;
      }

      .mealoftheday{
        background-color:#E8E8E8;
        width:53%;
        float: left;
        border-radius: 1rem;
        margin-top: 2.5vh;
        transition: transform .5s ease-in-out;
      }
      .mealoftheday:hover {
      box-shadow: 0px 0px 21px -3px rgb(110, 109, 109);
      transform: scale(1.01);
  }
      .meal{
        float: left;
        position: absolute;        
      }
      .meal h1{
        font-size:3.125rem;
        color: #71a1d1;
        margin-left: 1vw;
      }
      .meal h2{
        font-size:2rem;
        color: #71a1d1;
        margin-top:-4vh;
        margin-left: 1vw;
      }
      .meal .order{
        background: transparent;
        display: block;
        padding: .5em .4em;
        width: 3vw !important;
        border: 1px solid #71a1d1;
        border-radius: .375em;  
        transition: .6s ease-out;  
        color: #426e9a;  
        margin-left: 16.5vw !important;
        margin-top: -1% !important;
        position: absolute;
    }
      .order{
        background: transparent;
        display: block;
        padding: .5em .4em;
        width: 22.5%;
        border: 1px solid #71a1d1;
        border-radius: .375em;  
        transition: .6s ease-out;  
        color: #426e9a;  
        margin-left: 68%;
        margin-top: -18%;
        position: absolute;
    }
    .order:hover {
        color: #b1c8bc;
        background:#426e9a;
    }
    .meals{
        background: transparent;
        display: block;
        padding: .5em .4em;
        width: 9.5%;
        border: 1px solid #71a1d1;
        border-radius: .375em;  
        transition: .6s ease-out;  
        color: #426e9a;  
        margin-left: auto;
        margin-right: auto;
        margin-top: 2vh;
        text-align: center;
        text-decoration:none;
    }
    .meals:hover {
        color: #b1c8bc;
        background:#426e9a;
    }
    .meal .info {
      margin-top: -10px;
      width: 18vw;
      font-weight: 700;
      letter-spacing: 0.1em;
      padding: 30px;
  }
      .food-rotate{
        margin-left: 23vw;
        margin-top: 5vh;
        width: 30vw;
        float:left;
      }
      .food-rotate img{
        width: 72%;
        height: auto;
        max-height: none;
        transition: transform .7s ease-in-out;
      }
      .food-rotate img:hover {
        transform: rotate(30deg) scale(1.1);
      }
      .menu{
        margin-top: 5vh;
        width: 100%;
      }
      .imgMenu {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 15vw;
      }
      .imgMenuText  {
        display: block;
        margin-left: 35vw;
        width: 24vw;
        font-size: 1.5rem;
        color: #426e9a;
      }
        
        @media screen and (max-width: 768px) {
          .sidenav {display: none;}
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
          <a style="<?php echo($status < 0 ? 'color:red' : 'color:green'); ?>" class="sidenavphp"><?php echo " $status";?></a>
          <a href="about.php">About</a>
          <a href="menu.php">Menu</a>
          <a href="contact.php">Contact</a>
        </div>
      </nav>

      <main>	

        <div class="top"> 
        <p style="width:50%">Menu</p>
        <button  class="reservation" value="Reservation" id="myBtn">RESERVATION</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div style="width:23%" class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2 style="margin-left: 2vw;">Reservation</h2>
                </div>
                <div class="modal-body">
                
                </div>
                    <div class="contact">
                        <div style="margin-left:-2%" class="contact-form">
                                <form action="?action=submitfunc" method="post" enctype="multipart/form-data">
                                    <input style="width:7vw; float:left;" id="name" name='name' type="text" placeholder="Name" required/>
                                    <input style="width:7vw; float:left;margin-left: .5vw;" id="surname" name='surname' type="text" placeholder="Surname" required/>
                                   <input id="date" name='date' type="date" placeholder="date" min="<?php echo date("Y-m-d"); ?>" required/>
                                    <input id="date" name='time'  min="09:00" max="23:00" type="time" placeholder="date" required/>
                                    <input id="mail" name='email' type="email" placeholder="Email" required/>
                                <div style="position:absolute; margin-left: 18vw">
                                    <button type="submit"  class="submit" value="Upload" name="submit">Reserve</button>
                                </div>
                                </form>
            
                        </div>
                    </div>
                
            </div>
        </div>
      </div>
      <div class="allmeals">
        <div class="mealoftheday">
        <div class="meal">
          <h1>Meal of the day</h1>
          <h2>Tenderloin Steak</h2>
          <div class="border"></div>
          <p class="info">Known as an eye fillet in Australia, filet in France, filé mignon in Brazil, is cut from the loin of beef. 
          It has lean and juicy meat, making it ideal for roasting or grilling. This is largely due to the muscles used to cut this steak.
          </p>
          <button class="order" type="button" onClick="onClick();addTheValue(25);">$25</button>
        </div>
<div class="food-rotate">
  <img src="images/steak.png">
</div></div>

        <div style="margin-top: 5vh;" class="steaks-menu">
          <div style="margin-left: 2.5vw;" class="steaks-card">
              <div class="header">
                  <img src="https://images.unsplash.com/photo-1602216475919-37336ceb4ad3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjB8fHRib25lJTIwc3RlYWt8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
              </div>
          <h1 class="name">T-bone</h1>
          <div class="border"></div>
               <p class="info">Steaks of beef cut from the loin. They include a T shaped lumbar with sections of internal oblique muscle.</p>  
               <button class="order" type="button" onClick="onClick();addTheValue(22);">$22</button>
          </div> 

          <div class="steaks-card">
              <div class="header">
                  <img src="https://images.unsplash.com/photo-1432139509613-5c4255815697?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHN0ZWFrJTIwcmliZXllfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
              </div>
          <h1 class="name">Tomahawk</h1>
          <div class="border"></div>
          <p class="info">Essentially known as the ribeye beef steak specifically cut with at least five inches of rib bone left intact.</p>  
          <button class="order" type="button" onClick="onClick();addTheValue(22);">$22</button>
          
        </div>
        </div>
        <div class="menu">
          <img class="imgMenu" src="images/menu.png">
          <h1 class="imgMenuText">Scan QR code to view menu</h1>
          <a class="meals" href="menu.pdf" target="_blank"> Download Menu</a>
        </div>
      </main>	

      
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];
      
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }


      </script>

  </body>
  <?php
function submitfunc() {
    include 'config.php';
  // sending given files to db 
  if(isset($_POST["submit"])){
     $name = $_POST['name'];
     $surname = $_POST['surname'];
     $date = $_POST['date'];
     $time = $_POST['time'];
     $email = $_POST['email'];
  //   $mealsNum = $_POST['mealsNum'];
   //  $Total = $_POST['Total'];
     
}
$insert = $db->query("INSERT into reservation (name, surname, date, time, email) VALUES ('$name','$surname','$date','$time','$email')");
if($insert){
  echo "<script type='text/javascript'>alert('Successful')</script>";
   // header("Location: login.php");
} else
{
    echo "error";
} }

?>
  </html> 