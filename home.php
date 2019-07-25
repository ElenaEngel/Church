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


</head>

<body>

<div class="row">

 
<!--<div id = "dvImage" style="width:100%; height:650px; background-attachment: fixed; background-position: center;    background-size: cover;  background-repeat: no-repeat 50 50;">-->
<header class = "col-12 col-s-12  header1" id = "dvImage">
  <?php
  include 'Menu.php';
  ?>

   <script type="text/javascript">
    var images = ["service.jpg", "SLC_consecration0.JPG", "o.jpg", "wedding.jpg", "imag12.jpg", "communion.jpg", "church2.jpg"];
    $(function () {
        var i = 0;
        $("#dvImage").css("background-image", "url(" + images[i] + ")");
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
                        $("#dvImage").not(document.getElementsByClassName(".container3")).fadeOut("slow", function () {
                $(this).css("background-image", "url(" + images[i] + ")");
                $(this).fadeIn("slow");
            });
        }, 5000);
    });
</script>


 <div class="row">

 <div class="col-12 col-s-12 container3" style="background:linear-gradient( to top, rgb(100,25,25) 25%, rgb(100,25,25, 0.5), rgb(100,25,25, 0.0))">
 
 
  <h1 style="color:white; text-align:center; padding-top:50px; text-shadow: 3px 3px 8px black, 0 0 15px blue, 0 0 5px red;">St. George Russian Orthodox Church</h1>
  <h2 class="h3" style="text-shadow: 1px 1px 3px black, 0 0 15px blue, 0 0 5px red">A parish of the <a class="a_black1" href="http://www.wadiocese.com/" target="_blank">Western American Diocese of the Russian Orthodox Church Outside Russia</a></h2>

 
    </div>

</div>


  <!--<img class="imggif" src="icon (1).gif" alt="St-George-Russian-Orthodox-Church-Salt-Lake-City-UT-98028488055" style="width:200;height:200px; float:left;">-->


<!--<div class="row" style="height:200px; background:linear-gradient(to top, rgb(54, 25, 25), rgb(54, 25, 25, 0.5));">-->

  

</header>

</div>

<!--box model-->

<div class="row">
<main class="cl-12 col-s-12 borderimage">
   <div class="row">
  <div>
   <h2>Welcome to our Website!</h2>
   <p class="first">
  Our parish was founded in 2005 to serve Russian Orthodox Christians in the Salt Lake Valley. Here you will find our schedule, our monthly newsletter, and our contact information.

Our services are in a mix of Church Slavonic and English. All are welcome to visit. Our main services are Saturday Vigils at 6:00 pm and Sunday Liturgy at 9:30 am. Weekday services are listed on the schedule.<br>
</p>
 
</div>
</div>

<!--box model-->
<div class="row">
  <div class="col-4 col-s-12">
  <div class="column2 left2">  <a href="coffeeshop-0010" border=0><img src="coffeeshop-0010 (2).jpg" alt="Saint George" width=100% 
        height="auto" style="float:left"></a>
        <p class="second">
 <span style="text-align:center; font-family:TriodPostnaja;color:red">Who we are...</span><br>

    Our parish is a part of the Russian Orthodox Church, whose current first hierarch is Patriarch Kirill of Moscow.
We are part of the Russian Orthodox Church Outside of Russia, whose first hierarch is Metropolitan Hilarion of New York and Eastern America.

The parish is located in the Western American Diocese, led by archbishop Kyrill of San Francisco and Western America.

  <div class="container">
    <a href="about.php"><button class="button1"><span>Read More</span></button></a>
</div>
</p>
</div>
 </div>

 <div class="col-4 col-s-12">
  <div class="column2 middle2"><a href="coffeeshop-0010" border=0><img src="school (3).jpg" alt="School" style="float:left" height="auto" width="100%"></a>
        <p class="second">
    <span style="text-align:center; font-family:TriodPostnaja;color:red;">Our school...</span><br>

    School is an integral part of parish life at Saint George Russian Ortodox Church. It is not necessary to push the children to serve the Church. Their self-motivation, by God’s mercy, is displayed in abundance and is found throughout parish life.
    <div class="container">
    <a href="school.php"><button class="button1"><span>Read More</span></button></a>
</div>
  </p>
<!--box model-->
   </div>
</div>
<div class="col-4 col-s-12">
  <div class ="column2 right2"><a href="coffeeshop-0010" border=0><img src="18623226_10156089761088056_4316646610292205636_o (2).jpg" alt="Saint George" style="float:left" height="auto" width="100%"></a>
   
 <p class="second"> 
<span style="text-align:center; font-family:TriodPostnaja;color:red">Our services...</span><br>

    Besides our main services you can also request special Services of Need:

Marriage ceremony,
Prayer of Supplication/Molieben (for healing, thanksgiving, blessing a project, etc),
Funeral,
Memorial Service/Panihida
    <div class="container">
    <a href="specialservices.php"><button class="button1"><span>Read More</span></button></a>
</div>
  </p>
</div>
</div>
</div>

<div class="div10" style="overflow:auto">
 
  

</div>

<div class="row">
 
 <div class="col-8 col-s-12">
       <div class="column3 left3">


        <iframe src="https://www.google.com/calendar/embed?src=stgeoslc%40gmail.com&ctz=America/Denver" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no">
          
        </iframe>

</div>
</div>

 <div class="col-4 col-s-12">
    <div class="column3 right3">
<SCRIPT Language="JavaScript" Src="https://www.ponomar.net/cgi-bin/julian.cgi?mode=simple"></SCRIPT> 
  
    </div>
</div>

</div>
</main>

<!--box model-->
<?php
include 'footer.php';
?>
</body>

</html> 