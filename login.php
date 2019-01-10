<?php
     session_start();
    require 'database.php';

   
     if (isset($_POST['reg']))
    {       
            echo $_POST['user'];
          $user = $_POST['user'];//username
          $pwd = $_POST['pwd'];//password
          $email = $_POST['email'];//E-mail Id
          
          $sql = "SELECT * FROM login_info WHERE username ='$user'";
          $result = mysqli_query($conn,$sql);


          if(!$row = mysqli_fetch_assoc($result))
          {

             $sql = "INSERT INTO login_info (username,pwd,email_id)
              VALUES('$user','$pwd','$email')";
              $result = mysqli_query($conn,$sql);
              if($result)
              {
                header("Location: success1.php");
                //echo("REGISTRATION SUCCESSFULL");
              }
              else
              {
                echo "Error:".$sql."<br>".mysqli_error($conn);
              }
              #mysqli_close($conn);
          }
          else {
            echo "<h6>Error: </h6>".$user."<span> Is already Registered</span>";
          }
    }
    if (isset($_POST['login']))
    {       

            $user = $_POST['user'];//username
            $pwd = $_POST['pwd'];//password

            $sql = "SELECT * FROM login_info WHERE username='$user' AND pwd='$pwd'";
            $result = mysqli_query($conn,$sql);
            if(!$row = mysqli_fetch_assoc($result))
            {
              echo "Your Username or password is incorrect !";
            }
            else {
              echo "You are logged in";
              $_SESSION['username'] = $row['username'];
            }
            header ("Location: HomePage2.php");
          }
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<div class="container">
  <div class="info">
    <h1 style = "text-decoration: underline; font-weight: bold;">Welcome to </h1>
    <h1 style = "text-decoration: underline; font-weight: bold; color: #b30000; ">"Blog-A-Thon"</h1>
    <h2 style = "font-size: 15px; "> Kindly Login OR Sign Up if new! </h2>
  </div>
</div>
<div class="form" >
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="register-form"   action = "" method = "POST">
    <input type="text" name = "user" placeholder="Name"/>
    <input type="password" name = "pwd" placeholder="Password"/>
    <input type="text" name = "email" placeholder="E-mail Address" vlaue=""/>
    <button type = "submit" name = "reg">CREATE -> </button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="login-form" action = "" method = "POST">
    <input type="text" name="user" placeholder="Username"/>
    <input type="password" name = "pwd" placeholder="Password"/>
    <button type = "submit" name = "login">LOGIN -></button>
    
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
