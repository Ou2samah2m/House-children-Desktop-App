<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>مرحبا،<span>بالمدير</span></h3>
      <h1>Bienvenue <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>هذه صفحة المدير</p>
      <a href="login_form.php" class="btn">تسجيل الدخول</a>
      <a href="register_form.php" class="btn">تسجيل</a>
      <a href="logout.php" class="btn">تسجيل خروج</a>
   </div>

</div>

</body>
</html>

