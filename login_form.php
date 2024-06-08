<?php
    session_start();
    include_once("dbconn.php");

    if(isset($_POST["login"])){
        $uname =  $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM tblusers WHERE username='$uname' AND password='$password'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            echo "Login successful";
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            header("Location: member_index.php");
        }else{
            $error_msg = "<p class='error_msg'>Login Failed! Username or Password Wrong!</p>";
        }
        mysqli_close($conn);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LoveTech. Tracking Platform</title>
    <?php include("link.php") ?>
</head>
<style>
  .error_msg{
    border: 1px red solid;
    text-align: center;
    border-radius: 5px;
    background-color: #FFAAAA;
    color: black;
    font-size: 15px;
    font-weight: bold;
  }
</style>


<body>
    <?php include("header.php") ?>

    <section id="ltr_form">
    <section class="section min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container" style="padding-bottom: 150px;">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            
            <div class="form mb-3">

              <div class="form-body">

                <div class="pt-4 pb-2">
                  <h5 class="form-title text-center pb-0 fs-4">MEMBER LOGIN</h5>
                </div>

                <form action="#" method="post" class="row g-3 was-validated">
                  <?=(isset($error_msg)) ? $error_msg : '';?>
                  <div class="col-12">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" pattern="^(?=.{5,50}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" name="username" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field with your registered usename.</div>
                  </div>
                  <div class="col-12">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
                  </div>
                </form>
                <p class="here">
                  Does not have an account ? <a href="register_form.php" >Register here</a>
              </p>
              </div>
            </div>

            

          </div>
        </div>
      </div>

    </section>
    </section>


    <?php include("footer.php") ?>
</body>
    <?php include("js.php") ?>
</html>