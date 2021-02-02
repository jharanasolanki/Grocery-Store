<?php
   	include("config.php");
  	session_start();
   
   	if($_SERVER["REQUEST_METHOD"] == "POST") 
   	{
    	// username and password sent from form 
    	$myusername = mysqli_real_escape_string($conn,$_POST['uname']);
    	$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
    	$mypassword=hash('sha256', $mypassword);
      $query = "SELECT * FROM account  WHERE username ='$myusername'";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) == 0) 
      { // IF no previous user is using this username.
        echo '<script>alert("User does not exist!")</script>';
      }
      else 
      {
        $sql = "SELECT * FROM account WHERE username = '$myusername' and password = '$mypassword'";
        $result=$conn->query($sql);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        // If result matched $myusername and $mypassword, login successful
        if($row) 
        {
          $_SESSION['username'] = $myusername;
       	  header("location: index.php"); 
    	 }
    	 else 
        {
           echo '<script>alert("Your Password is invalid")</script>';
           //$error="Your Password is invalid";
        }
      }
  	$conn->close();
   }
?>