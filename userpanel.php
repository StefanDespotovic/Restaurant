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
      <style>
      main { 
        margin-left:7%;
        width: 90%;
        height: 50%;
      }
     h1 a {
    padding-left: 75vw;
    text-decoration: none;
    display: block;
    margin-top: -3.5vw;
    animation: blink 1s infinite
  }
  @keyframes blink { 0%{ color:#71a1d1; } 100%{ color:#81d0e8; } }
  
        @media screen and (max-width: 768px) {
          .sidenav {display: none;}
        }
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #71a1d1;
  color: white;
}

</style>
  </head>
  <body>
      <nav>
      <div class="sidenav">
          <a href="about.php">About</a>
          <a href="menu.php">Menu</a>
          <a href="contact.php">Contact</a>
        </div>
      </nav>

      <main>	
      


<h1>Reservation panel</h1>
<h1><a href="userpanel2.php">Questions panel</a></h1>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Date</th>
    <th>Time</th>
    <th>Email</th>
    <th>Meals</th>
    <th>Delete</th>
  </tr>
  <?php
	
	include "config.php";

        
	$result = mysqli_connect($dbHost,$dbUsername,$dbPassword) or die("Could not connect to database." .mysqli_error());
	mysqli_select_db($result,$dbName) or die("Could not select the databse." .mysqli_error());
	$test = mysqli_query($result,"select id,name,surname,date,time,email,meal from reservation");
	while($rows = mysqli_fetch_array($test))
	{
		$id = $rows['id'];
		$name = $rows['name'];
		$surname = $rows['surname'];
        $date = $rows['date'];
		$time = $rows['time'];
        $email = $rows['email'];
        $meal = $rows['meal'];
	?>

  <tr>
    <td><?php echo $id?></td>
    <td><?php echo $name?></td>
    <td><?php echo $surname?></td>
    <td><?php echo $date?></td>
    <td><?php echo $time?></td>
    <td><?php echo $email?></td>
    <td><?php echo $meal?></td>
    <td><a href="delete2.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
  </tr>
  <a href="checkold.php?id=<?php echo $rows['id']; ?>">DELETE OLD RESERVATIONS</a> 
  <?php
	}
?>
</table>
        
        </div>

          
      </main>	

      
  </body>
  </html> 






