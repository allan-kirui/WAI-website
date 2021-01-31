<?php// session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blakk</title>
       
        <link rel="stylesheet" type="text/css" href="css/gallery.css"> 
        
    </head>

 <body class="bodydets">
  <h1>Gallery</h1>
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
   <div class="buttn">
       <?php
        include '../views/login_option.php';
       ?>
   </div>

   <section>
   <?php
        if(isset($_GET['uploads'])){
            $uploadCheck = $_GET['uploads'];
            errorPrint($uploadCheck);
        }
    ?>
   </section>
   <section id="gallery-links">
       <div class="wrapper">
           <div class="gallery-container">
               <form  method="post" enctype="multipart/form-data">
                    <?php
                    include_once 'gallery-cont_view.php';
                    ?> 
                    <button type="submit"  name="checkboxUp" class="bttn">Save The selected</button>
                </form>
            </div> 
       </div>
       
       </section>  
       <section id="form-upload">
        <div class="form-dets">
            <form   method="post" enctype="multipart/form-data">
                <?php
                include_once '../views/form_view.php'
                ?>
            </form>
         </div>
        </section>

</body>
