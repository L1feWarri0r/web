
<?php
error_reporting(0);
$showAlert = false;
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'configure.php';
    $name = $_POST["name"];
    $fname=$_POST["fname"];
    $mname = $_POST["mname"];
    $gender = $_POST["gender"];
  $phone = $_POST["phone"];
    $dob=$_POST["dob"];
 $email = $_POST["email"];
    $bg = $_POST["bg"];
    $ano = $_POST["ano"];
    $address =$_POST["address"];
 $image = $_POST["image"];
    $sign = $_POST["sign"];
    $toi = $_POST["toi"];
    
        
$sql = "INSERT INTO student_details (`name`, `fname`, `mname`,`gender`,`phone`,`dob`,`email`,`bg`,`ano`,`address`,`image`,`sign`,`toi`)
VALUES ('$name', '$fname', '$mname','$gender','$phone','$dob','$email','$bg','$ano','$address','$image','$sign',current_timestamp())"; 
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
             session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['UserName'] = $UserName;
            header("location: welcome1.php");
        }   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <title>Srijan Vidhyapeeth</title>
   <link href="admission.css" rel="stylesheet" type="text/css">

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
                 <a href="/myproject/new/school_activities.php">SCHOOL ACTIVITIES</a>
                 <a href="/myproject/new/school_admissions.php">ADMISSIONS</a>
                 <a href="/myproject/new/fee.php">FEE SUBMISSION</a>
                 <a href="/myproject/new/contact.php">CONTACT US</a>
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
                 <a href="/myproject/new/fee.php">FEE SUBMISSION</a>
              </div>
           </div>
  
           <div class="dropdown">
              <button onclick="window.location.href='/myproject/new/school_admissions.php'" class="dropbtn">ADMISSIONS</button>
              <div class="dropdown-content">
                 <a href="/myproject/new/school_education.php">SCHOOL EDUCATION</a>
                 <a href="/myproject/new/higher_education.php">HIGHER EDUCATION</a>
                 <a href="/myproject/new/rule.php">CAMPUS RULES</a>
              </div>
           </div>
  
  
           <div class="dropdown">
              <button onclick="window.location.href='/myproject/new/finance.php'" class="dropbtn">FINANCIAL ASSISTANCE</button>
              <div class="dropdown-content">
                 <a href="/myproject/new/scholar.php">SCHOLARSHIPS</a>
              </div>
           </div>
  
  
           <div class="dropdown">
              <button onclick="window.location.href='/myproject/new/library.php'" class="dropbtn">LIBRARY</button>
              <div class="dropdown-content">
                 <a href="/myproject/new/lib.php">LIBRARY</a>
                 <a href="/myproject/new/online.php">ONLINE RESOURCES</a>
              </div>
           </div>
  
  
           <div class="dropdown">
              <button onclick="window.location.href='/myproject/new/exam.php'" class="dropbtn">EXAMINATION</button>
           </div>
  
           <div class="dropdown">
              <button onclick="window.location.href='/myproject/new/sports.php'" class="dropbtn">SPORTS</button>
              <div class="dropdown-content">
                 <a href="/myproject/new/indoor.php">INDOOR</a>
                 <a href="/myproject/new/outdoor.php">OUTDOOR</a>
              </div>
           </div>
        
        </nav>
  
     </div>
        <form action="school_admissions.php" method="post">
<div class="main_content">
    <h4>Enter your Details:</h4>
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
            <label for="lname">Father's Name<span class="man">*</span>:</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="fname" placeholder="Father's name..">
          </div>
        </div>
        <div class="row">
         <div class="col-25">
           <label for="lname">Mother's Name<span class="man">*</span>:</label>
         </div>
         <div class="col-75">
           <input type="text" id="mname" name="mname" placeholder="Mother's name..">
         </div>
       </div>
       <div class="row">
         <div class="col-25">
           <label for="lname">Gender<span class="man">*</span>:</label>
         </div>
         <div class="col-5">
           <input type="radio" name="gender" value="m"> Male &emsp;
           <input type="radio"  name="gender" value="f"> Female &emsp;
           <input type="radio"  name="gender" value="o"> Others
         </div>
       </div>
       <div class="row">
         <div class="col-25">
           <label for="phone">Phone No<span class="man">*</span>:</label>
         </div>
         <div class="col-75">
           <input type="number"id="phone" name="phone" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" placeholder="432-9877-985">
         </div>
       </div>
       <div class="row">
         <div class="col-25">
           <label for="email">Email ID<span class="man">*</span>:</label>
         </div>
         <div class="col-75">
           <input type="email" id="email" name="email" placeholder="example123@gmail.com">
         </div>
       </div>
       <div class="row">
         <div class="col-25">
           <label for="dob">D.O.B<span class="man">*</span>:</label>
         </div>
         <div class="col-75">
           <input type="date" id="phone" name="dob" >
         </div>
       </div>
       <div class="row">
         <div class="col-25">
           <label for="lname">Adhar No<span class="man">*</span>:</label>
         </div>
         <div class="col-75">
           <input type="number" id="phone" name="ano" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="4325-9877-9854-1234">
         </div>
       </div>
       <div class="row">
         <div class="col-25">
           <label for="lname">Blood Group<span class="man">*</span>:</label>
         </div>
         <div class="col-5">
           <input type="radio" name="bg" value="a+"> A + &emsp;
           <input type="radio"  name="bg" value="a-"> A - &emsp;
           <input type="radio"  name="bg" value="b+"> B + &emsp;
           <input type="radio" name="bg" value="b-"> B - &emsp;
           <input type="radio"  name="bg" value="ab+"> AB + &emsp;
           <input type="radio"  name="bg" value="ab-"> AB - &emsp;
              <input type="radio" name="bg" value="o+"> O + &emsp;
           <input type="radio"  name="bg" value="o-"> O - &emsp;
         
         </div>
       </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Address<span class="man">*</span>:</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="address" placeholder="Write something.." style="height:200px"></textarea>
          </div>
        </div>
        <div class="row">
         <div class="col-25">
           <label for="dob">Upload Photo<span class="man">*</span>:</label>
         </div>
         <div class="col-75">
           <input type="file" id="phone" name="image" >
         </div>
       </div>
       <div class="row">
         <div class="col-25">
           <label for="dob">Upload Signature<span class="man">*</span>:</label>
         </div>
         <div class="col-75">
           <input type="file" id="phone" name="sign" >
         </div>
       </div>

       
       <button type="submit" class="review">Submit</button>
       <button type="review" class="review" onclick="view.php">Review</button>
      </form>
    </div>
  
</div>
</body>

</html>