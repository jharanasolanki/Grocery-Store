<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/formoid-flat-green.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> </head>

<body class="hero-image">
    </div>
    <!-- Nav bar -->
    <?php require 'nav.html' ?>
    <!-- Nav bar finishh -->
    <!-- Inspection form start -->
    <section>
        <div class="container">
            <form enctype="multipart/form-data" class="formoid-flat-green" style="background-color:#004242;font-size:14px;font-family:'Lato', sans-serif;color:#fff;max-width:600px;min-width:150px" method="post" action="signupsave.php" name="myForm">
                <div class="title">
                    <h2>SignUp Form</h2>
                </div>
                <div class="element-separator">
                    <hr>
                    <h3 class="section-break-title">Customer Details</h3>
                </div>


                <div class="element-name"> 
                  <span class="mid1"> <label class="title">Your Username</label> <input type="text" size="8" name="uname" required="required"/> 
                    <label class="subtitle" style="color:red;" id="errmsg">Not Avalible</label>
                  </span> 
                  <span class="mid1"> <label class="title">Your Name</label> <input type="text" size="8" name="cname" required="required"/> </span>
                  <span class="mid1"> <label class="title">Email ID</label> <input type="email" size="8" name="emailid" required="required"/> </span> 
                  <span class="mid1"> <label class="title">Phone Number</label> <input type="number" size="10" name="phone" required="required"/> </span> 

                  <span class="mid1"> <label class="title">Your Password</label> <input type="password" name="password"/> </span> 
                  <span class="mid1"> <label class="title">Confirm Your Password</label> <input type="password"  name="cpassword"/> </span> 


                   <label class="title">Address</label> <textarea rows="4" cols="50" name="address"></textarea>

               </div>


                <div class="submit"><input type="submit" value="Submit" onclick="return check();"/></div>
            </form>
    </section>
    <!-- inspection section finish -->
    <!-- footer section -->
    <footer class="center">
        <p style="color:white">Some Text here<br> <a href="mailto:hege@example.com" style="color:white">EMAIL US</a> </footer>
    <!-- footer section finish -->
    </div>
</body>

<script type="text/javascript" language="javascript">
    //this function takes username entered by the user as argument and
    //checks wether that username is available
    function checkUsername(str)
    {
        if (str.length != 0) {
            var xmlhttp = new XMLHttpRequest();
            //when the open() function state is changed this function is called
            xmlhttp.onreadystatechange = function() {
                //checks if the open() function state is changed to complete
                if (this.readyState == 4 && this.status == 200) {
                    allowed = (this.responseText);// stores answer returned by open function
                    if (allowed == 0)
                        document.getElementById("errMsg").innerHTML = "Username taken";
                    else
                        document.getElementById("errMsg").innerHTML = "";
                }
            };
            // the username entered by the user is sent to the php script as a querystring
            xmlhttp.open("GET", "getusername.php?q=" + str, true);
            xmlhttp.send();
        }
    }

    function check() {
        //if the username is not available than the user is not allowed to submit
        if (allowed == 0)
            return false;
        else
            document.getElementById("myForm").submit();
    }
</script>

</html>