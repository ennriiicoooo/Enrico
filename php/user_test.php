<?php include('session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">user_id</th>
            <th scope="col">Fullname</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th scope="col">Status</th>
            <th scope="col">Date_Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

        $count = 1;

        $sql_user ="SELECT * FROM tbl_user";
        $result = mysqli_query($conn, $sql_user);

        while($row = mysqli_fetch_array($result)){

          $uid = $row['user_id'];
          $status = $row['active'];
       
          

        ?>
          <tr>
            <th scope ="row"><?php echo $count++; ?></th>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['username']; ?></td>
            
            <td>

            <?php if($status == 1){ ?>
                <span class="badge bg-success">Active</span>
                <?php } else {?>  
                <span class="badge bg-dark">Deactive</span>
              <?php } ?>
                
              
            </td>
          
            <td> <?php echo $row['date_created']; ?></td>
            
            <td>
            
            <!---<a href=""   data-bs-toggle="modal" data-bs-target="#editModal"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-edit></i></button></a>
                -->
                <a href="user_test.php?edit_id=<?php echo $row['user_id']; ?>"><button class="btn btn-primary btn-sm"><i class = "fa-solid fa-edit"></i></button></a>
                <a href="delete.php?user_id=<?php echo $row['user_id']; ?>" onclick="return confirm('Are you sure you want to delete? All information');">
                <button class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></button></a>
              </td>
          </tr>
          <?php  }?>
        </tbody>
      </table>

      <?php if(isset($_GET['edit_id'])){
      $get_id = $_GET['edit_id'];
      
      $sql_user = "SELECT * FROM tbl_user WHERE user_id='$get_id'";
      $result = mysqli_query($conn, $sql_user);
      
      while($row = mysqli_fetch_array($result)){

        $active = $row['active'];
        ?>

      <div class="col-3">
        <div id="registrationForm" class="form-singin w-100 m-auto form-shadow py-4">
          <form action="update.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Update</h1>

            <input class="hidden" type="text" name="edit_id" value="<?php echo $row['user_id']  ?>"/>

            <div class="form-floating py-2">
            <input type="text" class="form-control" id="floatingName" placeholder="Fullname" name="fullname" value="<?php echo $row['fullname']; ?>">
            <label for="floatingName">Fullname</label>
            </div>

            <div class="form-floating py-2">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $row['email']; ?>">
            <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating py-2">
            <input type="text" class="form-control" id="floatingUser" placeholder="Username" name="username" value="<?php echo $row['username']; ?>">
            <label for="floatingUser">Username</label>
            </div>

            <div class="form-floating py-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?php echo $row['password']; ?>">
            <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check form-switch py-2">
            <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked" value="1"<?php if($active == 1){echo "checked";}else {echo "";} ?>>
            <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit" name="update">Submit</button>
            </form>
            </div>
            </div>

            <?php } } ?>
            <a href="home.php" class="btn" >Back</a>

</body>
</html>
<script>
  $(documents).ready( function (){
  $('#myTable').DataTable();
  
  } );
  </script>