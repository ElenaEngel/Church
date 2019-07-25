
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery-cycle-all.js" type="text/javascript"></script>
<script src="quotes.js" type="text/javascript"></script>
<script language="Javascript" src="http://script.days.ru/icon.php?advanced=1&href=1&tmshift=-11"></script>
<script type="text/javascript">
    
var html = '';
var html1 = '';
var html2 = print_img();
$(document).ready(function(){

$.getJSON('quotes.json', function(data){

$.each(data, function(key, value){
$.each(value, function(index, stuff){
html += '<div class="quotes">';
html += '<h4 id = "title">'+stuff.Title+'</h4></div>';
html1 += '<div class = "col-12 col-s-12 information">'+stuff.desc+'</div>';
}); 
});
$('#quotes').html(html);
$('#information').html(html1);
$('#icon').html(html2);

$('#quotes').cycle({
fx: 'fade',
pause: '1',
prev: '#prev',
next: '#next',
speed: 2000,
timeout: 1000
});
$('#information').cycle({
fx: 'fade',
pause: '1',
prev: '#prev',
next: '#next',
speed: 2000,
timeout: 1000
});
console.log("Privet6");


});
});
</script>
<div class = "row">
    <div class = "col-12 col-md-12" id ="quotes" style ="height:auto" ></div>
<div class = "col-12" id="information" style = "height:auto; width:100%" >
</div>
   
<div class = "col-12" id = "icon">
     <!-- <script language="Javascript">print_img();</script>-->
    </div>
 </div>