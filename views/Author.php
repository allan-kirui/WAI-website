<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/author.css">
    <link rel="stylesheet" type="text/css" href="css/main.css"> 
    <script src="js/Author.js"></script>
    <title>The Author</title>
</head>
<body class="authorDets">  
     <h1>The Author</h1>
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
    <h2>Pictures</h2><br><br>
      <div class="gallery">
            <img src="Images/Me.jpg" alt="Allan" width="600" height="400">
         
      </div>
      <div class="gallery">
          <img src="Images/meinblack.jpg" alt="Allan" width="600" height="400">

    </div>
    <div class="gallery">
        <img src="Images/20190421_134838.jpg" alt="Allan" width="600" height="400">
      
  </div>
    <div class="gallery">
        <img src="Images/Smallme.jpg" alt="Allan" width="600" height="400">
      
  </div>
  <div class="gallery">
      <img src="Images/trainme.jpg" alt="Allan" width="600" height="400">
   
</div>
<div class="gallery">
    <img src="Images/grupa.jpg" alt="Allan" width="600" height="400">
  
</div>
   </section>
   <section id="authContent">
     <h2>Description</h2>
   <div class="authDets">
     The amazing author, <b><i> Allan Kirui</i></b>, who is also a singer, song-writer, producer, dancer, actor,programmer, investor, chef, baker, generally a multi-faceted human being, decided to bless all of us with his amazing skills in creating this webpage. You can see his artistic vision in the color ways of the web page and how it all meshes well together with everything.
     Born in <b>3rd March, 2000</b> , a new dawn of the century. He came to change the world. And we are all lucky enough to exist in the same time-frame as him.
    </div>
<div id="circleSVG">  
  <svg>
    <circle fill="orange" cx="150" cy="50" r="50"  />
    <circle id="Circle"  r="30" cx="50" cy="50" fill="blue-green"/>
    <animate 
      xlink:href="#Circle"
      attributeName="cx"
      from="-20"
      to="115%" 
      dur="10s"
      begin="0s"
      repeatCount="indefinite"
      fill="freeze" />
  </svg>
</div> 
    <table id="table">
     <tr> 
       <th colspan="2">Experience with Music</th>
    </tr>
    <tr> 
        <th>Genre</th>
        <th>Years</th>
     </tr>
     <tbody class="tbody">
        <tr>
            <td>Hip Hop</td>
            <td>6 Years</td>
          </tr>
          <tr>
              <td>Afro Beats</td>
              <td>15 Years</td>
          </tr>
      <tr>
        <td><input type="text" class="tableInput"></td>
        <td><input type="text" class="tableInput"></td>
      </tr>
      
      </tbody>
    </table>
    <button type="button" id="btnTable">Add to Table</button>
  </section>
   <a href="#content">Go to the top of the page</a>
  <footer class="footer">Copyright, Allan Kirui, 183036</footer>
</body>
</html>