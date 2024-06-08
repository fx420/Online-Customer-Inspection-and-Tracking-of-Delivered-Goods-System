<?php
    include_once("dbconn.php");

    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = trim($_POST['email']);
      $msg = $_POST['message'];

      $insert_sql = "INSERT INTO `tblfeedbacks`( `name`, `email`, `message`) VALUES ('$name','$email','$msg')";

      if(mysqli_query($conn,$insert_sql)){
          echo 
          "<script>
          alert('Feedback Sumbit Successfully!');
          </script>";
      }else{
          echo"<script>alert('Error in sumbiting feedback!')</script>";
        }
      }
  
      mysqli_close($conn);
?>