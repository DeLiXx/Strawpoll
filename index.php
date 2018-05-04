<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script src="main-Javascript.js" ></script>

        <title>Testeroni Maccaroni</title>
    </head>
    <header>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightgrey;">
                  <div class="navbar-brand navHome">
                    <a  class="logo" href="javascript:updateBody('Navigation/home.html')">
                      <img src="Logo.png" alt="">
                    </a>
                  </div>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                            <a class="nav-link navHome" href="javascript:updateBody('Navigation/home.html')">Home
                              <span class="sr-only">(current)</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link navNew" href="javascript:updateBody('Navigation/newStrawpoll.html')">New poll</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link navContact" href="javascript:updateBody('Navigation/Contacts.html')">Feedback</a>
                          </li>
                        </ul>
                    </div>
                  </nav>
              </div>
          </div>
    </header>
    <body>
      <form action="PhpStuff/email.handler.php" method="post" role="form">
    <div class="form-group">
        <input type="text" name="name" class="form-control" id="Name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" id="Email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="subject" id="Betreff" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="Nachricht" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
        <div class="validation"></div>
    </div>
    
    <button type="submit" class="btn btn-info">Send form</button>
</form>
      <?php
        echo "Jap1 PHP funktioniert";
      ?>
      <div class="body container">

        <script>updateBody("Navigation/home.html")</script>

      </div>
    </body>
</html>