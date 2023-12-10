<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Login</h3>
            
          </div>
          <div class="card-body">
          <form action="auth.php" method="post" class="form-login">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <button name="submit" type="submit" class="btn btn-primary"style="background: rgb(135, 1, 1); border: none;">Login</button>
            </form>
          </div>
          <div class="card-footer">
            <p class="text-center">Don't have an account? <a href="signup.php"style="color: rgb(228, 1, 1);">Sign Up</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
