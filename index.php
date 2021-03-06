<?php

    $error = "";
    $successMessage = "";

    if($_POST){


        if(!$_POST["email"]) {

            $error .= "An email address is required.<br>";

        }
        if(!$_POST["name"]) {

            $error .= "Enter your name or company.<br>";

        }
        if(!$_POST["message"]) {

            $error .= "Tell me about your project.<br>";

        }

        //VALIDATE EMAIL
        if ($_POST['
        email'] && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is invalid.<br>";
        }

        if ($error != "") {

            $error = '<div class="alert alert-warning" role="alert"><p><strong>'.$error.'</strong></p></div>';

        } else {
            //SET EMAIL VARIABLES
            $emailTo = "sergiordz7@gmail.com";
            $subject = $_POST['name'];
            $message = $_POST['message'];
            $headers = "From: ".$_POST['email'];


            //SEND EMAIL FUNCTION
            if(mail($emailTo, $subject, $message, $headers)) {
                //DISPLAY SUCCES MESSAGE
                $successMessage = '<div class="alert alert-success" role="alert"><p><strong>Your message was sent. I will get back to you as soon as I can.</strong></p></div>';
            } else {
                //DISPLAY ERROR MASSAGE IF EMAIL FAILS
                $successMessage = "";
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message was not sent, please try again later.</strong></p></div>';
            }

        }
    }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Other CSS files-->
    <link rel="stylesheet" href="stylesheet.css">

    <!--  Plug-ins jQuery, jQuery ScrollTO, MatchHeight.js   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>

    <link rel="icon" type="image/png" href="icons/titletag.ico">
    <title>SergDev</title>
  </head>

<body>
    <header>
        <div class="container" id="success"><? echo $successMessage; ?></div>
        <div id="home" class='text-center console-container'>
            <h1>Hi, I'm Sergio and I Build</h1>
            <h1><span id='text'></span>
            <div class='console-underscore' id='console'>&#95;</div></h1>
        </div><!--END OF FRONT PAGE TITLE -->

        <button type="button" class="button-main" id="scrollToContact">I'm Available!</button>

        <div id="scroller" class="center">
          <p>More about me</p>
          <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </div><!--END OF FRONT PAGE CTA-->
    </header><!--END OF TITLE PAGE-->

    <div class="container-fluid" id="aboutMe">
        <h2 class="text-center">ABOUT ME</h2>
        <div class="row">
          <div class="col-md-4 text-center center">
            <img class="image-circle" src="images/profile.jpg" width="225" height="225">
          </div>
          <div class="col-md-8">
            <p class="add-space">Hello, I am Sergio Rodriguez a junior front-end developer
              with a strong passion for technology. I have a Bachelor’s degree in Computer
              Engineering Technology where I was first introduced to programming. I am
              currently a student of Free Code Camp, an open source community that helps
              people learn development by building projects and helping non-profits. Free
              Code Camp has helped me transition from lower level programming into the world
              of web development, more specifically Front-End. Although it has been a tough
              journey, I’ve focused my learning around fundamentals to better understand the
              current and new trends of the web. Feel free to navigate through my portfolio
              and look under the hood of my projects. I am available for hire, so if you have
              a challenging project in mind or an interesting position available get in touch!</p>
          </div>
        </div>
    </div><!--END ABOUT ME-->

    <div class="container-fluid" id="skills">
      <h2 class="text-center">EXPERTISE</h2>
      <div class="row text-center">
        <div class="col-md-4">
          <h3>Code <i class="fa fa-code" aria-hidden="true"></i></h3>
          <p>Weather its a simple landing page, a blog, or an e-commerce site, I can assist in bringing your idea to life.</p>
        </div>
        <div class="col-md-4">
          <h3>Design <i class="fa fa-paint-brush" aria-hidden="true"></i></h3>
          <p>Apply best user experience practices and making your design responsive and mobile-ready, enhancing the way the user interacts and sees your content.</p>
        </div>
        <div class="col-md-4">
          <h3>Communicate <i class="fa fa-users" aria-hidden="true"></i></h3>
          <p>Collaborate and communicate every step of the way to make sure deadlines and requirements are being met.</p>
        </div>
      </div>
      <hr/>
      <h2 class="text-center">SKILL SET</h2>
      <p class="text-center">These are some of my skills, frameworks, and tools that I've used to complete past projects.</p>
      <div class="row text-center">
        <div class="col add-top-padding">
          <h3>HTML</h3>
          <img src="icons/html5Logo.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>CSS</h3>
          <img src="icons/CSSLogo.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>JavaScript</h3>
          <img src="icons/jsLogo.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>Bootstrap</h3>
          <img src="icons/bootstrapLogo.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>jQuery</h3>
          <img src="icons/jqueryLogo1.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>GitHub</h3>
          <img src="icons/gitHub.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>Git</h3>
          <img src="icons/gitLogo.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>DOM</h3>
          <img src="icons/dom2.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>Atom Editor</h3>
          <img src="icons/atomIcon.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>Responsive Web Design</h3>
          <img src="icons/responsiveIcon.png" alt="icon">
        </div>
        <div class="col add-top-padding">
          <h3>PHP</h3>
          <img src="icons/php-sm.png" alt="icon">
        </div>

      </div>

      <!--Trigger Resume Modal-->
      <button type="button" class="button-submit add-margin" data-target="#resume" data-toggle="modal">Resume</button>

      <!-- Modal Window For Resume -->
      <div class="modal fade" id="resume" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sergio Rodriguez</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

  <!--RESUME INSIDE MODAL-->
  <div class="modal-body">
    <div id="resume">
      <h4>Objective</h4>
      <p>Currently taking in freelance projects or an entry front-end development role.</p>
      <hr/>
      <h4>Education</h4>
      <hr/>
      <p>Bacherlor of Science, Computer Engineering Technology</p>
      <p>University of Houston <span class="date">Houston, Tx</span></p>
      <div class="row">
        <div class="col">
          <ul>
            <li>AC/DC Circuit Analysis</li>
            <li>Mircroprocessor Architecture</li>
            <li>Digital Systems</li>
            <li>Sensor Applications</li>
          </ul>
        </div>
        <div class="col">
          <ul>
            <li>Embedded Systems</li>
            <li>Computer Networks</li>
            <li>Advance Micro-Networks</li>
            <li>Information Systems Application Development</li>
          </ul>
        </div>
      </div>
      <hr/>
      <h4>Experience</h4>
      <hr/>
      <h3>Miguel's Carpentry and Construction</h3>
      <p>I've worked for a small family business in carpetry for a number of years where I got to
        experince a diverse number of roles.</p>
      <ul>
        <li>Design, build, install interior carpentry <span class="date">2012-2014</span></li>
        <li>Promoted to lead carpenter <span class="date">2014-Present</span></li>
          <ul>
            <li>Interpret blueprints and schematics from clients and ensured labor is completed accordingly</li>
            <li>Estimate cost, time, and materials required for contruction projects</li>
            <li>Implement safety management initiatives to maintain accident-free workplace</li>
          </ul>
      </ul>
      <hr/>
      <h4>Skills and Stengths</h4>
      <hr/>
      <div class="row">
        <div class="col" id="left-list">
          <p>Most proficient:</p>
          <ul>
            <li>HTML/CSS</li>
            <li>Javascript</li>
            <li>DOM Manipulation</li>
            <li>Bootstrap</li>
            <li>JQuery</li>
            <li>Github</li>
            <li>Atom editor</li>
          </ul>
        </div>
        <div class="col">
          <p>Also had experience:</p>
          <ul>
            <li class="list-style">Using API's</li>
            <li class="list-style">Responsive Web Design</li>
            <li class="list-style">Git</li>
            <li class="list-style">PHP/Java/C</li>
            <li class="list-style">FTP tools</li>
            <li class="list-style">Databases with SQlite</li>
        </ul>
        </div>
        <div class="col" id="right-list">
          <p>Exporsure to hardware:</p>
          <ul>
            <li class="list-style">Microcontrollers</li>
            <li class="list-style">ARM Cortex M3</li>
            <li class="list-style">Oscilloscopes</li>
            <li class="list-style">Function Generators</li>
            <li class="list-style">Multimeters</li>
        </ul>
        </div>
      </div>
      <hr>
      <h4>Academic Awards in Team Projects</h4>
      <hr/>
        <ul>
          <li class="list-style-main">Placed 2nd in Microprocessor Architecture Team Project (3 members)</li>
            <ul><li class="list-style">Designed an Automatic Brewing Refrigerator, assisted in software development using C.</li></ul>
          <li class="list-style-main">Placed 3rd in Sensor Applications Team Project (4 members)</li>
            <ul><li class="list-style">Designed a Smart Cooling System, team leader, assisted with sensor interfacing.</li></ul>
          <li class="list-style-main">Placed 3rd in Embedded Systems Team Project (4 members)</li>
            <ul><li class="list-style">Designed an Automatic Drink Dispenser with a LCD interface as the menu. Assisted with the design, software, and hardware of the prototype.</li></ul>
        </ul>
      <hr/>
    </div><!--END OF RESUME INSIDE MODAL-->


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button id="download" type="button" class="btn btn-warning"><a href="SergioRodriguez_Resume.pdf" download><i class="fa fa-download" aria-hidden="true"></i> Download</a></button>
            </div>
          </div>
        </div>
      </div><!--END OF MODAL WINDOW-->
    </div><!--END OF SKILLSET SECTION-->

    <div class="container-fluid" id="portfolio">
      <h2 class="text-center">PORTFOLIO</h2>
      <div class="row text-center">
        <div class="col-sm-6 col-md-4 col-lg-3 add-space">
          <div class="card box">
            <img class="card-img-top img-responsive" src="images/twitch.png" alt="Twitch Streaming App">
            <div class="card-block">
              <h4 class="card-title">Twitch Streaming App</h4>
              <p class="card-text">Used Twitch.Tv Api to show online featured channels and find the status and link to any channel of your choosing.</p>
              <a href="http://codepen.io/serg_92/full/MpBgPR/" target="_blank"><button class="button-projects">Live Demo <i class="fa fa-codepen" aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 add-space">
          <div class="card box">
            <img class="card-img-top img-responsive" src="images/weather.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Local Weather</h4>
              <p class="card-text">Simple web app that displays the location, weather, and temperature using the OpenWeatherMap API.</p>
              <a href="http://codepen.io/serg_92/full/QGyQxJ/" target="_blank"><button class="button-projects">Live Demo <i class="fa fa-codepen" aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 add-space">
          <div class="card box">
            <img class="card-img-top img-responsive" src="images/wiki.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Wikipedia Viewer</h4>
              <p class="card-text">A search engine with minimal design that allows users to search for any Wiki articles using the Wikipedia API.</p>
              <a href="http://codepen.io/serg_92/full/ZeYwYw/" target="_blank"><button class="button-projects">Live Demo <i class="fa fa-codepen" aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 add-space">
          <div class="card box">
            <img class="card-img-top img-responsive" src="images/landingPage.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Product Landing Page</h4>
              <p class="card-text">Simple yet effective landing page for any product or business using Bootstrap framework.</p>
              <a href="https://codepen.io/serg_92/full/XREqMd/" target="_blank"><button class="button-projects">Live Demo <i class="fa fa-codepen" aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>
      </div><!--END OF CARD ROW-->
    </div><!--END OF PORTFOLIO SECTION-->

    <div class="contaniner-fluid" id="form-container">
      <div class="container">
        <h2 class="text-center">Contact Me</h2>

        <form method="post">
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name*</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="Tell me your name">
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email*</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="What's your email?">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="message">Description*</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tell me about your project"></textarea>
              <br>
              <label>Required*</label>
            </div>
          </div>
          <button id="sendButton" type="submit" class="button-submit">Send</button>
        </form>
        <div id="error"><? echo $error; ?></div>
      </div> <!--END OF CONTACT FORM CONTAINER-->
      <footer>
        <div class="container text-center">
          <p>Handmade by me <i class="fa fa-copyright" aria-hidden="true"></i> 2017</p>
          <a href="https://www.freecodecamp.com/sergrdz7"><i class="fa fa-free-code-camp fa-lg" aria-hidden="true"></i></a>
          <a href="https://github.com/sergrdz7"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
          <a href="http://codepen.io/serg_92/"><i class="fa fa-codepen fa-lg" aria-hidden="true"></i></a>
          <!-- <a href="#"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a> -->
        </div>
      </footer>
    </div>


<script type="text/javascript">
    //Auto Scroll Effects
    $("#scroller").on('click', function (){
          $(window).scrollTo("#aboutMe", 800);
      });
    $("#scrollToContact").on('click', function (){
          $(window).scrollTo("#form-container", 800);
      });

      // function([string1, string2],target id,[color1,color2])
      consoleText(['Web-sites', 'Landing Pages','Web-apps', 'Internet Things'],'text',['#35bb83','#35bb83','#35bb83','#35bb83']);

    function consoleText(words, id, colors) {
      if (colors === undefined) colors = ['#b57070'];

      var visible = true;
      var con = document.getElementById('console');
      var letterCount = 1;
      var x = 1;
      var waiting = false;
      var target = document.getElementById(id)
      target.setAttribute('style', 'color:' + colors[0])
      window.setInterval(function() {

        if (letterCount === 0 && waiting === false) {
          waiting = true;
          target.innerHTML = words[0].substring(0, letterCount)
          window.setTimeout(function() {
            var usedColor = colors.shift();
            colors.push(usedColor);
            var usedWord = words.shift();
            words.push(usedWord);
            x = 1;
            target.setAttribute('style', 'color:' + colors[0])
            letterCount += x;
            waiting = false;
          }, 800)
        } else if (letterCount === words[0].length + 1 && waiting === false) {
          waiting = true;
          window.setTimeout(function() {
            x = -1;
            letterCount += x;
            waiting = false;
          }, 800)
        } else if (waiting === false) {
          target.innerHTML = words[0].substring(0, letterCount)
          letterCount += x;
        }
      },70)
      window.setInterval(function() {
        if (visible === true) {
          con.className = 'console-underscore hidden';
          visible = false;

        } else {
          con.className = 'console-underscore';
          visible = true;
        }
      }, 400)
    }

    //MatchHeight function used on Projects section
    $(".box").matchHeight();
    $(".col").matchHeight();

    //Send button listenters for Form Validation
    $("form").submit(function (e){
        e.preventDefault(); //Prevents from submitting form
        var error = "";
        //Check name field
        if ($("#name").val() == ""){
            error += "<p>Enter your name or company</p>";
        }
        if ($("#email").val() == ""){
            error += "<p>Enter your email</p>";
        }
        if ($("#message").val() == ""){
            error += "<p>Don't forget to give a brief description</p>";
        }
        //Update error html
        if (error != ""){
            $("#success").html("");
            $("#error").html('<div class="alert alert-warning" role="alert"><p><strong>Oh hey!</strong></p>'+error+'</div>');
        }else{
            //Success Message and Submit Form
            $("form").unbind("submit").submit();
        }



    });

</script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
