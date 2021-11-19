<?php
    session_start();
    $user_is_first_timer = !isset( $_COOKIE["FirstTimer"] );
    setcookie( "FirstTimer", 1, strtotime( '+1 year' ) );
    include('functions.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/flex.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script src="js/custom.js"></script>

    <title>Online Shop Theme</title>


</head>
<body>

    <?php if( $user_is_first_timer ): ?>
    <div id="modal-1" class="modal animate-opacity">
        <div class="modal-content">
           <div class="modal-inner">
              <span onclick="document.getElementById('modal-1').style.display='none'" class="modal-close">&times;</span>
              <h4>Hello </h4>
              <p>For the new Visitor OFF 50%.</p>
           </div> 
        </div>
    </div>
    <?php endif; ?>

    <header>
        <div class="top-header">
            <div class="top-h-inner">
                <div class="call-action">
                    Call and Order in <span>+1718-904-4450</span>
                </div>
                <div class="social-top">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-snapchat"></i></a>
                </div>
            </div>
        </div>

        <div class="inner">
            <div class="logo">
                <h1 class="logo-txt"><a href="./index.php">Passionis.</a></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="nav-icons">

                <div class="ico-search"><span></span></div>
                <div class="form-search" id="mySearchForm">
                    <form action="/action_page.php" class="form-search-container">
                        <input type="text" placeholder="Search" name="search" required>
                        <button type="submit" class="btn"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <div class="ico-login"><span></span></div>
                <div class="form-login" id="myLoginForm" >
                    <div class="form-login-container">
                        <?php if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) : ?>
                            <p class="login-text">Welcome <span><?= $_SESSION['username'] ?></span></p>
                            <a class="logout" href="./logout.php">Log Out</a>
                        <?php else : ?> 
                        <form action="./login.php" method="POST">
                            <p class="login-text">Welcome to <span>Passionis.</span></p>
                            <input type="text" name="username" placeholder="Enter Username">
                            <input type="password" name="password" placeholder="Enter Password">
                            <input type="submit" name="login" value="LogIn">
                        </form>
                        <?php endif ?>
                        <?php if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == false ) : ?>
                            <p class="text-red-600">Invalid credentials. Please try again.</p> 
                        <?php endif ?>
                    </div>
                </div>

                <div class="ico-cart"><span></span></div>
                <div class="form-cart" id="myCart" >
                    <div class="form-cart-container">
                        <?php if(isset($_SESSION['items']) && !empty($_SESSION['items'])) : ?>
                            <?php foreach($_SESSION['items'] as $product) : ?>
                                <div class="cart-inner">
                                    <div class="cart-img"><img src="<?= $product['imgUrl'] ?>" alt=""></div>
                                    <div class="cart-inf">
                                        <div class="cart-title"><?= $product['name'] ?></div>
                                        <div class="cart-price">$ <?= $product['price'] ?></div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <div class="cart-subtotal-inner">
                                <div class="cart-subtotal-text">SubTotal:</div>
                                <div class="cart-subtotal-price">$ <?php echo totalPrice(); ?></div>
                            </div>
                            <form action="./checkout.php" method="POST">
                                <input type="submit" name="login" value="Checkout">
                            </form>
                        <?php else : ?>
                            <p class="no-item">No Products in the Cart</p>
                        <?php endif ?>
                    </div>
                </div>
            </div>

        </div>
    </header>