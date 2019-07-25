
<!DOCTYPE html>
<html>
    <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="saintgeorge.css">
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/triod-postnaja" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=3.0.1"></script>
  <script language="Javascript" src="http://script.days.ru/icon.php?advanced=1&href=1&tmshift=-11"></script> 
  <script type="text/javascript">//<![CDATA[
var xmlHttp;function loadCalendar2(mm,dd,yy,dt,hh,ll,tt,ss){xmlHttp=null;if(window.XMLHttpRequest){xmlHttp=new XMLHttpRequest();}else if(window.ActiveXObject){xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");}if(xmlHttp!=null){var par="http://www.stgeorgeslc.org/ppp.php";par=par+"?month="+mm+"&today="+dd+"&year="+yy+"&dt="+dt+"&header="+hh+"&lives="+ll+"&trp="+tt+"&scripture="+ss;par=par+"&sid="+Math.random();xmlHttp.onreadystatechange=stateChanged2;xmlHttp.open("GET",par,true);xmlHttp.send(null);}else{alert("Your browser does not support XMLHTTP.");}}function stateChanged2(){if(xmlHttp.readyState==4){if(xmlHttp.status==200){document.getElementById('T1').innerHTML=xmlHttp.responseText}/*else{alert("Problem retrieving data: "+xmlHttp.statusText);}*/}}
//]]></script>
  

<script type="text/javascript" src="js/infinite-rotator.js"></script>
  <script language="Javascript" src="http://script.days.ru/icon.php?advanced=1&href=1&tmshift=-11"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Saint George Orthodox Russian Church</title>

<style>
</style>
</head>
<body>
    <div class = "row">
<header class="col-12 col-s-12 header3">
    <?php

include 'Menu.php';
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
                     <form id="contact" action="project(contact page).php" method="post">
    <h3>Thank you for your message! We will get back to you soon!</h3>
    <h4>Send another message</h4>
    <fieldset>
      <input id="name" name="name" placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input id ="email" name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input id="number" name="number" placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
    </fieldset>
  
    <fieldset>
      <textarea id="message"  name="message" placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="send" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
                    
 <?php
}
else { 
 ?>                   
  <form id="contact" action="project(contact page).php" method="post">
    <h3>We will be glad to hear from you!</h3>
    <h4>Here you can ask a question archpriest Michael van Opstall or send your request for a special service.</h4>
    <fieldset>
      <input id="name" name="name" placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input id ="email" name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input id="number" name="number" placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
    </fieldset>
  
    <fieldset>
      <textarea id="message"  name="message" placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="send" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
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
 
      <h2>Contacts:</h2>
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
        <p><strong>Michael van Opstal </strong></p>
        <p><strong></strong></p>
        <p><i class="fa fa-envelope"></i>   <a href="mailto:stgeoslc@gmail.com?Subject=Hello%20again" target="_top">stgeoslc@gmail.com</a><br><br>
   <i class=" fa fa-phone" style="font-size:24px"></i>   (801) 259-8481<br><br></p>
      </div>
    </div>
      
    <div class="col-4 col-s-12">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="Igor Birioukov">
        <p><strong>Igor Birioukov</strong></p>
        <p><i class="fa fa-envelope"></i>   <a href="mailto:stgeoslc@gmail.com?Subject=Hello%20again" target="_top">stgeoslc@gmail.com</a><br><br>
   <i class=" fa fa-phone" style="font-size:24px"></i>  (801) 259-8481<br><br></p>
      </div>
    </div>
      
    <div class="col-4 col-s-12">
      <div class="thumbnail">
        <img src="catherine.jpg" alt="Catherine Norman">
        <p><strong>Catherine Norman</strong></p>
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
include 'footer.php';
?>
    
</body>
</html>