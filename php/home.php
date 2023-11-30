<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Portfolio</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!---Header & Logo-->
    <header class="header">
        <a href="home.php" class="logo"><img src="images/el.png" alt=""></a>
        
        <!---Navigation-->
            <nav>
                <ul class='nav-bar'>
                    <input type='checkbox' id='check'>
                    <span class="menu">
                        
                    <li><a href="logout.php" style="--i:1;" class="btn" >LOGOUT </a></li>
                        
                        
                        <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                    </span>
                    <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
                </ul>
            </nav>
            </header>
    <!---Home-->
    <section class="home" id="home">
        <div class="home-content">
            <h1>Hello, I'm Enrico Gonzales</h1>
         <h2><span class="typed-text"></span></h2>
            <p>I'm here to present my Online Personal Portfolio. 
            Enjoy!</p>
            <p>Welcome <?php echo $fullname; ?>!</p>
            
        </div>
     <!---Image -->
        <div class="right">
        <div class="image">
            <img src="images/idolo.png">
        </div>
        <div class="round">
        <div class="moon">
            
            
        </div>
        </div>
        </div>
        
    </section>
     <!---Typed-Text-->
    
</body>
</html>
<script src="./typed.js-main/dist/typed.umd.js"></script>
    <script>
        let typed = new Typed('.typed-text',{
        strings: ['an IT Student','Programmer','Web Developer'],
        typeSpeed: 100,
        backSpeed: 50,
        backDelay: 1000,
        loop: true,
    })

</script>

