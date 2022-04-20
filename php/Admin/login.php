<!--admin log in -->
<?php
session_start();

require_once '../includes/config.php';

if(ISSET($_POST['submit'])){

$stmt = $DBH->prepare("SELECT * FROM admin WHERE email = ?");
$stmt->execute([$_POST['email']]);
$user = $stmt->fetch();
$_SESSION['email'] = $user['email'];

if ($user && password_verify($_POST['password'], $user['password']))
{   
	$_SESSION['email'] = $user['email'];
    echo "<script>alert('Log in Successful')</script>
	<script>window.location = 'admin.php'</script>";
} else {
    echo "
	<script>alert('Invalid email or password')</script>
	<script>window.location = 'login.php'</script>
	";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type = "text/css" href ="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" type="image" href="../../img/icons/logo.webp" sizes="96x96" style="border-radius: 50%;"/>
    <title>Smart SAS Admin Login</title>
</head>
<body style="background-image: url('../../img/loginbg2.jpg');">
    <style>
        @media only screen and (max-width:570px) {
            .picture{
                display:none;
            }
            form{
                height:100%;
            }
        }
    </style>
    
        <div class="wrapper" style="display:flex; justify-content: center;">
        <div class="picture" style="margin-top:80px;">
            <img src="../../img/home1.jpg" alt="" height="440px"  width="400px">
        </div>
        <div class="form-information" style="margin-top:80px;">
        <form action="login.php" method="POST">
        <div class="form-container">
            <div class="container">
                <h1>Admin Log in <img src="../../img/padlock.png" alt=""align="left" width="50"></h1>
                <hr><br>
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <label for="Email"><b>email</b></label>
                <input type="email" placeholder="Enter email" name="email" required>
                <label for="password"><b>Password</b></label>
                <div class="password">
                    <input type="password" placeholder="Enter password" name="password" id="id_password" required>
                    <i class="far fa-eye" id="togglePassword" style="margin:15px; margin-left:-60px;cursor: pointer;"></i>
                </div>
                <hr>
                
                <button type="submit" name="submit" class="registerbtn">Log in</button>
                <br><a href="signup.php"style="text-decoration:none;">sign up</a>
                <button style="float:right; background:skyblue;display:none;"><a href="forgotpassword.php"style="text-decoration:none;">Forgot Password</a></button>
              </div>
        </div>
    </form>

        </div>
    </div>
   
    
    <!---TogglePassword-->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');
 
       togglePassword.addEventListener('click', function (e) {
           // toggle the type attribute
           const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
           password.setAttribute('type', type);
           // toggle the eye slash icon
           this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script>
        const togglePassword2 = document.querySelector('#togglePassword2');
        const repeatpassword = document.querySelector('#id_password2');
 
       togglePassword2.addEventListener('click', function (e) {
           // toggle the type attribute
           const type = repeatpassword.getAttribute('type') === 'password' ? 'text' : 'password';
           repeatpassword.setAttribute('type', type);
           // toggle the eye slash icon
           this.classList.toggle('fa-eye-slash');
        });
    </script>

    </body>
</html>