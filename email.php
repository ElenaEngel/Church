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
}
       
?>
<html>
    <head>
        <title>Message sent</title>
    </head>
    <body>
        Thanks for your message.
    </body>
</html>