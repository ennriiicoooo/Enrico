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
    background: url(images/load.gif);
    background-size: cover;
    background-attachment: fixed;
    
  }
  .card{
    background-color: rgba(12, 11, 54, 0.325);
    color: white;
    border: 2px solid rgb(12, 11, 54);
  }
  h3{
    color: rgb(31, 143, 255);
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
              <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
          <div class="card-footer">
            <p class="text-center">Don't have an account? <a href="signup.php">Sign Up</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
