<html>
    <head>
        <title>LogIn Form</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php

        if(isset($_POST['regsubmit'])){  
          include 'partials/_dp-connect.php';
          $username = $_POST['uname'];
          $password = $_POST['psw'];
          $email = $_POST['email'];  
          $sql = "INSERT INTO `users` (`username`, `email`, `password`, `time`) VALUES ('$username ', '$email', '$password', current_timestamp())";    
          
          $result = mysqli_query($conn,$sql);
          header("Location: login.php");
          } 
            ?>
            <!-- registeration form -->
            <div class="container">
            <h2 class="headinglogin">Sign Up Form</h2>

                <form  method="post" class="myform">

                  <label for="uname"><b>username</b></label>
				          <input type="text" placeholder="username" name="uname" class="logininputs" required>

                  <label for="email"><b>Email</b></label>
                  <input type="Email" placeholder="Enter Email" name="email" required class="logininputs">
               
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required class="logininputs">
                        
                  <input type="submit" name="regsubmit" value="Register" class="loginsubmit">
                    
                  <a href="index.php" class="back">Home</a>
               
                </form>
                </div>

    </body>

</html>