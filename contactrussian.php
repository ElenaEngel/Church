<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="saintgeorge.css">
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/triod-postnaja" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=3.0.1"></script>
<script type="text/javascript" src="js/infinite-rotator.js"></script>
  <script language="Javascript" src="http://script.days.ru/icon.php?advanced=1&href=1&tmshift=-11"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Saint George Orthodox Russian Church</title>
<script>
   /* var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contact").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "project(contactpagerussian).php", true);
        xmlhttp.send();*/
    </script>
</head>
<body>
    <div class = "row">
<header class="col-12 col-s-12 header3">

 <?php
      include "MenuRussian.php";
      ?>

</header>
        </div>
<main class="col-12 col-s-12 borderimage">

	<div class="row">
	

		
	<div class="col-5 col-s-5">
		<div class="container1">
 <?php 
if(isset($_POST['send'])) {
 
    $from = 'webmaster@example.com'; 
    $body = "User: ".$_POST['name']."\n".
            "Email: ".$_POST['email']."\n".
            "Number: ".$_POST['number']."\n".
            "Message: ".$_POST['message']."\n"; 
    $headers = "From: $from\r\nReply-to: $from";
    //echo $body;
    mail("apismensky@gmail.com", "Message from church user", $body);
    ?>
                    <form id="contact" action="project(contactpagerussian).php" method="post">
    <h3>Спасибо за Ваше сообщение! Мы свяжемся с Вами в ближайшее время!</h3>
    <h4>Отправить другое сообщение</h4>
    <fieldset>
      <input id="name" name="name" placeholder="Ваше имя" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input id ="email" name="email" placeholder="Ваш e-mail" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input id="number" name="number" placeholder="Телефонный номер (опционально)" type="tel" tabindex="3">
    </fieldset>
  
    <fieldset>
      <textarea id="message"  name="message" placeholder="Пожалуйста, введите свое сообщение...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="send" type="submit" id="contact-submit" data-submit="...Отправка сообщения">Отправить</button>
    </fieldset>
  </form>
                    
 <?php
}
else { 
 ?>                   
                    <form id="contact" action="project(contactpagerussian).php" method="post">
    <h3>Пожалуйста, свяжитесь с нами!</h3>
    <h4>Здесь Вы можете задать вопрос архипристу Михаилу или отправить запрос на специальное богослужение.</h4>
    <fieldset>
      <input id="name" name="name" placeholder="Ваше имя" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input id ="email" name="email" placeholder="Ваш e-mail" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input id="number" name="number" placeholder="Телефонный номер (опционально)" type="tel" tabindex="3">
    </fieldset>
  
    <fieldset>
      <textarea id="message"  name="message" placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
        <button name="send" type="submit" id="contact-submit" data-submit="...Отправка сообщения">Отправить</button>
    </fieldset>
  </form>
<?php 
}    
?>                    
</div>
	</div>
        <script>

</script>

	<div class="col-5 col-s-5">
 
      <h2>Контакты:</h2>
     <p class="sixth">
    <i class="fa fa-envelope"></i>   <a href="mailto:stgeoslc@gmail.com?Subject=Hello%20again" target="_top">stgeoslc@gmail.com</a><br><br>
   <i class=" fa fa-phone" style="font-size:24px"></i>   (801) 259-8481<br><br>
   <i class="fa fa-map-marker" style="font-size:24px"></i>   6790 S 1300 W, West Jordan, UT<br><br>
 </p>
	
</div>

		
		<div class="demo col-2 col-s-2">
		<?php

include 'menu1.php';
    ?>
</div>
            </div>
            
          <div class="row container7">
            
   
   <div class="col-4 col-s-12">
      <div class="thumbnail">
        <img src="russianchurch_0505149 copy.jpg" alt="Michael van Opstal">
        <p><strong>Михаил ван Опстал</strong></p>
        <p><strong></strong></p>
        <p><i class="fa fa-envelope"></i>   <a href="mailto:stgeoslc@gmail.com?Subject=Hello%20again" target="_top">stgeoslc@gmail.com</a><br><br>
   <i class=" fa fa-phone" style="font-size:24px"></i>   (801) 259-8481<br><br></p>
      </div>
    </div>
      
    <div class="col-4 col-s-12">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="Igor Birioukov">
        <p><strong>Игорь Бирюков</strong></p>
        <p><i class="fa fa-envelope"></i>   <a href="mailto:stgeoslc@gmail.com?Subject=Hello%20again" target="_top">stgeoslc@gmail.com</a><br><br>
   <i class=" fa fa-phone" style="font-size:24px"></i>  (801) 259-8481<br><br></p>
      </div>
    </div>
      
    <div class="col-4 col-s-12">
      <div class="thumbnail">
        <img src="catherine.jpg" alt="Catherine Norman">
        <p><strong>Катерина Норман</strong></p>
        <p><i class="fa fa-envelope"></i>   <a href="mailto:stgeoslc@gmail.com?Subject=Hello%20again" target="_top">stgeoslc@gmail.com</a><br><br>
   <i class=" fa fa-phone" style="font-size:24px"></i>   (801) 259-8481<br><br></p>
      </div>
</div>
  
</div>
         


<div class ="row">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48459.88058977!2d-111.9567536610795!3d40.61350379730109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8752893fbf652791%3A0x89876b5757ab7152!2sSt.+George+Russian+Orthodox+Church!5e0!3m2!1sen!2sus!4v1524431789704" width="100%" height="600" frameborder="0" style="border:0; padding-top:20px" allowfullscreen></iframe>
</div>


   

  
            </main>
<?php
include 'footer2.php';
?>
</body>
</html>