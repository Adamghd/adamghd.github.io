<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "nbkedd@gmail.com";
    $email_subject = "adamgaff.com form submission";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->



<?php

}
?>

<!DOCTYPE html>

<html>

<head>
  <title>Adam - Digital Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
  <link rel='icon' href='_images/logo.svg' type='icon/png'>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>

  <script src="_js/lottie.js" type="text/javascript"></script>

  <style>
    @media screen and (min-width: 600px) {

      body {
        background-color: #252627;
        overflow: hidden;
      }

      .thanks-div {
        z-index: 999;
        width: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: #222;
        height: 300px;
        border-radius: 8px;
        text-align: center;
        margin: auto;
        margin-top: 5%;
      }

      h2 {
        color: #09d9ff;
        font-family: "Product Sans";
      }

      p {
        font-family: "Product Sans";
        color: white;
      }

      button {
        background: none;
        border: 1px solid #FF095A;
        border-radius: 5px;
        color: #09d9ff;
        letter-spacing: 2px;
        padding: 5px 10px;
        transition: 0.3s;
      }

      button:hover {
        background: #09d9ff;
        color: #FF095A;
        transition: 0.3s;
        cursor: pointer;
        border: 1px solid #09d9ff;
      }

      #bm {
        background-color: #252627;
        display: block;
        position: fixed;
        overflow-x: hidden !important;
        opacity: 1;
        left: 0;
        transform: scale(1.4);
        top: -100px;
        z-index: -10;
      }
      a {
        text-decoration: none;
      }
    }

    @media screen and (max-width: 599px) {
      body {
        background-color: #212121;
        overflow: hidden;
        height: 100%;
      }

      .thanks-div {
        z-index: 999;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: #212121;
        height: 100vh;
        border-radius: 8px;
        text-align: center;
        margin: auto;
        margin-top: -20%;
        font-size: 1.3em;
      }

      h2 {
        color: #09d9ff;
        font-family: "Product Sans";
      }

      p {
        font-family: "Product Sans";
        color: white;
      }

      button {
        background: none;
        border: 1px solid #FF095A;
        border-radius: 5px;
        color: #09d9ff;
        letter-spacing: 2px;
        padding: 5px 10px;
        transition: 0.3s;
      }

      button:hover {
        background: #09d9ff;
        color: #FF095A;
        transition: 0.3s;
        cursor: pointer;
        border: 1px solid #09d9ff;
      }

      #bm {
        background-color: #1a1a1a;
        display: none;
        position: fixed;
        overflow-x: hidden !important;
        opacity: 1;
        left: 0;
        transform: scale(1.4);
        top: -100px;
        z-index: -10;
      }
      a {
        text-decoration: none;
      }

    }
  </style>
</head>

<body>
  <div class="thanks-div">
    <h2>Thanks for reaching out</h2>
    <p>
      I'll get back to you shortly.</p>
    </p>
    <a href=contact.php><button>BACK</button></a>
  </div>

  <div id=bm>
  </div>

  <script src="_js/lottie.js" type="text/javascript"></script>

  <script type="text/javascript">
    lottie.loadAnimation({
      container: document.getElementById("bm"), // the dom element that will contain the animation
      renderer: 'svg',
      loop: false,
      autoplay: true,
      path: '_images/data.json' // the path to the animation json
    });
  </script>
</body>
