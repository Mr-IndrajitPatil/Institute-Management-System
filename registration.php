<?php
  $mysqli = new mysqli('localhost','id13916996_gkrupa', '@B2TKf?1-a^xdlmR', 'id13916996_gk') or die(mysql_error($mysqli));
  $result = $mysqli -> query('SELECT * FROM courses') or die(mysql_error($mysqli));
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CONTACT US</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/f.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- <script src="js/validation.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery-migrate.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="f.css">
    <link rel="stylesheet" type="text/css" href="css\myCSS.css">

	<style>
	  .navbar-brand {
        margin-right: 42rem !important;
		
     }
	 .error {
        color : red;
      }
	
	 
	 .contact{
		padding: 5px 150px 1px 150px !important;
		height: auto !important;
	}
	.navbar-nav {
	padding-left: 501px;
	}
	</style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!--<a class="navbar-brand" href="#">Gurukrupa</a>-->
  <img src="images\MainPage\logo1.png" width="50 px" height="50 px"> 
  <img src="images\MainPage\logo2.png" width="200 px" height="50 px"> 

  <div class="collapse navbar-collapse" id="navbarNav">

	<ul class="navbar-nav">
	  <li class="nav-item">
	    <a class="nav-link" href="index.html">HOME</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="courses.html">COURCES</a> 
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="Services.html">SERVICES</a> 
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="blog.html">PLACEMENT</a>
	  <li class="nav-item">
	  <a class="nav-link" href="contactus.html">CONTACT</a>
	  </li>
	  <li class="nav-item active">
	   <a class="nav-link" href="registration.php">ENQUIRY FORM</a> 
      </li>
   </ul>
  </div>
</nav>
    <br>
   
    <!-- 
      New Regsgiration conde starts here
      -->
    <!--Registration Start-->
    <div class="container contact">
      <div class="row">
        <div class="col-md-3">
          <div class="contact-info">
            <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
            <h2>Contact Us</h2>
            <h4>We would love to hear from you !</h4>
          </div>
        </div>
        <div class="col-md-9">
          <form name="registrationForm" id="registrationForm">
            <div class="contact-form">
              <div class="form-group">
                <label class="control-label col-sm-2" for="fname">Full Name:</label>
                <div class="input-container">
                  <div class="col-sm-10">    
                    <input  class="form-control" type="text" name="Full_Name" placeholder="Enter Your Full Name" >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" >Email:</label>
                <div class="col-sm-10">   
                  <input  class="form-control" type="email"  name="Email" placeholder="Enetr Your Email id" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="email">Mobile Number:</label>
                <div class="col-sm-10">
                  <input  class="form-control" type="text" name="Mobile_Number" placeholder="Enetr Your Mobile Number" minlength="10" maxlength="10">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="comment">Qualification:</label>
                <div class="col-sm-10">
                  <input  class="form-control" type="text" name="Qualification" placeholder="Enetr Your Qualification" >
                </div>
              </div>
              <div class="form-group" >
                <label class="control-label col-sm-2">Gender</label><br>
                <input class="control-label col-sm-1" type="radio"  name="Gender"  value="Male">male 
                <input class="control-label col-sm-1" type="radio"  name="Gender" value="Female" >Female 
                &nbsp;&nbsp;&nbsp;<label id="Gender-error" class="error" for="Gender"></label>
              </div>
              <div class="form-group">
                <label  class="control-label col-sm-3"  for="exam" name="Course">Select Course</label>
                <div class="col-md-10">
                  <select class="form-control" id="Course" name="course">
                    <div class="col-md-10">
                      <option value="">Select Course</option>
                      <?php
                        while($row = $result->fetch_assoc())
                        {
                          echo '<option value="'.$row["course_id"].'">'.$row["course_name"].'</option>';
                        }
                        ?>
                    </div>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" onclick="add();" class="btn btn-default">Submit</button>
                  <button type="reset" value="CANCLE" class="btn btn-default">Cancle</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $('#registrationForm').validate({
          rules: {
          Full_Name: {
            required : true
            
          },
          Email: {
            required : true,
            email : true
          },
          Mobile_Number: {
            required : true,            
            number : true
          },
          Qualification: {
            required : true
           
          },
          Gender: {
            required : true
           
          },
          course: {
            required : true
           
          },
        },
        messages: {
          Full_Name: {
            required : "Fullname is Required!",
           
          },
          Email: {
            required : "Email is Required!",
            email: "Enter valid email."
          },
          Mobile_Number: {
            number : "Enter Valid Mobile number.",
            required : "Mobile Number is required."
          },
          Qualification : {
            required : "Enter your Qualification."
          },
          Gender: {
            required : "Please select your Gender."
          },
          course: {
            required : "Please select appropriate Course."
          }
        }
      	});
      });
        
      function add()
      {
        var status = $('#registrationForm').valid();
        if(status)
      	{
        document.forms["registrationForm"].method = "POST";
          document.forms["registrationForm"].action = "Insert.php";
          document.forms["registrationForm"].submit();
      	}    
      }
    </script>
    <!--  New Tegtistratin ends -->
    <!--Footer-->
    <div id="foot" class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-center wh">SERVICES</h3>
          <ul class="list-group">
            <li class="list-group-item">Placement Provide</li>
            <li class="list-group-item">Software Development</li>
            <li class="list-group-item">IT Courses</li>
            <li class="list-group-item">MNC Provider</li>
            <li class="list-group-item">Online/Offline Training</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="text-center wh">BRANCHES</h3>
          <ul class="list-group">
            <li class="list-group-item">Block no. 2nd,Opposite to Ratnakar Bank,Nerle. 415406,Maharashtra</li>
            <li class="list-group-item">Center Point Building,Near S.T.Stand Road Islampur 415409,Maharashtra.</li>
            <li class="list-group-item">Contact No :- 9999999999/7756078941</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="text-center wh">CAREERS</h3>
          <ul class="list-group">
            <li class="list-group-item">Current Openings</li>
            <li class="list-group-item">Current Drives</li>
            <li class="list-group-item">MNC Drives</li>
          </ul>
        </div>
      </div>
    </div>
    <!--Footer End-->
      <div> <br> <br> <br></div>
    
    <footer class="page-footer font-small unique-color-dark pt-4">

  <div class="footer-copyright text-center py-3">© 2020 Copyright All Rights Reserved
      <p> Designed by <b>Indrajit Patil.</b></p>
    
  </div>
  <!-- Copyright -->

</footer>
  </body>
</html>

