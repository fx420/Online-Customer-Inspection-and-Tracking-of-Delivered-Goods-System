<?php

// Add Parcel
    function trackingErr()
      {
          if (isset($_POST['tracking_number'])) {
            $tracking = $_POST['tracking_number'];
            if (strlen($tracking) == 13 and preg_match("/^[a-zA-Z]{2,3}[0-9]+$/", $tracking)) {
                echo '<span class="match">Valid</span>';
                $result1 = 1;
                return $result1;
            } else {
                echo '<span class="error">* Please enter valid tracking number.</span>';
                $result1 = 0;
                return $result1;
            }
          }else{
            echo "<div class='invalid-feedback'>Please fill out this field.</div>";
            $result1 = 0;
            return $result1;
          }
      }

      function locationErr(){
        if (isset($_POST['toState'])){
          $fromLocation = $_POST['fromState'];
          $toLocation = $_POST['toState'];
          if ($fromLocation !== $toLocation){
            echo '<span class="match">Valid</span>';
            $result2 = 1;
            return $result2;
          }else{
            echo '<span class="error">* Do not select the same location.</span>';
            $result2 = 0;
            return $result2;
          }
        }
      }
    
      function descriptionErr(){
        if(isset($_POST['description'])){
            $description = $_POST['description'];
            if(strlen($description) >=1 ){
                echo "<span class='match'>Valid</span>";
                $result3 = 1;
                return $result3;
            }else{
                echo "<span class='error'>* Please fill in this field.</span>";
                $result3 = 0;
                return $result3;
            } 
        }
      }
      

      function checkForm_addParcel()
      {
          $result1 = trackingErr();
          $result2 = locationErr();
          $result3 = descriptionErr();

          $result = ($result1 + $result2 + $result3);
          if ($result >= 3) {
              return true;
          }
          return false;
      }

    //   Edit Staff Profile

      function passwordErr()
    {
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            $number = preg_match('@[0-9]@', $password);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            if (strlen($password) > 7 && $number && $uppercase && $lowercase) {
                echo '<span class="match">Valid</span>';
                $result1 = 1;
                return $result1;
            } else {
                echo '<span class="error">* Minimum length of eight characters and must contain at least one number, one upper case letter, and one lower case letter.</span>';
                $result1 = 0;
                return $result1;
            }
        } 
    }
  
    function fullnameErr(){
      if (isset($_POST['name'])){
        $name = $_POST['name'];
        if (preg_match("/^([a-zA-Z' ]+)$/",$name)){
          echo '<span class="match">Valid</span>';
          $result2 = 1;
          return $result2;
        } else{
          echo '<span class="error">* Please enter valid name.</span>';
          $result2 = 0;
          return $result2;
        }
      } 
    }

    function checkForm_editStaff()
    {
        $result1 = passwordErr();
        $result2 = fullnameErr();

        $result = ($result1 + $result2);
        if ($result >= 2) {
            return true;
        }
        return false;
    }


    // Register
    function usernameErr()
    {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            if (strlen($username) >= 5 and preg_match("/^[a-zA-Z0-9]+$/", $username)) {
                echo '<span class="match">Valid</span>';
                $result1 = 1;
                return $result1;
            } else {
                echo '<span class="error">* Username must contain 5 or more characters, only letters and numbers allowed</span>';
                $result1 = 0;
                return $result1;
            }
        } 
    }

    function usernameErr_register()
    {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            if (strlen($username) >= 5 and preg_match("/^[a-zA-Z0-9]+$/", $username)) {
                $result1 = 1;
                return $result1;
            } else {
                $result1 = 0;
                return $result1;
            }
        } 
    }

    function passwordErr_register()
    {
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            $number = preg_match('@[0-9]@', $password);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            if (strlen($password) > 7 && $number && $uppercase && $lowercase) {
                $result1 = 1;
                return $result1;
            } else {
                $result1 = 0;
                return $result1;
            }
        } 
    }

    function emailErr()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            } else {
                echo '<span class="match">Valid</span>';
            }
        } 
    }


    function phoneErr()
    {
        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
            if (preg_match('/^[0-9]{10}\z/', $phone)) {
                $result3 = 1;
                return $result3;
            } else {
                $result3 = 0;
                return $result3;
            }
        } 
    }

    function confPasswordErr()
    {
        if (isset($_POST['confPassword'])) {
            $repass = $_POST['confPassword'];
            $pass = $_POST['password'];
            if ($repass !== $pass) {
                echo "<script>alert('Password doesn't match!')</script>";
                $result4 = 0;
                return $result4;
            } else {
                $result4 = 1;
                return $result4;
            }
        } 
    }



    function agreeErr()
    {
        if (isset($_POST['agree-term'])) {
            $result5 = 1;
            return $result5;
        } else {
            $result5 = 0;
            return $result5;
        }
    }

    function checkForm_register()
    {
        $result1 = usernameErr_register();
        $result2 = passwordErr_register();
        $result3 = phoneErr();
        $result4 = confPasswordErr();
        $result5 = agreeErr();

        $result = ($result1 + $result2 + $result3 + $result4 + $result5 + $result5);
        if ($result >= 5) {
            return true;
        }
        return false;
    }

?>