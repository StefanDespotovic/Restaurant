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
    <link rel="stylesheet" href="css/reservation.css">
    <link rel="stylesheet" href="css/styles.css">

    <style>   
  main {
    margin-left:7%;
    width: 90%;
    height: auto;
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
        margin-left: 7.4vw;
        margin-top: 3.5vw;
    }
    input:focus {
        border: 1.5px solid #426e9a !important;
        outline: none;
    }
    .submit:hover {
        color: #b1c8bc;
        background:#426e9a;
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
    .worktime {
    margin-top: 7vh;
    margin-left: 9vw;
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
    @media screen and (max-width: 767px) {
        .sidenav {display: none;}
    
        .steaks-menu {
            margin-top:13vh;
            margin-left:13%;
        }
        .reservation {
            margin-top: -17vh;
            margin-left: 50vw !important;
        }
        .worktime{
            display: none;
        }
        .modal-content {
            width: 90%;
            height: 45vh;
        }
        .text-right{
            margin-left:44vw !important;
        }
        input[type="text"]{
            width: 14vw !important;
        }
        input[type="date"]{
            width: 14vw !important;
        }
        input[type="time"]{
            width: 14vw !important;
        }
        input[type="email"]{
            width: 35.5vw !important;
        }
    }
    @media screen and (min-width: 768px)  and (max-width: 950px) {
        .worktime {
            text-align: center;
  }
        .sidenav{
            width:9% !important;
  }
        .sidenav a{
            padding-left: 10% !important;
            font-size:2.5vw;
  }
        .table{
            margin-left: 8% !important;
        }
        main{
            margin-left: 10% !important;
        }
        .modal-content {
            width: 80%;
            height: 45vh;
        }
        .text-right{
            margin-left:44vw !important;
        }
        input[type="text"]{
            width: 14vw !important;
        }
        input[type="date"]{
            width: 14vw !important;
        }
        input[type="time"]{
            width: 14vw !important;
        }
        input[type="email"]{
            width: 32vw !important;
        }
    }
    @media screen and (min-width: 1024px)  and (max-width: 1280px) {
        .sidenav{
            width:9% !important;
  }
        .sidenav a{
            padding-left: 10% !important;
            font-size:2.5vw;
  }
        main{
            margin-left: 10% !important;
        }
        .table{
            margin-left: 32% !important;
            display: block;
        }
        .table2{
            margin-left: 29% !important;
            margin-top: -14vh !important;
        }
        .worktime {
            text-align: center;
        }
        .modal-content {
            width: 70%;
            height: 45vh;
        }
        .text-right{
            margin-left:44vw !important;
        }
        input[type="text"]{
            width: 14vw !important;
        }
        input[type="date"]{
            width: 14vw !important;
        }
        input[type="time"]{
            width: 14vw !important;
        }
        input[type="email"]{
            width: 31.5vw !important;
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
        <a href="about.php">About</a>
        <a href="menu.php">Menu</a>
        <a href="contact.php">Contact</a>
      </div>
    </nav>

    <main style="border-bottom: 1px solid #71a1d1;">
        <div class="top"> 
            <p style="width:50%">Menu</p>
            <p style="font-size:2.125rem; border-bottom: 1px solid #71a1d1;">Steaks</p>              
            <!-- Trigger/Open The Modal -->
                <button  class="reservation" value="Reservation" id="myBtn">RESERVATION</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                            <h2 style="margin-left: 2vw;">Reservation</h2>
                        </div>
                        <div class="modal-body">
                        
                        </div>
                            <div class="contact">
                                <div class="contact-form">
                                        <form action="?action=submitfunc" method="post" enctype="multipart/form-data">
                                            <input style="width:7vw; float:left;" id="name" name='name' type="text" placeholder="Name" required/>
                                            <input style="width:7vw; float:left;margin-left: .5vw;" id="surname" name='surname' type="text" placeholder="Surname" required/>
                                            <input id="date" name='date' type="date" placeholder="date" min="<?php echo date("Y-m-d"); ?>" required/>
                                            <input id="date" name='time'  min="09:00" max="23:00" type="time" placeholder="date" required/>
                                            <input id="mail" name='email' type="email" placeholder="Email" required/>
                                        <div class="text-right" style="position:absolute; margin-left: 18vw">
                                            <p>Meals ordered: <a name='mealsNum' id="clicks">0</a></p>
                                            <p>Total: $<a name='Total' id="firstValue">0</a></p>
                                            <button type="submit"  class="submit" value="Upload" name="submit">Reserve</button>
                                        </div>
                                        </form>
                    
                                </div>
                            </div>
                        
                    </div>
                </div>

        </div>
        <div class="steaks-menu">
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1607116176195-b81b1f41f536?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZmlsZXQlMjBtaWdub258ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Tenderloin</h1>
            <div class="border"></div>
                 <p class="info">Known as an eye fillet in Australia, filet in France, filé mignon in Brazil, is cut from the loin of beef. </p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(25);">$25</button>

                </div> 

            <div class="steaks-card">
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

            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1601356616077-695728ae17cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHN0ZWFrfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Flank</h1>
            <div class="border"></div>
                 <p class="info"> Cut of beef steak taken from the flank, which lies forward of the rear quarter of a cow, behind the plate. </p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(28);">$28</button>
            </div> 

            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1575900365507-ee022cc4d640?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjU1fHxzdGVha3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Ribeye</h1>
            <div class="border"></div>
                 <p class="info">Sometimes called beauty steaks, are tender, juicy and very flavorful, with just the right amount of fat.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(18);">$18</button>
            </div> 


            <p style="font-size:2.125rem; border-bottom: 1px solid #71a1d1;color: #71a1d1; margin-left:-6.6%;">Chicken meals</p>
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1569691899455-88464f6d3ab1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGNoaWNrZW4lMjB3aW5nc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Nuggets</h1>
            <div class="border"></div>
                 <p class="info">Consisting of a small piece of deboned chicken meat that is breaded, then deep-fried or baked.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(12);">$12</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1522251253478-4cae03d93949?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y2hpY2tlbiUyMHNhbGFkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Salad</h1>
            <div class="border"></div>
                 <p class="info">Ingredients include mayonnaise, boiled egg, celery, onion, pepper, pickles, mustards.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(10);">$10</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1610057099431-d73a1c9d2f2f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y2hpY2tlbiUyMGdyaWxsZWR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Grilled</h1>
            <div class="border"></div>
                 <p class="info">Barbecue chicken is often seasoned or coated in a barbecue sauce, spice rub or both. Marinades is for flavoring.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(14);">$14</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1597579018905-8c807adfbed4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNoaWNrZW4lMjBzYW5kd2ljaHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Sandwich</h1>
            <div class="border"></div>
                 <p class="info">Sandwich that consists of boneless, skinless chicken breast or thigh served between slices of bread, on a bun.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(8);">$8</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1606149059549-6042addafc5a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y2hpY2tlbiUyMGJ1cmdlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Burger</h1>
            <div class="border"></div>
            <p class="info">It is boneless and skinless chicken breast on a hamburger bun, accompanied by spices and garnishes.</p>  
            <button class="order" type="button" onClick="onClick();addTheValue(9);">$9</button>
       </div> 
            

            <p style="font-size:2.125rem; border-bottom: 1px solid #71a1d1;color: #71a1d1; margin-left:-6.6%;">Vegetarian meals</p>
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.themodernproper.com/billowy-turkey/production/posts/2019/Vegan-Roasted-Sweet-Potato-Salad-5.jpg?w=1200&auto=compress%2Cformat&fit=crop&dm=1599768722&s=e33402df5ae9d212ec2518bb2c8f4927">
                </div>
            <h1 class="name">Roasted potato</h1>
            <div class="border"></div>
                 <p class="info">Roasted sweet potatoes, avocado, black beans and raw kale are tossed in a creamy dressing.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(7);">$7</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.themodernproper.com/billowy-turkey/production/posts/2019/Shaved-Brussels-Sprout-Salad-5.jpg?w=1200&auto=compress%2Cformat&fit=crop&dm=1599769366&s=19fb7aa18e820eb6cf49ae2c3d0dde36">
                </div>
            <h1 class="name">Bruselles Salad</h1>
            <div class="border"></div>
                 <p class="info">Loaded with nuts and fresh fruit, this hearty vegetarian salad makes a great light, healthy lunch.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(15);">$15</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.themodernproper.com/billowy-turkey/production/posts/2020/Vegetarian-Burrito-Bowl-13.jpg?w=667&auto=compress%2Cformat&fit=crop&dm=1599768871&s=9c72703038e2956b7124c3dc9ebe73b9">
                </div>
            <h1 class="name">Burrito Bowl</h1>
            <div class="border"></div>
                 <p class="info">Roasted veggies, savory beans and a lime-garlic avocado crema top a bed of cilantro-lime rice.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(18);">$18</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.themodernproper.com/billowy-turkey/production/posts/2019/vegetarian-green-curry-budha-bowl-9.jpg?w=1200&auto=compress%2Cformat&fit=crop&dm=1599768683&s=b4693bfd57bdd263ca331568597db7b9">
                </div>
            <h1 class="name">Green Curry Bowl</h1>
            <div class="border"></div>
                 <p class="info">Steamed brown rice, topped with many veggies and finished with flavor punch of green curry sauce.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(16);">$16</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.themodernproper.com/billowy-turkey/production/posts/2015/ratatouille-5.jpg?w=1200&auto=compress%2Cformat&fit=crop&dm=1599770448&s=912a645c9fe54266f0d2bdaff881a350">
                </div>
            <h1 class="name">Creamy Ratatouille</h1>
            <div class="border"></div>
                 <p class="info">Classic French Provençal stew that’s inherently vegetarian, and wonderfully rich with summerlate garden bounty. </p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(19);">$19</button>
            </div> 
            

            <p style="font-size:2.125rem; border-bottom: 1px solid #71a1d1;color: #71a1d1; margin-left:-6.6%;">Vegan meals</p>
            <div class="steaks-card">
                <div class="header">
                    <img src="https://therecipecritic.com/wp-content/uploads/2019/08/Easy-Jambalaya-Recipe-5-1.jpg">
                </div>
            <h1 class="name">Jambalaya Creole</h1>
            <div class="border"></div>
                 <p class="info">Delicious plant-based with vegan rice and bean one-pot. It contains paprika, onion, tomatoes, parsley.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(22);">$22</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://cdn77-s3.lazycatkitchen.com/wp-content/uploads/2020/12/giant-vegan-sausage-roll-side-1024x1536.jpg">
                </div>
            <h1 class="name">Sausage Rolls</h1>
            <div class="border"></div>
                 <p class="info">Made with mushrooms, brown rice miso, mustard and sage, it is very tasty and simple to made. </p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(10);">$10</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://theprettybee.com/wp-content/uploads/2022/02/fluffy-vegan-pancakes-1.jpg">
                </div>
            <h1 class="name">Maple pancakes</h1>
            <div class="border"></div>
                 <p class="info">Flat cake that is thin and round, prepared from a starch-based batter and it is poured with maple syrup.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(7);">$7</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://veganheaven.org/wp-content/uploads/2019/06/Vegan-Burritos_.jpg">
                </div>
            <h1 class="name">Raw Burritos</h1>
            <div class="border"></div>
                 <p class="info">Vegan wraps are with vegetables, rice, chipotle black beans, guacamole and crisp shredded lettuce.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(15);">$15</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://veganonboard.com/wp-content/uploads/2021/04/vegan-scones-recipe-14.jpg">
                </div>
            <h1 class="name">Baked Scones</h1>
            <div class="border"></div>
                 <p class="info">It is created with soy milk and vegan vegetable spread to replace the dairy. Served with vegan cream and jam.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(10);">$10</button>
            </div>    
            

            <p style="font-size:2.125rem; border-bottom: 1px solid #71a1d1;color: #71a1d1; margin-left:-6.6%;">Side plate</p>
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1654921802159-9f1d368ed556?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80">
                </div>
            <h1 class="name">Fries</h1>
            <div class="border"></div>
                 <p class="info">They are prepared by cutting potatoes into even strips, drying them, and frying them.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(4);">$4</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1610631087218-f784839e48f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8YmFrZWQlMjBwb3RhdG98ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Potato</h1>
            <div class="border"></div>
                 <p class="info">It is served with fillings, toppings or condiments such as butter, cheese and sour cream.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(3);">$3</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1639024471283-03518883512d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fG9uaW9uJTIwcmluZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Onion rings</h1>
            <div class="border"></div>
                 <p class="info">Cross-sectional "ring" of onion dipped in batter or bread crumbs and then deep fried.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(4);">$4</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://images.unsplash.com/photo-1516684732162-798a0062be99?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cmljZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </div>
            <h1 class="name">Rice</h1>
            <div class="border"></div>
                 <p class="info">Simple cooked rice with a little basil and onion, completes every meal, you can add curry.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(2);">$2</button>
            </div> 
            <div class="steaks-card">
                <div class="header">
                    <img src="https://buildyourbite.com/wp-content/uploads/2019/04/roasted-potatoes-and-onions-recipe-5.jpg">
                </div>
            <h1 class="name">Roasted</h1>
            <div class="border"></div>
                 <p class="info">Crisp on the outside and fluffy on the inside, an easy side dish with every meal.</p>  
                 <button class="order" type="button" onClick="onClick();addTheValue(4);">$4</button>
            </div>    



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
          <table class="table2">
            <tr><th>Thursday&nbsp;&nbsp;</th><td>9am - 10pm</td></tr>
              <tr><th>Friday</th><td>9am - 11pm</td></tr>
              <tr><th>Saturday</th><td>12am -11pm</td></tr>
            </table>
     </div>

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

        // Clicks counter
        var clicks = 0;
            function onClick() {
            clicks += 1;
            document.getElementById("clicks").innerHTML = clicks;
            };



            function sum(){
            document.getElementById("sum").innerText=document.getElementById("sum").innerText*1+event.target.innerText*1;
            }




        function addTheValue(secondValue) {
                var fValue = document.getElementById("firstValue");
                firstValue.innerHTML = parseInt(fValue.innerHTML) + parseInt(secondValue);
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