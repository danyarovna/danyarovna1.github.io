<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'");
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") ;
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Барна Темирова</title>

  

   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>


<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Портфолио</a>

   <nav class="navbar">
      <a href="#home" class="active">Главная</a>
      <a href="#about">Обо мне</a>
      <a href="#services">Сервисы</a>
    
      <a href="#contact">Отправьте сообщение</a>
        <a href="index.php">Выход</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>



<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/about.jpeg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Привет, я Барна!</h3>
      <span data-aos="fade-up">Веб-дизайнер и разработчик</span>
      <p data-aos="fade-up">Веб-дизайн — отрасль веб-разработки и разновидность дизайна, в задачи которой входит проектирование пользовательских веб-интерфейсов для сайтов или веб-приложений.</p>
      <a data-aos="fade-up" href="#about" class="btn">Обо мне</a>
   </div>

</section>


<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>Биография</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Я – предприниматель в сфере разработки и продаж программного обеспечения с 2019 года. У меня высшее техническое образование. Cвою трудовую деятельность я начинала как программист, также руководила небольшими командами, занимался как продуктовой, так и заказной разработкой.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>ФИО: </span> Темирова Барна Данияровна </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> temirovabarni@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>Адрес : </span> Семей,Глинки 45 </h3>
         <h3 data-aos="zoom-in"> <span>Телефон : </span> 8-707-763-49-33</h3>
         <h3 data-aos="zoom-in"> <span>Возраст : </span> 20  </h3>
         <h3 data-aos="zoom-in"> <span>Опыт: </span> 2+ года </h3>
      </div>

    

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>Навыки и умения</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span style="padding-top: 50px;"  >Образование и опыт</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">Образование</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2020 )</span>
               <h3>Веб-дизайнер</h3>
               <p>"6В02106 Веб-дизайн" в КазУЭФМТ</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2021 )</span>
               <h3>Веб-дизайнер</h3>
               <p>"Информатика и Веб-дизайн" в КазНПУ</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>Графический веб-дизайн</h3>
               <p>"Графический веб-дизайнер" в Caspian University </p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">Опыт</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2019 - 2020 )</span>
               <h3>Веб-дизайнер</h3>
               <p>"ТОО Интернет-Ангелы",Алматы</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2021 )</span>
               <h3>Веб-графический дизайнер</h3>
               <p>"BarFly Restaurant",г.Астана</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>Веб-дизайнер</h3>
               <p>"Креатив Design" г.Алматы</p>
            </div>

         </div>

      </div>

   </div>

</section>



<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>Сервисы</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>Веб-разработчик</h3>
         <p> Это программист или кодер, который специализируется или специально занимается разработкой приложений для всемирной паутины с использованием модели клиент-сервер.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>Графический дизайнер</h3>
         <p>Графический дизайнер работает с вывесками, рекламными щитами, плакатами, указателями и т.д.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Свободный набор инструментов для создания сайтов и веб-приложений.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>Поиско́вая оптимиза́ция</h3>
         <p> Комплекс мероприятий по внутренней и внешней оптимизации для поднятия позиций сайта в результатах выдачи поисковых систем по определённым запросам пользователей</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>Цифровой маркетинг </h3>
         <p>Общий термин, используемый для обозначения таргетивного и интерактивного маркетинга товаров и услуг, использующего цифровые технологии для привлечения потенциальных клиентов и удержания их в качестве потребителей.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Свободно распространяемая система управления содержимым сайта с открытым исходным кодом;</p>
      </div>

   </div>

</section>



<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>ФОТО</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img1.jpg" alt="">
         <h3>Веб-разработчик</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img2.jpg" alt="">
         <h3>Веб-дизайнер</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img3.jpg" alt="">
         <h3>Графический веб-дизайнер</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img4.jpg" alt="">
         <h3>Веб-дизайнер</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img5.jpg" alt="">
         <h3>Графический веб-дизайнер</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img6.jpg" alt="">
         <h3>Веб-разработчик</h3>
         <span>( 2020 - 2022 )</span>
      </div>

   </div>

</section>



<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>Отправьте сообщение</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="Введите свои имя" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="Введите свои email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Введите свои номер телефона" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="Введите сообщение" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="Отправить" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>Телефон</h3>
         <p>8-707-763-49-33</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>temirovabarni@gmail.com </p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Адрес</h3>
         <p>Семей,Глинки 45</p>
      </div>

   </div>

</section>














<script src="js/script.js"></script>

</body>
</html>