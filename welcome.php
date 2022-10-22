<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:/scheduler/login.php");
    exit;
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">

    <title>Welcome- <?php echo $_SESSION['username']?></title>
  </head>
  <body>
    

    <div class="hero" style="margin-top:300px;">
    <a href="/scheduler"></a>
       
       <button id="btn"class = "b1" >
           <p id="btnText"><a href = "/scheduler/votesystem">Online Voting</a></p>
           <div class="check-box">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                   <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
           </div>
       </button>
       
       <br>
       <button id="btn1" class="b2">
       
           <p id="btnText1"><a href="/scheduler">Slot Booking</a></p>
           <div class="check-box">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                   <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
           </div>
       </button>

   </div>
 
<script>
   var btn = document.getElementById("btn1");
   var btnText = document.getElementById("btnText1");
   btn1.onclick = function(){
       btnText1.innerHTML = "Thanks";
       btn1.classList.add("active");
   }
   var btn = document.getElementById("btn");
   var btnText = document.getElementById("btnText");
   btn.onclick = function(){
       btnText.innerHTML = "Thanks";
       btn.classList.add("active");
   }
</script>


  </body>
</html>