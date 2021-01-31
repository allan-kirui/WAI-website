<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Search</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <script SameSite="None" Secure src="https://use.fontawesome.com/05ea594bfa.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="search.js"></script>
        
    </head>
<body class="bodydets">
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
   <section id="content">
<form class="pushdown">
  <input type="text" size="30" id="keyword"  onkeydown = "search()" >
  <div id = "content"></div>
</form>
</section>
</body>
</html>
