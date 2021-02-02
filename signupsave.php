<?php
    // Database Connection setup
    $conn = new mysqli("localhost","root","","masks");
    if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
    }

    //User details are taken from the $_POST 
    $name=$_POST['cname'];
    $contactno==$_POST['phone'];
    $email==$_POST['emailid'];
    $address==$_POST['address'];
    $username=$_POST['uname'];
    $password=hash('sha256',$_POST['password']);
    $usergroup="customer";

    // Data collected from form is inserted in Customer table
    $sql = "INSERT INTO Customer (name,contactno,email,address)VALUES ('$name', $contactno,'$email','$address')";
    if ($conn->query($sql) === TRUE) {
        echo "New Customer created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //This query returns the last id which is the latest record
    $sql="SELECT id FROM customer ORDER BY id DESC LIMIT 1;";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $id=$row['id'];

    //This query enters login details of customer in Account table
    $sql = "INSERT INTO account (username,password,cid)VALUES ('$username','$password',$id,)";
    if ($conn->query($sql) === TRUE) {
        echo "New Account created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
?>