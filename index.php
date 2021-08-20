<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <title>FashionFix</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>

   <nav class="navbar">
      <div class="max-width">
         <div class="logo"><a href="#">Fashion<span>Fix</span></a></div>
         <ul class="menu">
            <li><a href="signup.html">Signup</a></li>
            <li><a href="#">Login</a></li>
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
            Login Form
         </div>
         <form method="POST">
            <div class="field">
               <input type="text" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" name="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="signup.php">Signup now</a>
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
            die("Connection failed: ". mysqli_connect_error());
            }

           
         if(isset($_POST['email'])){
            $email=$_POST['email'];
            }
            else{
               echo "";
            }
         if(isset($_POST['password'])){
               $password=$_POST['password'];
            }
            else{
               echo "";
            }
      

            if(isset($_POST["submit"]))
	         {
               $q="select * from usertable where email = '$email' && password = '$password'";


               $res =mysqli_query($conn,$q);
               mysqli_query($conn,$res);
               $num = mysqli_num_rows($res);
               if($num==1){
                  header('location:home.php');

               }
               else
               {
                  header('location:index.php');
               }
               echo"done";

               while($row=mysqli_fetch_assoc($res))
               {
                  $_SESSION['name']=$row['name'];
               }


            }

            //}

            

         ?>

      </div>

   </div>
</body>

</html>