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
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
            <a href="about.php">About</a>
            <a href="login.html">login</a>
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

        <form action="book_form.php" method="post" class="book-form" id="bookingForm">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" id="input" autocomplete="off" minlength="3" maxlength="25" required>
                </div>

                <div class="inputBox">
                    <span>@email :</span>
                    <input type="email" placeholder="enter your email" name="email" id="input" autocomplete="off" pattern=".*.com" minlength="5" maxlength="25" required>
                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="tel" placeholder="enter your number" name="phone" id="input" autocomplete="off" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"  minlength="10" maxlength="10" required>
                </div>

                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" placeholder="enter your address" name="address" id="input" autocomplete="off" minlength="10" maxlength="30" required>
                </div>

                <div class="inputBox">
                    <label for="places"><span>Places:</span></label>
                    <select name="location" class="places" id="input" required>
                        <option value="">Choose your location</option>
                        <option value="Lonavala">Lonavala</option>
                        <option value="HelensPoint">Helen's Point</option>
                        <option value="NainiPeak">Naini Peak</option>
                        <option value="AndharbanTrek">Andharban Trek</option>
                        <option value="KalsubaiPeak">Kalsubai Peak</option>
                        <option value="ThosegharWaterfall">Thoseghar Waterfall</option>
                        <option value="HariharFort">Harihar Fort</option>
                        <option value="HarishchandraFort">Harishchandra Fort</option>
                        <option value="KedarnathTemple">Kedarnath Temple</option>
                        <option value="Mahabaleshwar">Mahabaleshwar</option>
                        <option value="BuddhaPark">Buddha Park</option>
                        <option value="StatueOfUnity">The Statue of Unity</option>
                        <option value="TajMahal">Taj Mahal</option>
                        <option value="GatewayOfIndia">The Gateway of India</option>
                        <option value="Colosseum">The Colosseum</option>
                    </select>
                </div>

                <div class="inputBox">
                    <span>member:</span>
                    <input type="number" placeholder="number of guests" name="guests" id="input" autocomplete="off" min="1" max="50" required>
                </div>

                <!-- <div class="inputBox">
                    <span>leaving:</span>
                    <input type="date" name="leaving" min="2025-03-01" max="2026-01-01" required>
                </div> -->

                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date" name="arrivals" min="2025-03-01" max="2026-02-01" required>
                </div>

                <div class="inputBox">
                    <span>leaving:</span>
                    <input type="date" name="leaving" min="2025-03-01" max="2026-01-01" required>
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
    <section class="footer" style="background: url(img/footerbg.avif);">
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
                <a href="#"> <i class="fas fa-phone"></i> +91 937-307-2168</a>
                <a href="#"> <i class="fas fa-phone"></i> +91 930-923-2414</a>
                <a href="#"> <i class="fas fa-envelope"></i>tourse99@gmail.com</a>
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

        <div class="credit"> <img src="img/copyright.png" alt=""> 2025 | all rights reserved!</div>
    </section>

    <!-- footer section ends -->

    <!-- swiper js file link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>
