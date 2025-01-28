<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>


    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font Awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- header section starts  -->

    <section class="header">
    <a href=""><img class="lgo" src="img/logo6.avif" alt=""></a>
        <a href="home.php" class="logo">Tours & Travels</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>



    </section>



    <!-- header section ends -->

    <div class="heading" style="background: url(img/third.webp) no-repeat; height:15rem;">
        <h1 class="boo">book now !</h1>
    </div>



    <!-- booking section starts -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" required style="width: 482px;">
                </div>

                <div class="inputBox">
                    <span>@email :</span>
                    <input type="email" placeholder="enter your email" name="email"  required style="width: 463px;">
                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone"  required style="width: 480px;">
                </div>

                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address"  required style="width: 456px;">
                </div>

                <div class="inputBox">
                    <span>places :</span>
                    <input type="text" placeholder="place you want to visit" name="location"  required style="width: 474px;">
                </div>

                <div class="inputBox">
                    <span>members :</span>
                    <input type="number" placeholder="number of guests" name="guests"  required style="width: 442px;">
                </div>

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals"  required style="width: 460px;">
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving"  required>
                </div>

            </div>

            </div>
            <div class="bt">
                <input type="reset" value="reset" class="btn" id="b" name="clear">
                <input type="submit" value="submit" class="btn" name="send">
            </div>
        </form>
    </section>

    <!-- booking section ends -->







    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"> </i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"> </i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"> </i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"> </i> book</a>

            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>

            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123 -456 -7890</a>
                <a href="#"> <i class="fas fa-phone"></i> +111 -222 -3333</a>
                <a href="#"> <i class="fas fa-envelope"></i>yogesh@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i>sambhajinagar -431003</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i>facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i>linkin</a>
            </div>

        </div>

        <div class="credit"> created by <span>Mr.Yogesh Patil</span> | all rights reserved!</div>


    </section>
















    <!-- footer section ends -->



    <!-- swiper js file link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- coustom js file link -->
    <script src="script.js"></script>

</body>

</html>