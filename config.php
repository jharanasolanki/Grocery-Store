<?php
    //Connection to database
    $conn = new mysqli("remotemysql.com","HCT4UbGiki"," WszXABOU7F","HCT4UbGiki");
    if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
    }
