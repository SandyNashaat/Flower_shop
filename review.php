<?php
include('./connection/connect.php');

$q = "SELECT * FROM `reviews` ";
$res = mysqli_query($conn, $q);
$reviews = mysqli_fetch_all($res);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <s>
        <link rel="stylesheet" href="style.css">
    </s>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("p").hover(function() {
                    $(this).css("background-color", "pink");
                },
                function() {
                    $(this).css("background-color", "white");
                });
        });
    </script>



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





    <section class="rvieew" id="review">
        <h1 class="heading"><span>Customer</span> Review.. </h1>
        <div class="box-cont">

            <?php
            foreach ($reviews as $rev) {
            ?>

                <div class="box">
                    <div class="stars">
                        <?php
                        for ($i = 0; $i < $rev[3]; ++$i) {
                        ?>
                            <i class="fa-solid fa-star"></i>
                        <?php
                        }
                        ?>

                    </div>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa beatae error debitis facilis illum impedit voluptate ex ab quam molestias ratione quis quidem laudantium, voluptatem obcaecati officia nihil quaerat.</p>


                    <div class="user">
                        <img src="./<?= $rev[4] ?>" alt="">
                        <div class="user-info">
                            <h3><?= $rev[1] ?></h3>
                            <span>Happy Customer</span>
                        </div>

                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>
            <?php
            }
            ?>




        </div>

    </section>

    <section class="footer" style="display: flex; gap: 10rem; flex-wrap: wrap; background: white;">
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
            <h3>extra linls</h3>
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
            <h3>contact info</h3>
            <div class="nm">
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-solid fa-phone"></i> +20100345798</a>
                <a href="" style=" display: block;color: #666;font-size: 1.5rem;padding: 1rem 0;"><i class="fa-sharp fa-solid fa-envelopes-bulk"></i> flower20@gmal.com</a>
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
        margin-top: -3.5rem;
        border: .1rem solid rgba(0, 0, 0, .1);
        border-radius: .1rem;
        box-shadow: 0  .5rem  1.5rem rgba(0, 0, 0, .1);
        padding: 2rem;
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