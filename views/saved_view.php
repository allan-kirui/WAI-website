<?php
  //session_start();
?>
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
  <h1>Saved</h1>
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
        if(!isset($_SESSION['user_id']))
        {
            echo '<a href="views/login_view.php" class="bttn">Login</a>';
        }
        else
        {
            echo '<a href="logout.php" class="bttnLout">Logout</a>';
        }
       ?>
   </div>

   <section>
   
   </section>
   <section id="gallery-links">
       <div class="wrapper">
           <div class="gallery-container">
               <form method="post" enctype="multipart/form-data">
                    <?php
                    $db = get_db();
                   
                    $items=$db->img_col->find();
                   
                    $i =0;
                            if(isset($_SESSION['rows'])&&!empty($_SESSION['rows']))
                        {
                            $var = $_SESSION['rows'];
                            foreach($items as $items){
                                 
                                if(array_keys($var, $items['_id']))
                                {
                                echo '<div class = "gal"><a href="'.$items['watermarkpath'].'">
                                <input type="checkbox" name ="imageTitle[]" value='.$items['_id'].' '.(array_keys($var, $items['_id'])? 'checked="checked"':"").'></input>
                                <div style="background-image:url('.$items['filepath'].'); height:125px; width:200px;">
                                </div>
                                <h4>'.$items['title'].'</h4>
                                <p>'.$items['author'].'<p>
                                </a></div>';
                                }
                                $i++;
                    }
                        echo ' <button type="submit"  name="checkboxDelete" class="bttn">Delete the selected</button>';
                    }else{
                        echo '<p>No saved images yet</p>'.'</br>';
                    }
                    ?> 
                </form>
            </div> 
       </div>
       
       </section>  
       

</body>
