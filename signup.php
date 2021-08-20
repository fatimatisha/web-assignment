<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>ServiceFix</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <nav class="navbar">
      <div class="max-width">
         <div class="logo"><a href="#">Service<span>Fix</span></a></div>
         <ul class="menu">
            <li><a href="#">Signup</a></li>
            <li><a href="index.html">Login</a></li>
         </ul>
      </div>
   </nav>

   <div class="container">
      <div class="side">
         <h1 style="text-align: center;">Hi there!</h1>
         <p>Welcome to our website.<br> Create an account to buy our amazing products. <br>Fix your fashion.</p>
         <hr>
         <hr class="two">

      </div>
      <div class="wrapper">
         <div class="title">
            Sign Up
         </div>
         <form method="POST">
            <div class="field">
               <input type="text" name="name" required>
               <label>Full Name</label>
            </div>
            <div class="field">
               <input type="text" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="password" name="cpassword" required>
               <label>Confirm Password</label>
            </div>
            <div class="field">
               <input type="submit" name="submit" value="Sign Up">
            </div>
            <div class="signup-link">
               Already member? <a href="index.php">Login now</a>
            </div>
         </form>

         <?php

         session_start();
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "user";

         $conn = mysqli_connect($servername, $username, $password, $dbname);


         if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
         }

         if (isset($_POST['name'])) {
            $name = $_POST['name'];
         } else {
            echo "";
         }
         if (isset($_POST['email'])) {
            $email = $_POST['email'];
         } else {
            echo "";
         }
         if (isset($_POST['password'])) {
            $password = $_POST['password'];
         } else {
            echo "";
         }

         if (isset($_POST['cpassword'])) {
            $cpassword = $_POST['cpassword'];
         } else {
            echo "";
         }

         if (isset($_POST["submit"]) && $password==$cpassword) {




            $q="select * from usertable where email = '$email'";
            $res=mysqli_query($conn,$q);
            $num=mysqli_num_rows($res);

            if($num==1)
            {
               echo"Use another email";
            }
            else
            {
               $_SESSION['name']=$name;
              
             $que = "INSERT INTO usertable (name, email, password) values('$name', '$email', '$password')"; 
              if (mysqli_query($conn, $que)) {
                  header('location: home.php');
               }
               echo"worked";
            }

         }
         else{
            //echo "pass not matched";
         }



         ?>
      </div>

   </div>
</body>

</html>