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
            $("#error").html('<div class="alert alert-warning" role="alert"><p><strong>Oh hey!</strong></p>'+error+'</div>');
        }else{
            //Success Message and Submit Form
            $("form").unbind("submit").submit();
            $("#error").html('<div class="alert alert-success" role="alert"><p><strong>Success</strong></p></div>');
        }
        
        
    
    });





