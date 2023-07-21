<?php
error_reporting(0);
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'configure.php';
    $UserName = $_POST["UserName"];
    $Passcode = $_POST["Passcode"]; 
    
     
    $sql = "Select * from user where UserId='$UserName' AND UserPassword=md5('$Passcode')";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['UserName'] = $UserName;
        header("location: welcome.php");

    } 
    else{
        //$showError = "Invalid Credentials";
        echo '<script type="text/JavaScript"> 
        alert("Invalid Username Or Password.");
        </script>'
    ;
    }
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Srijan vidhyapeeth</title>
   <link href="signin.css" rel="stylesheet" type="text/css">
   

   <header>
      <div class="nav_up">
      </div>
      <div class="upp_nav"></div>
      <div class="heading">
         <img src="logo.png" alt="Srijan logo" class="logo">
         <div class="school_name"><b>SRIJAN VIDYAPEETH</b></div>
         <img src="img1.jpg" alt="image" class="image_header">
      </div>
      <div class="down_nav"></div>
   </header>
</head>
    <body>
        <form action="index.php" method="post">

           <div class="reg_tit">
                <h2>Registered Yourself</h2>
            </div>
                    
                        <div class="enter">
                      <li><a class="active" href="index.php"class="btn_login">LOGIN</a></li>

                    
                    <li><a href="signup.php"class="btn_login">SIGNUP</a></li>
                        
                        </div>
                        <script>
                            const currentLocation=location.href;
                            const btnItem=document.querySelectorAll('a');
                            const btnLength=btnItem.length
                            for(let i=0;i<btnLength;i++)
                              {
                                   if(btnItem[i].href===currentLocation){
                                     btnItem[i].className="active"
                                        }
                              }
                        </script>
 <div class="login">
    <div>
         <input type="email" name="UserName" class="u" placeholder="username" required size="20">
    </div>
     <div>
        <input type="password" name="Passcode" class="p" placeholder="password" required size="20">
     </div>
      <!--<div class="forgot_pass">
        <a href="#" >Forgot passsword ?</a>
    </div>-->
      <div>
     <button type="submit" class="log-in">Log-In</button>
    </div>
 </div>
        </form>
       
        <div class="image_slider">
    <img src="" id="image">
        
    <script src="welcome.js">
         </script>
 </div>
    </body>

</html>