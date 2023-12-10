<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homie</title>
    <link rel="stylesheet" href="style.css">
    <!-- boxicon css link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<style>
   .home{
        background: url(images/hala.gif);
        background-size: cover;
    }

</style>
<body>
    <div class="overlay"></div>
    <header>
        <a href="home.php" class="logo"><span>E</span>nrico</a>
        <ul class="navlist">
            <li><a href="logout.php">Logout</a></li>
            <li><a href="user_test.php">Users</a></li>
            <p style="color: white;"> Welcome <?php echo $fullname; ?>! </p>
            
        </ul>
        <div class="right-header">
           
            <div class="menu-icon">
                <div class="bar"></div>
            </div>
        </div>
    </header>

    <section class="home">
        <div class="hero-info">
            <h3>Welcome To my World</h3>
            <h1>Hi I'm Enrico</h1>

            <div class="text-animate">
                <h2>IT STUDENT</h2>
                
            </div>
           

           
            

           
        </div>
        <div class="right">
       
        <div class="img-hero">
            <img src="images/e.png" alt="">
            <div class="rotate-text">
                <div class="text">
                    <p>I'm IT Student, Web Designer, Encoder And  Programmer</p>
                </div>
                <span><i></i></span>
            </div>
            </div>
        </div>
    </section>
    </body>
    </html>
    <!-- scroll reveal  -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- mixitup cdn js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="script.js"></script>
