<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
    <link rel="stylesheet" href="jquery-ui.theme.css">
    <link rel="stylesheet" href="jquery-ui.structure.css">
    <link rel="stylesheet" href="jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/Contact.js"></script>
    <script src="jquery-ui.js"></script>
    <script src="js/ContactJquery.js"></script>
    <title>Contact</title>
</head>
<body class="bodydetscont">
     <h1 id="mainHeader">Contact Me</h1>
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
 <form  method="POST" class="formdets">
        <div class="formdets">
          <label for="name">First name: </label>
          <input type="text"  id="name1" title="Enter your first name" placeholder="Your First Name" required>
        </div>
        <div class="formdets">
                <label for="name">Last name: </label>
                <input type="text"  id="name2" title="Enter your last name" placeholder="Your Last Name" required>
         </div>
        <div class="formdets">
          <label for="email">Enter your email: </label>
          <input type="email" name="email" id="email" title="Enter your email" placeholder="e.g johndoe@123.com" required>
        </div>
        <div class="formdets">
            <label for="phone">Phone Number: </label>
            <input type="tel" id="telephone" title="Enter your number ">
       </div>
       <div class="formdets">
        <label for="date">Date of Birth:</label>
        <input type="date" id="datepicker" title="Enter your birthday ">
      </div>
       <div class="formdets">
        <label for="gender">Select your gender:</label>
        <select name="gender" id="gender">
          <option>Male</option>
          <option>Female</option>
          <option>Transgender</option>
          <option>Other</option>
        </select>
      </div>
       
      <div class="formdets">
        <label for="genre">Select a genre:</label>
        <select name="genre" id="genre">
          <option>Rap & HipHop</option>
          <option>Pop</option>
          <option>Soul</option>
          <option>R&B</option>
        </select>
      </div>
      <br>
        <div class="formdets">
          <label for="comments">Comments:</label>
          <textarea style="width:200px; height: 60px;" id="area" title="Comments please" placeholder="Write here"></textarea>
        </div>
        <br>
        <div class="rating">
            <label for="rating">Please rate this website </label>
            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
        </div>
       <button type="button" id="subscribe" >Subscribe for Updates</button>
       <div>
        <a href="mailto:322akk@gmail.com" target="blank">EMAIL US!!!</a>
      </div>
      </form>
</section>
<button id="forSubscribers">For our Subscribers!!!</button>
<div id="dialog" title="We thank you">
  <p>Thank you for being amongst one of our first subscribers. We can't wait to send you all our discounts, curated just for you! Thank you!</p>
</div>

<div class="mapContainerGoogle">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18593.354341484344!2d18.612383!3d54.371659!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd74905b78b453%3A0xff713269250e09a2!2sBudynek%20B%20Wydzia%C5%82u%20Elektroniki%20i%20Informatyki%2C%2080-229%20Gda%C5%84sk!5e0!3m2!1sen!2spl!4v1573298656242!5m2!1sen!2spl"></iframe> 
  </div>
 <div> <h2>What kind of Musician are you?</h2></div>
<section id="wrapper">
        <p>Take this questionnaire to find out!</p>
        
        <form id="quiz">
          <h4>Who are your role models?</h4>
          <label><input id="radio" type="radio" name="qn1" value="ch1">
            People who are expressive
          </label><br />
          <label><input id="radio" type="radio" name="qn1" value="ch2">
            People who are the center of attention
          </label><br />
          <label><input id="radio" type="radio" name="qn1" value="ch3">
            People who aren't afraid to show their emotions
          </label><br />
          <label><input type="radio" name="qn1" value="ch4">
            People who are not afraid to speak out
          </label><br />

          <h4>How would your friends describe you?</h4>
          <label><input id="radio" type="radio" name="qn2" value="ch1">
            One who comes up with the crazy ideas
          </label><br />
          <label><input type="radio" name="qn2" value="ch2">
            Life of the party
          </label><br />
          <label><input type="radio" name="qn2" value="ch3">
            Laid back and relaxed
          </label><br />
          <label><input type="radio" name="qn2" value="ch4">
            Cool and mysterious
          </label><br />
          

          <h4>Which instrument would you play?</h4>
          <label><input type="radio" name="qn3" value="ch1">
            Electric guitar
          </label><br />
          <label><input type="radio" name="qn3" value="ch2">
            Piano
          </label><br />
          <label><input type="radio" name="qn3" value="ch3">
            Guitar
          </label><br />
          <label><input type="radio" name="qn3" value="ch4">
            Drums
          </label><br />
          
 
          <h4>During the weekends, where would you be found?</h4>
          <label><input type="radio" name="qn4" value="ch1">
            In a party doing all sorts of drugs
          </label><br />
          <label><input type="radio" name="qn4" value="ch2">
            On stage performing
          </label><br />
          <label><input type="radio" name="qn4" value="ch3">
            Home with your family?
          </label><br />
          <label><input type="radio" name="qn4" value="ch4">
            In the studio, writing your next hit
          </label><br />

          <h4>What is your second greatest passion after music?</h4>
          <label><input type="radio" name="qn5" value="ch1">
            Extreme sports
          </label><br />
          <label><input type="radio" name="qn5" value="ch2">
            Dancing
          </label><br />
          <label><input type="radio" name="qn5" value="ch3">
            Your farm, located in the country side
          </label><br />
          <label><input type="radio" name="qn5" value="ch4">
            Serving the community
          </label><br />
          <button type="reset" id="reset" onclick="resetAnswer()">Reset</button>
        </form>
        <button type="submit" id="submit" onclick="tabulateAnswers()">Submit Your Answers</button>
        
        
        <div id="answer">Your result will show up here!</div>
</section>
<a href="#content">Go to the top of the page</a>
<footer class="footer">Copyright, Allan Kirui, 183036</footer>
</body>
</html>