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
       <button class="menubtn">Menu</button> 
       <?php
       include '../views/nav.php';
       ?>
       </nav>
      </div>
     </header>

    <form  method="post" >
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <div class="error">
          <?php
            
            if(isset($_GET['signup'])){
                $uploadCheck = $_GET['signup'];
                errorPrint($uploadCheck);
            }
         ?>
          </div>
          <label for="username"><p>Username</p></label>
          <input type="text" placeholder="Enter Username" name="username"  required="required">

          <label for="email"><p>Email</p></label>
          <input type="text" placeholder="Enter Email" name="email"  required="required">
      
          <label for="pswd"><p>Password</p></label>
          <input type="password" placeholder="Enter Password"  name="pswd" required="required">
      
          <label for="pswd-repeat"><p>Repeat Password</p></label>
          <input type="password" placeholder="Repeat Password"  name="pswd-repeat" required="required">
          
          <p>By creating an account you agree to our <a href="https://policies.google.com/terms" target="blank">Terms & Conditions.</a></p>

          <button type="submit" name="submit" class="registerbtn">Register</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="/login_view">Sign in</a>.</p>
        </div>
      </form>
      
</html>