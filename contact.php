

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Katelyn Hynes Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="icon" type="image/png" href="./img/favicon-hotair.jpg">
        <link href="https://fonts.googleapis.com/css?family=Orbitron:400,700|Ubuntu:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/grid.css">
        <link rel="stylesheet" href="./styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


    </head>


      <body class="contact-page">
        <header>

          <nav class="hero-nav">

              <ul class="visible-for-medium-and-up">
                  <li><a href="./index.html">Home</a></li>
                  <li><a href="./about.html">About</a></li>
                  <li><a href="./projects.html">Projects</a></li>
              </ul>
              <div class="hamburger-container visible-for-small-only">

                  <div id='mobile-menu' class='menu close'>
                    <button id='close-mobile-menu-button'>
                      <i class="fa fa-times fa-2x" style="color:white" aria-hidden="true"></i>
                    </button>

                      <div class="mobilenav">
                          <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                            <li><a href="./projects.html">Projects</a></li>
                          </ul>
                      </div>
                  </div>

                      <button id="open-mobile-menu-button">
                          <i class="fa fa-bars fa-2x" style="color:white" aria-hidden="true"></i>
                      </button>

                  <script src="./app.js" charset="utf-8"></script>

              </div>


          </nav>


        </header>

          <main>
            <div class="contact">

              <form action="contact.php" class="contact-form" method="POST">
                <form class="contact-form" role="form" name="contact" method="post" action="contact.php">
                  <h1>Contact</h1>
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label"><i class="fa fa-user form-icon"></i>Name</label>
                    <div class=" input-container">
                      <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                      <?php echo "<p class='text-danger'>$errName</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label"><i class="fa fa-at form-icon"></i>Email</label>
                    <div class="input-container">
                      <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                      <?php echo "<p class='text-danger'>$errEmail</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message" class="col-sm-2 control-label"><i class="fa fa-envelope" aria-hidden="true"></i>Message</label>
                    <div class="input-container">
                      <textarea class="form-control" rows="4" name="message" id="message" placeholder="Say hello..."><?php echo htmlspecialchars($_POST['message']);?></textarea>
                      <?php echo "<p class='text-danger'>$errMessage</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-container col-sm-offset-2">
                      <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                      <h6 class="result"><?php echo $result; ?></h6>
                    </div>
                  </div>
                </form>
                </form>
              </div>
          </main>

          <?php
                     $name = $_POST['name'];
                     $email = $_POST['email'];
                     $message = $_POST['message'];

                     $from = 'katelynhynes.com';
                     $to = 'hyneskatelyn@gmail.com';
                     $subject = 'Message from katelynhynes.com';

                     $body = "From: $name\n E-Mail: $email\n Message:\n $message";


                     if (isset($_POST["submit"])) {
                      $name = $_POST['name'];
                      $email = $_POST['email'];
                      $message = $_POST['message'];
                      $from = 'katelynhynes.com';
                      $to = 'hyneskatelyn@gmail.com';
                      $subject = 'Message from katelynhynes.com';

                      $body = "From: $name\n E-Mail: $email\n Message:\n $message";

                      // Check if name has been entered
                      if (!$_POST['name']) {
                      $errName = 'Please enter your name';
                      }

                      // Check if email has been entered and is valid
                      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                      $errEmail = 'Please enter a valid email address';
                      }

                      //Check if message has been entered
                      if (!$_POST['message']) {
                      $errMessage = 'Please enter your message';
                      }


                     // If there are no errors, send the email
                     if (!$errName && !$errEmail && !$errMessage) {
                      if (mail ($to, $subject, $body, $from)) {
                      echo $result='<div class="alert alert-success">Thank you, your e-mail was successful!</div>';
                      }
                      else {
                      echo $result='<div class="alert alert-danger">Make sure to fill out name, email & a short message!</div>';
                      }
                     }
                      }

                      ?>






        <footer>

        </footer>
      </body>
  </html>
