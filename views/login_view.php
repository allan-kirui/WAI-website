<?php
  ob_start();
  //session_start();
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blakk</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">       
    </head>
    <header class="header">
        <div class="nav"> 
         <nav>
         <button class="menubtn">Menu</button> <!--Opens the menu-->
         <?php
       include 'nav.php';
       ?>
         </nav>
        </div>
       </header>

    <form  method="post" >
        <div class="container">
          <h1>Login</h1>
          <p>Please fill in this form to login to your account.</p>
          
      
          <label for="email"><p>Email</p></label>
          <input type="text" placeholder="Enter Email" name="email"  required="required">
      
          <label for="pswd"><p>Password</p></label>
          <input type="password" placeholder="Enter Password"  name="pswd" required="required">
      
        
          <button type="submit" name="submit" class="loginbtn">Login</button>
        </div>
      
        <div class="container signin">
          <p>Don't have an account? <a href="/registration_view">Sign up</a>.</p>
        </div>
      </form>
</html>