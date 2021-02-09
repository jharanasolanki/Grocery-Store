<?php
    include("config.php");
    $answer=mysqli_real_escape_string($conn,$_POST['secanswer']);
    $str=mysqli_real_escape_string($conn,$_POST['uname']);
    $sql = "select secanswer from account where username='$str';";
    $result=$conn->query($sql);
    $password=hash('sha256',mysqli_real_escape_string($conn,$_POST['pass1']));
    $sql = "select * from account where username='$str';";
    $sql=$sql = "UPDATE account SET password='".$password."' WHERE username='".$str."';";
    $result=$conn->query($sql);
    header("Location: signin.php?uname=$str");
?>