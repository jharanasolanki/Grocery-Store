<?php require 'nav.php' ?>
<?php require 'config.php' ?>
<?php
    $pid=$_GET['id'];
    $sql="SELECT * from grocerycatalog where id=$pid;";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $name=$row["name"];
    $price=$row["price"];
    if($row["category"]==0)
    {
        $category="Essential Items";
    }
    else if($row["category"]==1)
    {
        $category="Grocery Items";
    }
    else
    {
        $category="Dairy Items";
    }
    $description=$row["description"];
    $imgname="images/products/".$row['imagename'];
?>
<html>
    <head>
    <link rel="stylesheet" href="css/productpage.css" type="text/css" />
    </head>
    <body>
        <div class="prodbody">
            <div class="prodimage">
                <img src="<?php echo $imgname; ?>">
            </div>
            <div class="prodinfo">
                <div class="prodcategory"><?php echo $category; ?></div>
                <div class="prodtitle"><?php echo $name; ?></div>
                <div class="prodprice">Rs.<?php echo $price; ?></div>
                <div class="proddesc"><?php echo $description; ?></div>
                <div class="buybutton">BUY</div>
                <div class="buyfeatures">
                    <div class="feature">3 Days Delivery</div>
                    <div class="feature">Fresh Items</div>
                    <div class="feature">24/7 Customer Support</div>
                </div>
            </div>
        </div>
    </body>
</html>