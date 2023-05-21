<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Check out</title>
        <link href ="icon.jpg" rel="icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Shrikhand&display=swap" rel="stylesheet">
        
        <!-- CSS -->
        <link rel="stylesheet" href="Cart.css">
    </head>
    <body>
        <nav>
            <img src="icon.jpg">

            <div>
                <a href="front.html">Home</a>
                <a href="about.html">About</a>
                <a href="order.html">Order</a>
            </div>

            <div class="icon-page"><i class='bx bx-shopping-bag'></i></div>
        </nav>
        <main>
            <section class="address">
            <div class="cart-title">
                    <h1>Address</h1>
                </div>
                <div class="add-container">
                    <div class="customer">
                        <?php echo $_POST['fname'];?>
                        <?php echo $_POST['lname'];?>
                    </div>
                    <div class="full-address">
                    <p>
                        <?php echo $_POST['address'];?>
                        <?php echo $_POST['brgy'];?>
                    </p>
                    <p>
                        <?php echo $_POST['city'];?>
                        <?php echo $_POST['prov'];?>
                        <?php echo $_POST['pCode']; ?>
                    </p>
                    </div>
                    <div class="contact">
                        <p>
                        <?php echo $_POST['email'];?>
                        </p>
                        <p>
                        <?php echo $_POST['phone'];?>
                        </p>
                    </div>
                </div>
            </section>
            <section class="cart-products">
                <div class="cart-title">
                    <h1>O r d e r</h1>
                </div>
                <div class="cart-order">
                    <?php
                        $crepe_1 = $_POST['quantity-crepe1'];
                        $crepe_2 = $_POST['quantity-crepe2'];
                        $crepe_3 = $_POST['quantity-crepe3'];
                        $crepe_4 = $_POST['quantity-crepe4'];
                        $drink = $_POST['quantity-drink'];

                        $ttl_1 = ($crepe_1*30);
                        $ttl_2 = ($crepe_2*25);
                        $ttl_3 = ($crepe_3*25);
                        $ttl_4 = ($crepe_4*25);
                        $ttl_5 = ($drink*25);

                        if ($crepe_1 > 0) {
                            echo "<div class=container>" . "<img src=crepe.1.png class=prod-img>" . "<h1 class=name>Mango Cream Crepe</h1> " . "<p class=comp>" . $crepe_1 . "pc/s " . $ttl_1 . "php" . "</p>" . "</div>" . "<br />";
                        }
                        if ($crepe_2 > 0) {
                            echo "<div class=container>" . "<img src=crepe.2.png class=prod-img>" . "<h1 class=name>Matcha Boba Crepe</h1> " . "<p class=comp>" . $crepe_2 . "pc/s " . $ttl_2 . "php" . "</p>" . "</div>" . "<br />";
                        }
                        if ($crepe_3 > 0) {
                            echo "<div class=container>" . "<img src=crepe.3.png class=prod-img>" . "<h1 class=name>Okinawa Milktea Crepe</h1> " . "<p class=comp>" . $crepe_3 . "pc/s " . $ttl_3 . "php" . "</p>"  . "</div>" . "<br />";
                        }
                        if ($crepe_4 > 0) {
                            echo "<div class=container>" . "<img src=crepe.4.png class=prod-img>" . "<h1 class=name>Chocolate Oreo Crepe</h1> " . "<p class=comp>" . $crepe_4 . "pc/s " . $ttl_4 . "php" . "</p>"  . "</div>" . "<br />";
                        }
                        if ($drink > 0) {
                            echo "<div class=container>" . "<img src=drink.1.png class=prod-img>" . "<h1 class=name>Mix Berries Quencher</h1> " . "<p class=comp>" . $drink . "pc/s " . $ttl_5 . "php" . "</p>"  . "</div>" . "<br />";
                        }
                        if ($crepe_1 == 0 && $crepe_2 == 0 && $crepe_3 == 0 && $crepe_4 == 0 && $drink == 0) {
                            echo "<div class=container-empty>" . "<h1 class=name>Your cart is empty!</h1> " . "</div>";
                        }
                    ?>
                </div>
                <div class="total">
                    <?php
                    $delFee = 25;
                    $subT = ($ttl_1 + $ttl_2 + $ttl_3 + $ttl_4 + $ttl_5);
                    $total = $delFee + $subT;
                    echo "Subtotal: " . $subT . "php" . "<br />";
                    echo "Delivery fee: $delFee" . "php" . "<br />";
                    echo "Total: " . $total . "php" . "<br />";
                    ?>
                    <a href="done.html" class="thank">Confirm</a>
                </div>
            </section>
        </main>
        <footer>
            <div class="gridFooter">
                <section class="iconFooter">
                    <img src="icon.jpg">
                </section>

                <section class="copyright">
                    <h2>&copy 2023 BreaChers. All rights reserved.</h2>
                </section>

                <section class="links">
                    <h3>Contact Us</h3>
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=100091991495473"><i class='bx bxl-facebook-circle'></i></a>
                        <a href="mailto:BreaChers11@gmail.com?subject=Mail from the website"><i class='bx bx-envelope' ></i></a>
                    </div>
                </section>
            </div>
        </footer>
    </body>
</html>