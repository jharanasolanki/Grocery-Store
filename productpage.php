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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>
    <body>
        <div class="prodbody">
            <div class="prodimage">
                <img src="<?php echo $imgname; ?>">
            </div>
            <div class="prodinfo">
                <div class="prodcategory">/<?php echo $category; ?></div>
                <div class="prodtitle"><?php echo $name; ?></div>
                <div class="prodprice">Rs.<?php echo $price; ?></div>
                <div id="price" hidden><?php echo $price; ?></div>
                <div class="qty">
                    <div class="qtybtn" onclick="subQty()">-</div>
                    <input type="number" name="qty" value="1" id="qty" readonly>
                    <div class="qtybtn" onclick="addQty()">+</div>
                </div>
                <div class="totaldiv">
                    <div class="total">Total: Rs.</div>
                    <div id="dprice" class="totalprice"><?php echo $price; ?></div>
                </div>
                <div class="buybutton"><img src="images/icons/buy.png" height="24px" weight="24px">   Buy Now</div>
                <div class="buybutton"><img src="images/icons/cart.png" height="25px" weight="25px">  Add to Cart</div>
                <div class="buyfeatures">
                    <div class="feature">3 Days Delivery</div>
                    <div class="feature">Fresh Items</div>
                    <div class="feature">24/7 Customer Support</div>
                </div>
                <div class="prodabout">
                    <div class="prodheads">About this Item:</div>
                    <div class="proddesc"><?php echo $description; ?></div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        function addQty()
        {
            var qty=parseInt(document.getElementById("qty").value);
            document.getElementById("qty").value=qty+1;
            var price=parseFloat(document.getElementById("price").innerHTML);
            document.getElementById("dprice").innerHTML=(qty+1)*price;
        }
        function subQty()
        {
            var qty=parseInt(document.getElementById("qty").value);
            if(qty==1)
            {
                return;
            }
            document.getElementById("qty").value=qty-1;
            var price=parseFloat(document.getElementById("price").innerHTML);
            document.getElementById("dprice").innerHTML=(qty-1)*price;
        }
    </script>
</html>