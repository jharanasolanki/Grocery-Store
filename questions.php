<?php require 'nav.php' ?>
<?php
    if (isset($_SESSION['username'])) {
        header('Location:'.'index.php');
    }
    ?>
<?php
    include("config.php");

    //User details are taken from the $_POST 
    $str=mysqli_real_escape_string($conn,$_POST['uname']);
    $sql = "select * from account where username='$str';";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
?>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/formoid-flat-green.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<section>
        <div class="container center">
            <form enctype="multipart/form-data" class="formoid-flat-green" style="background-color:#fff;font-size:14px;font-family:'Lato', sans-serif;color:#000;max-width:600px;min-width:150px" method="post" action="changepassword.php">
                <div class="title">
                    <h2 style="margin-right: 27px;margin-left: 27px;">New Password</h2>
                </div>
                <div lass="element-name">
                <label class="title">Username: </label>
                <input type="text" name="uname" value=<?php echo $row['username'];?>  required="required"/>
                <label class="title"><?php echo $row['secquestion'];?></label> <input type="password" name="secanswer" required="required"/>
                    <label class="title">New Password:</label> <input type="password" name="pass1" required="required"/>
                    <label class="title">Write Password Again:</label> <input type="password" name="pass2" required="required"/>
                    <h3><label class="subtitle" style="color:black;"><a href="signup.php">New user? Sign up!</a></label></h3>
                </div>
                <div class="submit"><input type="submit" value="Submit" /></div>
            </form>
    </section>
</body>
</html>