<?php
    //Connection to database
    $conn = new mysqli("localhost:8080","root","","masks");
    if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
    }

    $str=$_GET['uname'];// receives username entered by the user
    $sql = "select * from account where username='$str';";
    $result=$conn->query($sql);
    // If the query returns a row then the username exist
    if($result->num_rows!='0')
    {
        echo "0";
    }
    else
    {
        echo "1";
    }
?>