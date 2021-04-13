<html>
    <head>
        <title>LogIn Form</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        if(isset($_POST['loginsubmit'])){  
				include 'partials/_dp-connect.php';
				$login = false;
				$email = $_POST['email'];  
				$password = $_POST['psw'];
				$sql = "Select * from users where email = '$email' AND password = '$password'";
				$result = mysqli_query($conn,$sql);
				$num= mysqli_num_rows($result);
				if($num == 1){
					$login = true;
					session_start();
					$_SESSION['loggedIn'] = true;
					$_SESSION['email'] = $email;
                    header("Location: index.php");
				}
				else {
					echo "<p class='validation'>Invalid Email Password</p>";
				}
			} 
            ?>
            <!-- login form -->
            <div class="container">
            <h2 class="headinglogin">Login Form</h2>

                <form  method="post" class="myform">
            

               
                    <label for="email"><b>Email</b></label>
                    <input type="Email" placeholder="Enter Email" name="email" required  class="logininputs">

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required  class="logininputs">
                        
                    <input type="submit" name="loginsubmit" value="LogiIn" class="loginsubmit">
                    
                    <a href="index.php" class="back">Home</a>
               
                </form>
                </div>

    </body>

</html>