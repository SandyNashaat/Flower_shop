<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <s>
        <link rel="stylesheet" href="style.css">
    </s> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <button onclick="topFunction()" id="mysBtn" title="Go to top">Top</button>

    <header>
        <input type="checkbox" name="" id="toggler">


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

    <section class="about" id="about">
        <h1 class="heading"><span>About </span> Us..</h1>
        <div class="row">
            <div class="vidoe-c" style="display: flex;">

                <video src="./images/WhatsApp Video 2023-05-06 at 7.33.16 PM.mp4 " style="width: 50%; border: 1.5rem solid #fff;
                border-radius: .5rem;
                box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
                height: 100%;
                object-fit: cover;" loop autoplay muted></video>

                <h3 style="position: absolute;
                top: 58%;
                transform:translateY(-50%);
                font-size: 3rem;
                background:#fff;
                width:41% ;
                padding:1rem  2rem;
                text-align: center;
                mix-blend-mode: screen;">best flower sallers</h3>

                <div class="content" style=" margin-top: 15px; margin-left: 30px">
                    <h3>why chose us?</h3>
                    <p>Lorem ipsum dolor sit amet,
                         consectetur adipiscing elit. Phasellus imperdiet, 
                         nulla et dictum interdum, nisi lorem egestas vitae scel
                         <span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. 
                            Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum 
                            augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis.
                             Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                    <button onclick="myFunction()" id="myBtn">Read more</button>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate officiis molestias impedit quos, ad nihil, consectetur magnam excepturi voluptatibus dolor tenetur magni numquam mollitia saepe eveniet consequatur id a. Hic.</p> -->
                    <!-- <button onclick="myFunction()" id="myBtn">Read more</button> -->

                </div>
            </div>
        </div>
    </section>

    <section class="icons-co">
        <div class="icons">
            <!-- <img src="./images/free-delivery.png" alt=""> -->
            <img src="./img/free-shipping.png" alt="">
            <div class="info">
                <h3>free delivery</h3>
                <span>on all orders</span>
            </div>

        </div>

        <div class="icons">
            <!-- <img src="./images/money-bag.png" alt=""> -->
            <img src="./img/money-bag.png" alt="">
            <div class="info">
                <h3>10 days returns</h3>
                <span>monyback guarantee </span>
            </div>

        </div>
        <div class="icons">
            <!-- <img src="./images/gift-box.png" alt=""> -->
            <img src="./img/giftbox.png" alt="">
            <div class="info">
                <h3>offer & gifts</h3>
                <span>on all orders</span>
            </div>

        </div>
        <div class="icons">
            <!-- <img src="./images/cashless-payment.png" alt=""> -->
            <img src="./img/cashless-payment.png" alt="">
            <div class="info">
                <h3> secure paymens</h3>
                <span>protected by paypa</span>
            </div>

        </div>
    </section>

    <section class="footer" style="display: flex; gap: 10rem; flex-wrap: wrap;background: white;">
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

        border: .1rem solid rgba(0, 0, 0, .1);
        border-radius: .1rem;
        box-shadow: 0  .5rem  1.5rem rgba(0, 0, 0, .1);
        padding: 2rem;
        font-size: 1.5rem;
        margin-top: -3.5rem;
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