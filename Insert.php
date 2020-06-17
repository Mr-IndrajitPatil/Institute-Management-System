<?php

	$mysqliConn = new mysqli('localhost',  'id13916996_gkrupa', '@B2TKf?1-a^xdlmR', 'id13916996_gk') or die(mysql_error($mysqli));
	extract($_POST);

    if(isset($_POST['Full_Name']) &&
	   isset($_POST['Email']) &&
	   isset($_POST['Mobile_Number']) &&
	   isset($_POST['Qualification']) &&
	   isset($_POST['Gender']) &&
	   isset($_POST['course']) )
	{
		
	 
		$INSERT = "INSERT INTO enquirey (course_id, full_name, email,mobile_no, qualification,gender) values
		                                ('$course', '$Full_Name','$Email','$Mobile_Number','$Qualification','$Gender')";
		
		$insertStatus = mysqli_query($mysqliConn, $INSERT);

	
	 if($insertStatus)
        {
         echo '<script>alert("Your record has been saved.....")</script>';
        }
        else
        {
         echo  '<script>alert("Opps something went wrong.....")</script>';
        }
	
	}
		
	
	
	?>




