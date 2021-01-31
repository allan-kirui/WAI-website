<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blakk</title>
        <link rel="stylesheet" type="text/css" href="css/success.css">     
    </head>

    <body>
    <div id='card' class="animated fadeIn">
        <div id='upper-side'>
        <i class="fa fa-check"></i>
        <h3 id='status'> Success </h3> 
        </div> 
        <div id='lower-side'>
            <?php 
            include_once '../business.php';
            successCheck();
            ?>
        </div>
        </body>
    </div>
</html>