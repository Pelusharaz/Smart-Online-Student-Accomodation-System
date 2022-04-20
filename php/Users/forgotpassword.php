
<?php
 require_once '../includes/config.php';
 if (isset($_POST['submit'])){

    $email = $_POST['email'];
    $newpassword = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    $newpasswordhash = password_hash($newpassword, PASSWORD_DEFAULT);
    $repeatpasswordhash = password_hash($repeatpassword, PASSWORD_DEFAULT);
  
  if($_POST['password']==$_POST['repeatpassword']){

    try {
        //code...
        $sql = "UPDATE users SET password='$newpasswordhash',repeatpassword='$repeatpasswordhash'  where email='" . $_POST["email"] . "' ";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo" <script>alert('Password Reset successfully')</script> ";
      header('location:login.php');
  }
  
  else{
       echo("<script>alert('Sorry Passwords Dont Match.Kindly check and Try Again!')</script>
             <script>window.location = 'forgotpassword.php'</script>");  
      }
  
 }
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type = "text/css" href ="../Admin/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" type="image" href="../../img/icons/logo.webp" sizes="96x96" style="border-radius: 50%;"/>
    <title>Smart Accommodation System| Reset Pass</title>
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
    
        <div class="wrapper" style="display:flex; justify-content: center; ">
        <div class="picture" style="margin-top:40px;">
            <img src="../../img/log-in.jpg" alt="" height="480px"  width="400px">
        </div>
        <div class="form-information" style="margin-top:40px;">
        <form action="forgotpassword.php" method="POST">
        <div class="form-container">
            <div class="container">
                <h1 style="display:flex;"><img src="../../img/profile.png" alt="" width="35"> Forgot Password ?</h1>
                <hr><br>
                <label for="Email"><b>Registered email</b></label>
                <input type="email" placeholder="Enter registered email" name="email" required>
                <label for="password"><b>New Password</b></label>
                <div class="password">
                    <input type="password" placeholder="Enter new password" name="password" id="id_password" required>
                    <i class="far fa-eye" id="togglePassword" style="margin:15px; margin-left:-60px;cursor: pointer;"></i>
                </div>
                <label for="Email"><b>Repeat Password</b></label>
                <div class="Repeatpassword" style="display:flex;">
                   <input type="password" placeholder="Repeat new password" name="repeatpassword" id="id_password2" required>
                   <i class="far fa-eye" id="togglePassword2" style="margin:15px; margin-left:-60px;cursor: pointer;"></i>
                </div>
                <hr>
                
                <button type="submit" name="submit" class="registerbtn"style="margin:auto; display:block;">Reset Password</button>
                <br><button style=" background:skyblue;"><a href="login.php"style="text-decoration:none;">Log in</a></button> 
                <button style="float:right; background:skyblue;"><a href="signup.php"style="text-decoration:none;">Sig Up</a></button>
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