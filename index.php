<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width:1170px)" href="phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





</head>

<body>
    <div class="timer">
        <h1>Registration closes in <span id="time">03:00</span> minutes!</h1>
    </div>
    <section id="contact">
        <h1 class="title">
            Registration Form
        </h1>
        <div id="contact-box">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="name">Email Id</label>
                    <input type="text" name="email" onblur="validateEmail(this.value);" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="name">Date of Birth</label>
                    <input type="date" name="birth">
                </div>
                <div class="form-group">
                    <label for="name">About Yourself</label>
                    <textarea name="about" cols="34" rows="10" placeholder="Describe About Yourself"></textarea>
                </div>

                <div class="form-group">
                    <label for="name">Captcha</label>
                    <div class="contain">

                        <input type="text" id="capt" readonly="readonly">
                        <div id="refresh"> <img src="images/refresh.png" width="50px" onclick="cap()"></div>

                        <input type="text" id="textinput" placeholder="enter..">
                        <!-- <button onclick="validcap()">Check</button> -->
                        <p id="demo"></p>
                    </div>
                </div>



        </div>





    </section>
    <center><input id="btn" type="submit" name="submit" value="submit"></center>


    </form>

</body>
<script src="javascript/script.js"></script>

<script>

function validateEmail(sEmail) {
  var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

  if(!sEmail.match(reEmail)) {
    alert("Invalid email address");
    return false;
  }

  return true;

}

</script>

<!-- captcha -->

<style>
    body {
        background-image: url('images/bg2.jpg');
        background-repeat: no-repeat;
    }
</style>

</html>





<?php

include("config.php");

if($_POST['submit'])
{
	
	$name = $_POST['name'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];
	$about= $_POST['about'];

	$query=mysqli_query($con,"insert into userdata (name,email,birth,about) values('$name','$email','$birth','$about')");
if($query)
{
	echo "<script>alert('Successfully Registered. Now you can Login');</script>";
	
}
}

?>