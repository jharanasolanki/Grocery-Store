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
            <form enctype="multipart/form-data" class="formoid-flat-green" style="background-color:#004242;font-size:14px;font-family:'Lato', sans-serif;color:#fff;max-width:600px;min-width:150px" method="post">
                <div class="title">
                    <h2>SignUp Form</h2>
                </div>
                <div class="element-separator">
                    <hr>
                    <h3 class="section-break-title">Customer Details</h3>
                </div>


                <div class="element-name"> 
                  <span class="mid1"> <label class="title">Your Username</label> <input type="text" size="8" name="uname" required="required"/> 
                    <label class="subtitle" style="color:red;">Not Avalible</label>
                  </span> 
                  <span class="mid1"> <label class="title">Your Name</label> <input type="text" size="8" name="cname" required="required"/> </span>
                  <span class="mid1"> <label class="title">Email ID</label> <input type="text" size="8" name="emailid" required="required"/> </span> 
                  <span class="mid1"> <label class="title">Phone Number</label> <input type="text" size="8" name="phone" required="required"/> </span> 

                  <span class="mid1"> <label class="title">Your Password</label> <input type="password" name="password"/> </span> 
                  <span class="mid1"> <label class="title">Confirm Your Password</label> <input type="password"  name="cpassword"/> </span> 
                  <span class="mid1"> <label class="title">GST</label> <input type="text" size="8" name="gstno"/> </span> 


                   <label class="title">Address</label> <textarea rows="4" cols="50" name="address"></textarea>

               </div>


                <div class="submit"><input type="submit" value="Submit" /></div>
            </form>
    </section>
    <!-- inspection section finish -->
    <!-- footer section -->
    <footer class="center">
        <p style="color:white">Some Text here<br> <a href="mailto:hege@example.com" style="color:white">EMAIL US</a> </footer>
    <!-- footer section finish -->
    </div>
</body>

</html>