<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <title>Login Form</title>
</head>
<style>
  body{
    background: url(images/ha.gif);
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    
  }
  .card{
    background-color: rgba(135, 1, 1, 0.3);
    color: white;
    border: 2px solid rgb(135, 1, 1);
  }
  h3{
    color: rgb(228, 1, 1);
  }
  .form-control{
    color:  #FDF7E4;
    background: rgba(36, 36, 36, 0.5);
  }
</style>
<body>
<div class="wrapper">
        <div class="form-container sign-up">
            <form action="signin.php" method="post">
                <h2>sign up</h2>
                <div class="form-group">
                    <input type="text" name="fullname" required>
                    <i class="fas fa-user"></i>
                    <label for="" >fullname</label>
                </div>
                <div class="form-group">
                    <input type="email" name="email" required>
                    <i class="fas fa-at"></i>
                    <label for="" >email</label>
                </div>
                <div class="form-group">
                    <input type="text"  name="username" required>
                    <i class="fas fa-user"></i>
                    <label for="" >username </label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required>
                    <i class="fas fa-lock"></i>
                    <label for=""  >password</label>
                </div>
                
                
                <button type="submit"  name="submit" class="btn">Sign up</button>
                <div class="link">
                    <p>You already have an account?<a href="#" class="signin-link"> Log in</a></p>
                </div>
            </form>
        </div>
        <div class="form-container sign-in">
        <?php
            include('config.php');?>
            <form action="auth.php" method="post">
                <h2>login</h2>
                <div class="form-group">
                    <input type="text" name="username" required>
                    <i class="fas fa-user"></i>
                    <label for="" >username</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required>
                    <i class="fas fa-lock"></i>
                    <label for="" >password</label>
                </div>
                <div class="forgot-pass">
                    <a href="#">forgot password?</a>
                </div>
                <button type="submit"  name="submitt" class="btn">login</button>
                <div class="link">
                    <p>Don't have an account?<a href="#" class="signup-link"> Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>
