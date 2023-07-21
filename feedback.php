<?php
error_reporting(0);
$showAlert = false;
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'configure.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
   $visitor = $_POST["visitor"];
    $feedback =$_POST["feedback"];
 
    $toi = $_POST["toi"];
   
        
$sql = "INSERT INTO review (`name`,`email`,`visitor`,`feedback`,`toi`)
VALUES ('$name','$email','$visitor','$feedback',current_timestamp())"; 
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
             session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['UserName'] = $UserName;
            header("location: welcome2.php");
        }



    
}
    

?>

<!DOCTYPE html>
<html lang="en">

<head>

   <title>Srijan vidhyapeeth</title>
   <link href="feedback.css" rel="stylesheet" type="text/css">

   <header>
      <div class="nav_up">
         <nav>
            <ul>
            <li><a href="/myproject/new/index.php"class="up_nav">LOGOUT</a></li>
            <li><a href="/myproject/new/gallary.php" class="d_nav">PHOTOGALLARY</a></li>
               <li><a href="/myproject/new/faqs.php" class="up_nav">FAQs</a></li>
               <li><a href="/myproject/new/feedback.php" class="up_nav">FEEDBACK</a></li>
               <li><a href="/myproject/new/downloads.php"class="up_nav">DOWNLOADS</a></li>
            </ul>
         </nav>
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


   <div class="main_menu">
      <nav>
         <div class="dropdown">
            <button onclick="window.location.href='/myproject/new/main_about.php'" class="dropbtn">ABOUT US</button>
            <div class="dropdown-content">
               <a href="/myproject/new/history.php">HISTORY</a>
               <a href="/myproject/new/vision.php">VISION & MISSION</a>
               <a href="/myproject/new/management.php">MANAGEMENT</a>
               <a href="/myproject/new/five_fold.php">FIVE FOLD EDUCATION</a>
            </div>
         </div>


         <div class="dropdown">
            <button onclick="window.location.href='/myproject/new/school_education.php'" class="dropbtn">SCHOOL EDUCATION</button>
            <div class="dropdown-content">
            <a href="/myproject/new/school_about.php">ABOUT US</a>
               <a href="/myproject/new/features.php">FEATURES</a>
               <a href="/myproject/new/courses.php">COURSES & SCHEMES</a>
               <a href="/myproject/new/five_fold.php">FIVE FOLD EDUCATION</a>
               <a href="/myproject/new/faculty.php">FACULTY &STAFFS</a>
               <a href="/myproject/new/school_activities.html">SCHOOL ACTIVITIES</a>
               <a href="/myproject/new/school_admissions.html">ADMISSIONS</a>
               <a href="/myproject/new/fee.html">FEE SUBMISSION</a>
               <a href="/myproject/new/contact.html">CONTACT US</a>
            </div>
         </div>


         <div class="dropdown">
            <button onclick="window.location.href='/myproject/new/higher_education.php'" class="dropbtn">HIGHER EDUCATION</button>
            <div class="dropdown-content">
               <a href="/myproject/new/calender.php">ACADEMIC CALENDERS</a>
               <a href="/myproject/new/ug.php">UG PROGRAMMES</a>
               <a href="/myproject/new/pg.php">PG PROGRAMMES</a>
               <a href="/myproject/new/phd.php">PH.D. PROGRAMMES</a>
               <a href="/myproject/new/certificate.php">CERTIFICATE & DIPLOMA PROGRAMMES</a>
               <a href="/myproject/new/fee.html">FEE SUBMISSION</a>
            </div>
         </div>

         <div class="dropdown">
            <button onclick="window.location.href='/myproject/new/school_admissions.php'" class="dropbtn">ADMISSIONS</button>
            <div class="dropdown-content">
               <a href="/myproject/new/features.html">SCHOOL EDUCATION</a>
               <a href="/myproject/new/courses.html">HIGHER EDUCATION</a>
               <a href="/myproject/new/rule.php">CAMPUS RULES</a>
            </div>
         </div>


         <div class="dropdown">
            <button onclick="window.location.href='/myproject/new/finance.php'" class="dropbtn">FINANCIAL ASSISTANCE</button>
            <div class="dropdown-content">
               <a href="/myproject/new/features.html">SCHOLARSHIPS</a>
            </div>
         </div>


         <div class="dropdown">
            <button onclick="window.location.href='/myproject/new/library.php'" class="dropbtn">LIBRARY</button>
            <div class="dropdown-content">
               <a href="/myproject/new/features.html">LIBRARY</a>
               <a href="/myproject/new/courses.html">ONLINE RESOURCES</a>
            </div>
         </div>


         <div class="dropdown">
            <button onclick="window.location.href='/myproject/new/exam.php'" class="dropbtn">EXAMINATION</button>
         </div>

         <div class="dropdown">
            <button onclick="window.location.href='/myproject/new/sports.php'" class="dropbtn">SPORTS</button>
            <div class="dropdown-content">
               <a href="/myproject/new/features.html">INDOOR</a>
               <a href="/myproject/new/courses.html">OUTDOOR</a>
            </div>
         </div>
     
      </nav> 
     
   </div>
      <form action="feedback.php" method="post">
<div class="main_content">
    <h4>We need your feedback to improve ourselves:</h4>
    <div class="container">
      
        <div class="row">
          <div class="col-25">
            <label for="fname">Name<span class="man">*</span>:</label>
          </div>
          <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Your name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Email ID<span class="man">*</span>:</label>
          </div>
          <div class="col-75">
            <input type="email" id="email" name="email" placeholder="emp@gmail.com">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Visitor Type<span class="man">*</span>:</label>
          </div>
          <div class="col-5">
            
            <input type="radio" name="visitor" value="s"> Student &emsp;
           <input type="radio"  name="visitor" value="f"> Faculty &emsp;
           <input type="radio"  name="visitor" value="v"> Visitor
            
        </div>
        </div>
               <div class="row">
          <div class="col-25">
            <label for="subject">Feedback<span class="man">*</span>:</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="feedback" placeholder="Write something.." style="height:200px"></textarea>
          </div>
        </div>
      
       <button type="submit" class="review">Submit</button>
    
      </form>
    </div>
  
</div>
  
</body>

</html>