<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <!--font awesome-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" data-auto-replace-svg="nest"></script>


    <title>FashionFix</title>
    <style>
        .home .max-width .home-content a {
            display: inline-block;
            color: var(--white-color);
            background: none;
            font-size: 30px;
            padding: 10px 30px;
            margin-top: 20px;
            border-radius: 6px;
            border: 2px solid var(--text-color);
            transition: all 0.3s ease;

        }

        .home .home-content a:hover {
            background: var(--text-color);
            color: var(--white-color);
        }

        footer .row .logo a {
            color: var(--text-color);
            font-size: 35px;
            font-weight: 600;
        }
        footer .row .col-25 .icon i{
            margin:30px 5px;
            padding: 10px;
            background-color: rgb(99, 96, 96);
            display: inline-block;
            border-radius: 50%;

        }
    </style>
</head>

<body>
    <!--navbar-->

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Fashion<span>Fix</span></a></div>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#product">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!--home-->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Welcome </div>
                <div class="text-2"><?php echo $_SESSION['name']; ?></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem atque, rerum minima vero libero, </p>
                <p>tempora culpa quas hic doloribus consequatur temporibus Lorem ipsum dolor, sit amet consec .</p>
                <a href="#">Shop now</a>

            </div>
        </div>
    </section>

    <section class="product">
        <h1>Our Trending Product </h1>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="img/item2.jpg" alt="">
                    <h3>Product name</h3>
                    <p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i></p>
                    <p><ins>$9.49</ins></p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/item7.jpg" alt="">
                    <h3>Product name</h3>
                    <p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i></p>
                    <p><ins>$12.90</ins></p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/shoes.jpg" alt="">
                    <h3>Product name</h3>
                    <p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i></p>
                    <p><ins>$6.49</ins></p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/shoes.jpg" alt="">
                    <h3>Product name</h3>
                    <p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i></p>
                    <p><ins>$22.49</ins></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="img/item4.jpg" alt="">
                    <h3>Product name</h3>
                    <p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i></p>
                    <p><ins>$12.49</ins></p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/item2.jpg" alt="">
                    <h3>Product name</h3>
                    <p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i></p>
                    <p><ins>$10.49</ins></p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/item6.jpg" alt="">
                    <h3>Product name</h3>
                    <p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i></p>
                    <p><ins>$22.29</ins></p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/shoes.jpg" alt="">
                    <h3>Product name</h3>
                    <p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i></p>
                    <p><ins>$19.49</ins></p>
                </div>
            </div>
        </div>

        <!--payment-->
    </section>

    <section class="payment">
        <h1>Make Payment </h1>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form method="post">

                        <div class="row">
                            <div class="col-50">
                                <h3 style="padding: 20px;color:#cc3399">Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="name" placeholder="Julia Higgins" require>
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="julia123@example.com" require>
                                <label for="adr"><i class="fas fa-map-marker-alt"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="822 Y. 19th Street" require>
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="10001" require>
                                <label for="prname">Product Name</label>
                                <input type="text" id="prname" name="prname" placeholder="Product Name" require>
                            </div>

                            <div class="col-50">
                                <h3 style="padding: 20px;color:#cc3399">Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fab fa-cc-visa" style="color:navy"></i>
                                    <i class="fab fa-cc-paypal" style="color:blue;"></i>
                                    <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fab fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="Julia Higgins">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="xxxx-yyyy-zzzz-wwww" require>
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="172" require>
                                <label for="quantity">Quantity</label>
                                <input type="text" id="quantity" name="quantity" placeholder="4" require>

                            </div>

                            <label>
                                <input type="checkbox" name="sameadr"> Shipping address same as billing
                            </label>
                        </div>
                        <input type="submit" name="submit" value="Checkout" class="btn">
                    </form>

                    <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "user";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);


                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    if (isset($_POST['name'])) {
                        $name = $_POST['name'];
                    } else {
                        echo "";
                    }
                    if (isset($_POST['email'])) {
                        $email = $_POST['email'];
                    } else {
                        echo "";
                    }
                    if (isset($_POST['address'])) {
                        $address = $_POST['address'];
                    } else {
                        echo "";
                    }

                    if (isset($_POST['zip'])) {
                        $zip = $_POST['zip'];
                    } else {
                        echo "";
                    }
                    if (isset($_POST['cardname'])) {
                        $cardname = $_POST['cardname'];
                    } else {
                        echo "";
                    }
                    if (isset($_POST['cardnumber'])) {
                        $cardnumber = $_POST['cardnumber'];
                    } else {
                        echo "";
                    }
                    if (isset($_POST['cvv'])) {
                        $cvv = $_POST['cvv'];
                    } else {
                        echo "";
                    }
                    if (isset($_POST['prname'])) {
                        $prname = $_POST['prname'];
                    } else {
                        echo "";
                    }
                    if (isset($_POST['quantity'])) {
                        $quantity = $_POST['quantity'];
                    } else {
                        echo "";
                    }
                    if (isset($_POST["submit"])) {
                        $que = "INSERT INTO payment (name, email, address, zip, cardname, cardnumber, cvv, prname, quantity) values('$name', '$email', '$address','$zip','$cardname','$cardnumber','$cvv','$prname','$quantity')";
                        if (mysqli_query($conn, $que)) {
                            echo "";
                        }
                    } else {

                        //echo "not okay";
                    }
                    mysqli_close($conn);


                    ?>


                </div>
            </div>
            <div class="col-25">
                <div class="container2">
                    <h4 style="font-size: 20px;padding:20px 10px 20px 50px">Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart" style="color:#cc3399"></i> <b>4</b></span></h4>
                    <p><a href="#">Product 1</a> <span class="price">$10.49</span></p>
                    <p><a href="#">Product 2</a> <span class="price">$10.49</span></p>
                    <p><a href="#">Product 3</a> <span class="price">$6.49</span></p>
                    <p><a href="#">Product 4</a> <span class="price">$6.49</span></p>
                    <hr>
                    <p>Total <span class="price" style="color:black"><b>$33.96</b></span></p>
                </div>
            </div>
        </div>
    </section>



    <!--footer section-->

    <footer class=".footer">

        <div class="row">
            <div class="col-25 col" >
                <h1 style="padding-bottom: 10px ;">Information</h1>
                <div>

                    <a href="#">About us</a>
                </div>
                <div>

                    <a href="#">Returns & Refunds</a>
                </div>
                <div>

                    <a href="#">Terms & Conditions</a>
                </div>
                <div>
                    <a href="#">My Wishlist</a>

                </div>
            </div>
            <div class="col-25 col">
                <h1 style="padding-bottom: 10px ;">Need Help</h1>
                <div>

                    <a href="#">Privacy Policy</a>
                </div>
                <div>

                    <a href="#">Customer Service</a>
                </div>
                <div>

                    <a href="#">Service</a>
                </div>
                <div>
                    <a href="#">Discount Info</a>

                </div>
            </div>

            <div class=col-25>
                <div class="logo"><a href="#">Fashion<span style="color: white;">Fix</span></a></div>
                <div class="icon">
                <a href="#"><i class="fab fa-facebook" style="color: black;" aria-hidden="true"></i></a>

                    <a href="#"><i class="fab fa-twitter" style="color: black;" aria-hidden="true"></i></a>
               
                    <a href="#"><i class="fab fa-github" style="color: black;" aria-hidden="true"></i></a>
               
                    <a href="#"><i class="fab fa-linkedin" style="color: black;" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
        <span>Created By <a href="#">Tisha</a>| <span class="far fa-copyright"></span>All right reserved.</span>
    </footer>


    <script src="script.js"></script>

</body>

</html>