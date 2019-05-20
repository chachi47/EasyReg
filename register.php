<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EasyReg Registeration Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div>
      <?php
      if (isset($_POST['registerme'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phone'];
        $password = $_POST['password'];

       $sql = "INSERT INTO useraccounts.users (firstname,lastname,email,phonenumber,password) VALUES(?,?,?,?,?)";
       $stmtinsert = $db->prepare($sql);
       $result = $stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
       /* if (result) {
         echo 'Successfully Saved.';
       }else{
         echo 'Failed to save the Data.';
       } */
     }

       ?>
    </div>
  <form  action="register.php" method="post">
   <div class="container">
      <div class="row">
      <div class="col-sm-4">
        <h1 class="display-3">Create An Account</h1>
        <label for="firstname">First Name:</label>
        <input class="form-control" type="text" name="firstname" class="textInput" required>
        <label for="lastname">Last Name:</label>
        <input class="form-control" type="text" name="lastname" class="textInput" required>
        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" class="textInput" required>
        <label for="phone">Phone:</label>
        <input class="form-control" type="phone" name="phone" class="textInput" required>
        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password" class="textInput" required>
        <hr class="mb-10">
        <input class="btn btn-outline-primary" type="submit" name="registerme" value="Register">
      </div>
      </div>
   </div>
  </form>
  </body>
</html>
