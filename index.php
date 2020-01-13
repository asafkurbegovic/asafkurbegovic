<!doctype html>

<html>

    <head>
    <title>Asaf Kurbegovic</title>
    
    <link href="styles.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    
    
    <body>
    <div id="infos">
        
    <img id="profile" src="moja.jpg" height="150px" width="150px" alt="Profile picture">
    <h1 style="color: white;" id="name">Asaf Kurbegovic</h1>
        
    <div style="color: white;" id="contact">
        <a class="git"href="https://github.com/asafkurbegovic"><img class="git" src="git.png" href="https://github.com/asafkurbegovic"></a>
        <a class="in" href="https://www.linkedin.com/in/asaf-kurbegovic/"><img src="in.png" class="in"></a><br>
        <a><b>Email:</b>asafkurbegovic@gmail.com</a><br>
        <a><b>Phone:</b>+38762340045</a>
    </div></div>
        
    <div id="objective" >
        <h3><b>OBJECTIVE</b><br></h3><p><i>Student of Computer Science at IUS. Enthusiastic, hard-working and great working
        habits, looking for opportunity to work in place where I can apply current skills and
        expand experience and knowledge while working on real projects</i></p>
    </div>
        <br>
    <div id="education">
        <img id="edu" src="edu.png" height="100px">
        <h3>EDUCATION</h3>
        <b>INTERNATIONAL UNIVERSITY OF SARAJEVO</b><br><i>
Bachelor of Computer Science</i>
        <ul><b><i>COMPLETED COURSES:</i></b>
            <li>Introduction to Programming</li>
            <li>Advanced Programming</li><li>Computer Architecture</li><li>Web Development</li>
        
        </ul>
        
    </div>
        
        <br>
    <div id="skill">
        <div id="animate">
        <h3>TECHNICAL SKILLS</h3>
        <ul><i>
            <li>Ability to write and compile program in Java & C++</li>
            <li>Knowledge of HTML, CSS</li>
            <li>Familiarity with Python and JavaScript</li>
            <li>Understanding of Object Oriented Programming and work in Android Studio</li>
            <li>Effective verbal and written communication skills</li></i>
        
        </ul>
        </div>
    </div>
        
        <br>
    <div id="projects">
        <h3>PROJECTS</h3>
        <ul>
            <li>TIC TAC TOE</li>
            <dd>Simple Java game for two players</dd><br>
            <li>PARKING SENSORS</li>
            <dd>Ultrasonic parking sensors for cars connected to Arduino with C code.</dd><br>
            <li>EASY DECISION</li>
            <dd>Simple app made in Android Studio with Java generating random number as
unpredictable decision.</dd>
        
        </ul>
        
    </div>

    <div class="container" style="margin-top: 50px;">

        <h2>If you want to contact me leave me an email, I will be glad to answer it!</h2>
        <br><br>

        <form>
            <div class="form-group">
                <label for="name"> Name</label>
                <textarea id="mname" class="form-control"  placeholder="Name" rows="1"></textarea>
              </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <textarea class="form-control" id="subject" placeholder="Subject" rows="1"></textarea>
            </div>
            <div class="form-group">
                <label for="body">Email body</label>
                <textarea class="form-control" id="body" placeholder="Mail body" rows="3"></textarea>
              </div>
              <input onclick="sendmail()" type="button" value="Submit" class="btn btn-primary">
          </form>
    </div>

    
        
        
    
    <hr/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script >

        function sendmail(){
            console.log("sending...");
            var name = $("#mname");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
                console.log("passed cond...")
                $.ajax({
                    url: 'mail.php',
                    method:'POST',
                    dataType:'json',
                    data:{
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    }, succes: function (response){
                        console.log(response);
                    }
                });


            }


        }

        function isNotEmpty(caller){
            if(caller.val() == "") {
                caller.css('border', 'solid 1px red');
                return false;  
            }else{
                caller.css('border','');
                return true;}

        }

    
    </script>
    


    </body>

</html>