<?php require 'nav.php' ?>
<?php
    if (isset($_SESSION['username'])) {
        header('Location:' . 'index.php');
    }
    ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/formoid-flat-green.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="hero-image">
    </div>
    <!-- Nav bar -->
    <?php
    if (isset($_SESSION['username'])) {
        header('Location:'.'index.php');
    }
    ?>
    <!-- Nav bar finishh -->
    <!-- Inspection form start -->

    <section>
        <div class="container center">
            <form enctype="multipart/form-data" class="formoid-flat-green" style="background-color:#fff;font-size:14px;font-family:'Lato', sans-serif;color:#000;max-width:600px;min-width:150px" method="post" action="questions.php">
                <div class="title">
                    <h2 style="margin-right: 27px;margin-left: 27px;">Forgot Password</h2>
                </div>
                <div lass="element-name">
                    <label class="title">Enter your registered username:</label> <input type="text" name="uname" required="required"/>
                    <label class="title" id="question"></label> 
                    
                    
                    <h3><label class="subtitle" style="color:black;"><a href="signup.php">New user? Sign up!</a></label></h3>
                </div>
                <div class="submit"><input type="submit" value="Submit" /></div>
            </form>
    </section>
    <!-- inspection section finish -->
    <!-- footer section -->
    <footer class="center">
        <p style="color:white">Some Text here<br> <a href="mailto:hege@example.com" style="color:white">EMAIL US</a>
    </footer>
    <!-- footer section finish -->
    </div>
</body>

<script type="text/javascript" language="javascript">
    //this function takes username entered by the user as argument and
    //checks wether that username is available
    function checkEmail(str) {
        if (str.length != 0) {
            var xmlhttp = new XMLHttpRequest();
            //when the open() function state is changed this function is called
            xmlhttp.onreadystatechange = function() {
                //checks if the open() function state is changed to complete
                if (this.readyState == 4 && this.status == 200) {
                    allowed = (this.responseText); // stores answer returned by open function
                    alert(allowed);
                    if(allowed=="0")
                        document.getElementById("errMsg").innerHTML = "Username not registered";
                    else
                        document.getElementById("errMsg").innerHTML = allowed+"<input type='text' name='answer' required='required' />";
                }
            };
            // the username entered by the user is sent to the php script as a querystring
            xmlhttp.open("GET", "getquestion.php?q=" + str, true);
            xmlhttp.send();
        }
    }

    </script>



</html>