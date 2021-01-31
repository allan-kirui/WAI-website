
<div class="dropdown">  <!--Holds whats inside the menu-->
<ul>
  <li><a href="/" >Home</a></li>
  <li><a href="/gallery_view">Gallery</a></li>
  <?php 
  if(isset($_SESSION['user_id'])&&$_SESSION['user_id']!='notuser')
  {
      echo '<li><a href="/saved_view">Saved Images</a></li>';
  }
  else{
    echo '<li><a href="/registration_view">Register</a></li>
    <li><a href="/login_view">Login</a></li>';
  }
  ?>
  <li><a href="/search">Search</a></li>
  <li><a href="/Contact">Contact</a></li>
  
  <li> About</li>
       <ol class="subctn">
        <li><a href="/Author">Author</a></li>
        <li><a href="https://322akk.wixsite.com/7dniwkenii/322akk-wixsite-com-7dniwkenii" target="_blank">My Blog</a></li>
       </ol>    
</ul>
</div>
