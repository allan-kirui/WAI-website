
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blakk</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <script SameSite="None" Secure src="https://use.fontawesome.com/05ea594bfa.js"></script>
        <script src="js/index.js"></script>
        
    </head>

 <body class="bodydets">
  <h1>Music-The Art</h1>
   <header class="header">
    <div class="nav"> 
     <nav>
     <button class="menubtn">Menu</button> <!--Opens the menu-->
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
  <div class="music" >
      <br>
      <br>
        <h3>The greatest gift? Hello, today is <?=date('l, F jS, Y'); ?>.</h3>
   <p>
        Music is a vital part of our lives. Music is one of the very defining parts of our souls. How a person turns out as they grow up is greatly influenced by the types of music he/she listens to.
        When we are sad we turn to the soulful genres of music. We let our tears fall, as we connect with the singer. In such moments, we feel everything around us like never before. One of the beautiful effects of music. We don’t only turn to music when we are sad, but also when we want to be happy. According to <a href="https://www.wired.com/2011/01/the-neuroscience-of-music/" target="_blank">research</a> listening to music triggers the release of dopamine in our brains. Dopamine is a neurotransmitter that promotes feelings of happiness and excitement.
        
        All these and so much more are reasons as to why music more so singing is my hobby.
    </p>
  <div class="thumbnail">
  <img src="Images/download.jpg" alt="picture of musical notes">
  <img src="Images/images.jpg" alt="Picture of skeleton playing guitar">
  </div>
  </div>
  <div class="singing">
      <h3>Singing</h3>
      <p>
        I grew up to the influences of the popular early 2000s and late 90s American Music. American culture is more so, the world’s culture. They produce media and we happily consume it.
        From the legends like Michael Jackson, Whitney Houston to the currently famous pop stars of my generation, my love of singing came from all of them.
        One of my greatest influences is <a href="https://www.rihannanow.com/" target="_blank">Rihanna</a>, a strong black immigrant, from the left side of the tiny island, Barbados. She has made a name for herself, turned her family name,<a href="https://www.fenty.com/us/en/home" target="_blank">Fenty</a>, to a billion-dollar worth company. She represents everything I want to be strong, independent and unapologetic.
        From her various music tastes, reggae, pop, and hip-hop which have all been portrayed into her critically acclaimed albums. These sounds have all become dear to me. Taking me to a different world as I sit on the bus to school, starting my day on the right note.
     </p>
  </div>
  <div class="row">
     <div class="imgbox"></div>
     <div class="imgbox2"></div>
  </div>
  <br>
  <div >
       <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" SameSite="None" Secure style="width:100%;max-width:660px;overflow:hidden;background:transparent;"  src="https://embed.music.apple.com/us/album/love-on-the-brain/1440933869?i=1440934115&app=music"></iframe> 
  </div>
  <button class="button button-like">
      <i class="fa fa-heart"></i>
      <span>Like</span>
    </button>
    
    
    
  <div class="muziki">
      <h3>Kenyan Music</h3>
      <p>Growing up in Nairobi, Kenya. I got exposed to all kinds of music. Unlike many cities in the world, Nairobi’s very eccentric public transportation is something to behold. 
        Music blasting, conductors shouting on the streets trying to attract customers from all over. Frankly, you have to <a href="https://www.youtube.com/watch?v=c8sStE9p4QM&t=31s" target="_blank">see it</a> to believe it. 
        The popular Matatu culture.
      </p>
      <div class="thumbnail">
        <img src="Images/matatu.png" alt="picture of a matatu">
        <img src="Images/interior.jpg" alt="interior of a matatu">
      </div>
      <p>The Kenyan music scene is quite different compared to Polish music. In Kenya, immediately a song comes on it is an unspoken rule that you have to dance. 
        I may not be the greatest dancer in the world but growing up in Africa has made me a lover of the art.
         Many international artists are influenced by Afro-Beats, which has given them international hits. African music has that special something that makes you want to dance and sing along. 
         One of our greatest musicians is the popular boy band group <a href="https://sauti-sol.com/" target="_blank">Sauti Sol</a>. They have sung songs praising women, encouraging people to work hard and love each other.
          I am pretty sure our ancestors are proud of them.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore cupiditate nemo, aspernatur modi blanditiis soluta maiores quibusdam. Dicta sunt, nostrum reiciendis sapiente, culpa, dolor ipsa quis recusandae voluptate obcaecati omnis.
      </p>
  </div>
  <div class="row">
      <div class="imgbox3"></div>
      <div class="imgbox4"></div>
  </div>
  <br>
   <div>
      <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" SameSite="None" Secure style="width:100%;max-width:660px;overflow:hidden;background:transparent;"  src="https://embed.music.apple.com/us/album/live-and-die-in-afrika/1058948967?i=1058949246&app=music"></iframe>
   </div>
   <br>
   <hr>
   <div class="container">
     <div id="slideshow"></div>
   </div>
   <div class="Genre">
     <fieldset>
       <legend>Insert Favourites</legend>
       <input id="inpGenre" type="text" placeholder="Enter favourite Genre">
       <input id="inpAlbum" type="text" placeholder="Enter example of album">
       <button type="button" id="btnInsert">Insert Data</button>
     </fieldset>
     <fieldset>
       <legend>Local Storage output</legend>
       <div id="isOutput">
       </div>
     </fieldset>
   </div>
  
   <!-- <div class="shopping-cart">
      
      <div class="title">
        Shopping Bag
      </div>

      <div class="item">
        
        <div class="image">
          <img src="Images/anti.jpg"/>
        </div>

      
        <div class="like-content">         
         <button class="btn-secondary like-review">
              <i class="fa fa-heart" aria-hidden="true"></i> Like
          </button>  
        </div>
            
            
        <div class="description">
          <span>Anti</span>
          <span>The Deluxe version</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
              <img src="Images/add_circle_outline-24px.svg"/>
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
              <img src="Images/remove_circle_outline-24px.svg"/>
          </button>
        </div>
        <div class="total-price">50$</div>
      </div>

      <div class="item">
        <div class="image">
          <img src="Images/melanin.jpg"/>
        </div>
         <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>
        <div class="description">
            <span>melanin</span>
            <span>The Sauti Sol song</span>
        </div>
        
        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="Images/add_circle_outline-24px.svg"/>
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="Images/remove_circle_outline-24px.svg"/>
            </button>
         </div>
         <div class="total-price">20$</div>
        </div>
        
   </div> -->
  <br>
  <a href="#content">Go to the top of the page</a>
  <footer class="footer">Copyright, Allan Kirui, 183036</footer>

  </section>
 </body>
</html>
