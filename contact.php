<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php
include('./connection/connect.php');
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <s>
        <link rel="stylesheet" href="style.css">
    </s>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .footer .boxx-co .box a {
            display: block;
            color: #666;
            font-size: 1.5rem;
            padding: 1rem 0;
        }
    </style>
</head>

<body>
    <button onclick="topFunction()" id="mysBtn" title="Go to top">Top</button>

    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">fiore </a>

        <nav class="navbar">
            <a href="./index.php">Home</a>
            <a href="./about.php">About</a>
            <a href="./product.php">Product</a>
            <a href="./review.php">Review</a>
            <a href="./contact.php">Contact</a>
        </nav>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>

        </div>
    </header>
    <br> <br> <br> <br> <br> <br>
    <?php
    if (!empty($_SESSION['errs'])) {
    ?>
        <div class="container m-5">
            <div style="font-size: 15px;" class="alert alert-danger" role="alert">
                <ul>
                    <?php
                    foreach ($_SESSION['errs'] as $err) {
                    ?>
                        <li><?= $err ?></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    <?php
    }
    session_unset();
    ?>
    <section class="contact" id="contact">
        <h1 class="heading"><span>Contact</span> Us.. </h1>
        <div class="row">


            <form method="POST" action="handler.php">
                <input type="text" placeholder="name" class="box" name="userName">
                <input type="email" placeholder="email" class="box" name="userMail">
                <input type="number" placeholder="number" class="box" name="userNum">
                <textarea name="msg" class="box" placeholder="message here" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn" name="submit">
            </form>

            <img id="pic" src="./img/Black-Tulip-resized-1024x640.jpg" style="width: 48%;" alt="">


            <div>
            </div>
        </div>
    </section>
    <section class="footer" style="display: flex; gap: 10rem; flex-wrap: wrap;">
        <div class="boxx-co">
            <h3><i class="fa-solid fa-link"></i> quick links</h3>
            <div class="nm" style="margin-right: 8rem;">
                <a href="#" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-house"></i> home</a>
                <a href="#" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-circle-info"></i> about</a>
                <a href="#" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-gifts"></i> product</a>
                <a href="#" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-sharp fa-solid fa-star"></i> review</a>
                <a href="#" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"> <i class="fa-solid fa-address-book"></i> contact us</a>
            </div>
        </div>
        <div class="boxx-co">
            <h3><i class="fa-solid fa-link"></i> extra linls</h3>
            <div class="nm" style="margin-right: 8rem;">
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-user"></i> my account</a>
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-bag-shopping"></i> my order</a>
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-heart"></i> my favoirt</a>
            </div>
        </div>
        <div class="boxx-co">
            <h3><i class="fa-solid fa-location-dot"></i> location</h3>
            <div class="nm" style="margin-right: 8rem ;">
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-flag"></i> egypt</a>
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-flag"></i> japan</a>
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-flag"></i> england</a>
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-flag"></i> france</a>
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-flag"></i> itali</a>
            </div>
        </div>

        <div class="boxx-co">
            <h3><i class="fa-sharp fa-solid fa-envelopes-bulk"></i> contact info</h3>
            <div class="nm">
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-phone"></i> +20100345798</a>
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-paper-plane"></i> flower20@gmal.com</a>
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"> <i class="fa-solid fa-location-dot"></i> egypt, qena</a>
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-paypal"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-amazon-pay"></i>
                <i class="fa-brands fa-cc-stripe"></i>
                <i class="fa-brands fa-apple-pay"></i>
            </div>
            <!-- <img src="./img/xpal.jpg" style=" width: 10%;  " alt=""> -->

        </div>
        </div>
        </div>
        <!-- <img src="./img/xpal.jpg" style=" width: 10%; display: block;" alt=""> -->

        </div>
        <!-- <div class="cridet" style="display: block;">creat by <span> my team</span> |all rights reserved</div> -->

    </section>

    <section>

        <!-- <div class="cridet" style="display: block;">creat by <span> my team</span> |all rights reserved</div> -->
        <h6 class="heading" style="
    background: rgb(255, 243, 245);      
        font-size: 1.5rem;
        padding: 2rem;
        margin-top: -3.5rem;
        border: .1rem solid rgba(0, 0, 0, .1);
        border-radius: .1rem;
        box-shadow: 0  .5rem  1.5rem rgba(0, 0, 0, .1);
        ">
            <div>
                <i class="fa-brands fa-facebook" style="padding-right: 5rem;"></i>
                <i class="fa-brands fa-instagram" style="padding-right: 5rem;  "></i>

                <i class="fa-brands fa-whatsapp"></i>
            </div><br>
            &copy; creat by<span> my team</span> |all rightd reserved


        </h6>



    </section>
    <script src="script.js"></script>
</body>

</html>