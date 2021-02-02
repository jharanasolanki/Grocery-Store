<?php
    //Connection to database
    $conn = new mysqli("localhost","root","","masks");
    if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
    }
