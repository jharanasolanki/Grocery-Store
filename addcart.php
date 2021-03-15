<?php require 'config.php' ?>
<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://";   
        else     
            $url = "http://";   
        $url.= $_SERVER['HTTP_HOST'];   
        $url.= $_SERVER['REQUEST_URI'];    
        $_SESSION['back']=$url;
        header('Location:'.'signin.php');
    }
    if(!isset($_GET['id']))
    {
        header('Location:'.'catalogue.php');
    }
    $accountid=$_SESSION['accountid'];
    $pid=$_GET['id'];
    $qty=$_GET['qty'];
    $sql="SELECT * from grocerycatalog where id=$pid;";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $price=$row["price"];
    $total=$row["price"]*$qty;
    echo $total;
    $status="Added to Cart";
    $sql="SELECT * from grocerycart where accountid=$accountid and productid=$pid;";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
            $qty+=$row['qty'];
            $sql="delete from grocerycart where accountid=$accountid and productid=$pid;";
            $conn->query($sql);
        }
        $total=$price*$qty;
    }
    $sql="insert into grocerycart(accountid,productid,qty,price,total,status) values($accountid,$pid,$qty,$price,$total,'$status')";
    if($conn->query($sql)===TRUE)
    {
        header('Location:'.'cart.php');
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>