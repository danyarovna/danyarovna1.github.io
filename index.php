
 <div class="php" style="color:#000;font-size:30px; font-weight:800;">
<?php 
   date_default_timezone_set('Asia/Almaty');
  echo date ('d-m-Y  H:i:s');
  
?>
</div>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/style_login.css">
<script src="js/script1.js"></script>

   <title>ВХОД</title>
</head>
<body>
 
<div id="openModal" class="form">

<div class="form">
   <h1>ВХОД</h1>
   <div class="input-form">
      <input type="text" placeholder="Логин" id="login">
   </div>
   <div class="input-form">
      <input type="password" placeholder="Пароль" id="my_pass">
   </div>
   <div class="input-form">
      <input type="submit" value="Войти" onclick="my_proverka ();">
   </div>
</div>
</div>

</body>
</html>