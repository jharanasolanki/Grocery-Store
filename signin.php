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
    <?php require 'nav.html' ?>
    <!-- Nav bar finishh -->
    <!-- Inspection form start -->

    <section>
        <div class="container center">
            <form enctype="multipart/form-data" class="formoid-flat-green" style="background-color:#E4E4F4;font-size:14px;font-family:'Lato', sans-serif;color:#000;max-width:600px;min-width:150px" method="post" action="login.php">
                <div class="title">
                    <h2 style="margin-right: 27px;margin-left: 27px;">Signin</h2>
                </div>
                <div lass="element-name">
                    <label class="title">Your Username</label> <input type="text" name="uname" required="required" <?php
                                                                                                                            if (isset($_GET['uname'])) {
                                                                                                                                echo "value=".$_GET['uname'];
                                                                                                                            } ?>/>
                    <label class="title">Your Password</label> <input type="password" name="password" required="required"<?php
                                                                                                                            if (isset($_GET['password'])) {
                                                                                                                                echo "value=".$_GET['password'];
                                                                                                                            } ?>/>
                    <label class="subtitle" style="color:red;" id="errMsg">
                        <?php
                        if (isset($_GET['err'])) {
                            $error = $_GET['err'];
                            if ($error == 1) {
                                echo "User does not exist";
                            } else if ($error == 2) {
                                echo "Password not correct";
                            }
                        }
                        ?>
                    </label>
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

</html>