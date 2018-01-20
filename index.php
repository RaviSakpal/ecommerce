<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
   <head>
      <title>My Online shop</title>
      <link rel="stylesheet" href="admin_area/styles/style.css" media="all"/>
   <head>

    <body>

        <div class="main_wrapper">

            <div class="header_wrapper">
                    <a href="index.php"><img id="logo" src="images/logo.gif"/></a>
                    <img id="banner" src="images/banner.gif"/>
                </div>

                <div class="menubar" >
                    <ul id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="all_products.php">All Products</a></li>
                        <li><a href="customer/my_account.php">My Account</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="cart.php">Shopping Car</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <div id="form">
                        <form method="get" action="results.php" enctype="multipart/form-data">
                            <input type="text" name="user_query" placeholder="Search a Product" />
                            <input type="submit" name="search" value="search" />

                        </form>

                    </div>

                </div>

                <div class="content_wrapper">

                <div id="sidebar">

                    <div id="sidebar_title">Categories</div>

                    <ul id="cats">

                        <?php getCats(); ?>

                     </ul>

                    <div id="sidebar_title">Brands</div>

                    <ul id="cats">

                        <?php getBrands(); ?>


                    </ul>

                </div>

                <div id="content_area">

                <?php cart(); ?>

                <div id="shopping_cart">

                    <span style="float:right; font-size:18px; padding:5px; line-height:40px">

                        Welcome Guest!<b style="color:yellow"> Shopping Cart - </b>Total Items: <?php total_items(); ?>

                        Total Price:<?php total_price(); ?> <a href="cart.php"
                            style="color:yellow">Go to Cart</a>

                    </span>
                </div>

                <?php echo $ip=getIp(); ?>

                    <div id="products_box">

                    <?php getPro(); ?>
                    <?php getCatPro(); ?>
                    <?php getBrandPro(); ?>

                    </div>

                </div>

            </div>
            <div id="footer">
                <h2 style="text-align: center; padding-top: 30px;">&copy; 2017 by www.TradingAssociates.com</h2>

            </div>
        </div>

    </body>
</html>