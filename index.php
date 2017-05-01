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
    <link rel="stylesheet" href="main.css">  
    
    <!--  Plug-ins jQuery, jQuery ScrollTO, MatchHeight.js   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>  
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
  </head>
  
    
<body>
    <header>
      <nav class="navbar fixed-top navbar-toggleable-md navbar-default">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </button>
              <a class="navbar-brand" href="https://www.twitch.tv/"><i class="fa fa-twitch " aria-hidden="true"></i></a>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href="#featured">Featured</a>
                  <a class="nav-item nav-link" href="#search">Search</a>
                  <a class="nav-item nav-link" href="#contact">Contact</a>
                </div>
              </div>
        </nav><!--END OF NAVIGATION-->
            <div class="container" id="success"><? echo $successMessage; ?></div>
            <div id="home" class='container text-center console-container'>
                <h1>Hi I'm Sergio and I <span id='text'></span>
                <div class='console-underscore' id='console'>&#95;</div> websites.</h1>
                
            </div><!--END OF FRONT PAGE TITLE -->
            <button class="button-main">Hire me!</button>
            
      
        
        <div id="scroller" class="center">
        <p>More about me</p>
        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </div><!--END OF FRONT PAGE CTA-->    
      
      </header> 
      
      <main class="container" id="content">
        <h2 class="text-center">ABOUT ME</h2>  
        <div class="row">
          <div class="col-md-3">
            <h2>My pic</h2>
          </div>
          <div class="col-md-9">
            <p>Aute eu iudicem ea anim quibusdam de multos tamen, mandaremus ita dolor offendit 
              id esse an si duis mandaremus, tamen laborum nescius eu ad quae varias e 
              expetendis, dolore ea cernantur a ut e legam officia. Hic quorum sempiternum et 
              aut id anim aute minim, est sunt arbitror pariatur ea ut doctrina e quibusdam. 
              In noster quae tamen vidisse, o sunt o sint. Aut multos quo esse, ab quae fugiat 
              culpa nostrud, sed dolor expetendis cernantur aut tempor nam occaecat. Voluptate 
              esse ut consequat illustriora, ne labore instituendarum. A varias exercitation, 
              excepteur ab duis eu nescius ubi sint commodo, est nulla exercitation, ab culpa 
              deserunt despicationes ut varias laboris instituendarum e admodum eu fugiat 
              laborum, doctrina ne quid. Expetendis ita doctrina, possumus veniam veniam 
              ullamco minim, eiusmod distinguantur sed expetendis, duis aut senserit ubi 
              aliqua. Nam ex sempiternum, an nam magna fugiat veniam.</p>
          </div>    
        </div>
        
          <h2 class="text-center">WHAT I DO</h2>
          <div class="row text-center">
            <div class="col-md-4">
              <h3>Icon</h3>    
              <p>Aute eu iudicem ea anim quibusdam de multos tamen, mandaremus ita dolor offendit 
              id esse an si duis mandaremus</p>
            </div>
            <div class="col-md-4">
              <h3>Icon</h3>     
              <p>Aute eu iudicem ea anim quibusdam de multos tamen, mandaremus ita dolor offendit 
              id esse an si duis mandaremus</p>
            </div>
            <div class="col-md-4">
              <h3>Icon</h3>     
              <p>Aute eu iudicem ea anim quibusdam de multos tamen, mandaremus ita dolor offendit 
              id esse an si duis mandaremus</p>
            </div>  
          </div>
          <h2 class="text-center">Skill Set</h2>
          <div class="row text-center">
            <div class="col-md-4">
              <h3>Icon</h3>    
              <p>Aute eu iudicem ea anim quibusdam de multos tamen, mandaremus ita dolor offendit 
              id esse an si duis mandaremus</p>
            </div>
            <div class="col-md-4">
              <h3>Icon</h3>     
              <p>Aute eu iudicem ea anim quibusdam de multos tamen, mandaremus ita dolor offendit 
              id esse an si duis mandaremus</p>
            </div>
            <div class="col-md-4">
              <h3>Icon</h3>     
              <p>Aute eu iudicem ea anim quibusdam de multos tamen, mandaremus ita dolor offendit 
              id esse an si duis mandaremus</p>
            </div>  
          </div>
      </main>
      <div class="container-fluid">
        <h2 class="text-center">Current Projects</h2>
        <div class="row text-center">
          <div class="col-sm-6 col-md-4 col-lg-3 add-space">
            <div class="card box">
                <img class="card-img-top img-responsive" src="images/twitch.png" alt="Twitch Streaming App">
                <div class="card-block">
                    <h4 class="card-title">Twitch Streaming App</h4>
                    <p class="card-text">List live featured channels</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> 
          </div>
            
          <div class="col-sm-6 col-md-4 col-lg-3 add-space">
            <div class="card box">
                <img class="card-img-top img-responsive" src="images/weather.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">List current local weather</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
          </div>
            
          <div class="col-sm-6 col-md-4 col-lg-3 add-space">
            <div class="card box">
                <img class="card-img-top img-responsive" src="images/wiki.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Search any wiki article.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
          </div>  
        
          <div class="col-sm-6 col-md-4 col-lg-3 add-space">
            <div class="card box">
                <img class="card-img-top img-responsive" src="images/landingPage.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">The perfect landing page.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
          </div>
        </div><!--END OF CARD ROW-->  
      </div><!--END OF PROJECTS SECTION-->
      
      <div class="container" id="form-container">
        <h2 class="text-center">Contact Me</h2>
        
          
        <form method="post">
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Name*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tell me your name">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email*</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="What's your email?">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="message">Description*</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tell me about your project"></textarea>
                    <br>
                    <label>Required*</label>
                </div>
                
            </div>
            <div class="text-center">
                <button id="sendButton" type="submit" class="button-submit">Send</button>
            </div>
        </form>
        <div id="error"><? echo $error; ?></div>
      </div> <!--END OF CONTACT FORM CONTAINER-->
    
      <footer>
        <h2>Footer section</h2>
        <p>eu iudicem ea anim quibusdam de multos tamen, mandaremus ita dolor offendit id esse an si duis mandaremus</p>
      </footer>
      
<script type="text/javascript">

    $("#scroller").on('click', function (){
          $(window).scrollTo("#content", 800);
      });

      // function([string1, string2],target id,[color1,color2])    
      consoleText(['Build', 'Code', 'Design'], 'text',['#33996e','#33996e','#33996e']);

    function consoleText(words, id, colors) {
      if (colors === undefined) colors = ['#b57070'];
      var myTite ="Hi, Im Sergio";
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
          }, 1000)
        } else if (letterCount === words[0].length + 1 && waiting === false) {
          waiting = true;
          window.setTimeout(function() {
            x = -1;
            letterCount += x;
            waiting = false;
          }, 1000)
        } else if (waiting === false) {
          target.innerHTML = words[0].substring(0, letterCount)
          letterCount += x;
        }
      },80)
      window.setInterval(function() {
        if (visible === true) {
          con.className = 'console-underscore hidden'
          visible = false;

        } else {
          con.className = 'console-underscore'

          visible = true;
        }
      }, 400)
    }
      
    //MatchHeight function used on Projects section  
    $(".box").matchHeight();

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