<!DOCTYPE html>
<html>
<body>

<?php
  $name = $_POST['fname'];
  $email = $_POST['email'];
  $option1 = $_POST['smoke'];
  $option2 = $_POST['panic'];
  $option3 = $_POST['die'];
  $other = $_POST['other'];
?>
  <?php
	$email_from = 'boybluenj@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "$name's response: \n".
                           "$name \n
                            $email \n
                            $option1 \n 
                            $option2 \n
                            $option3 \n
                            $other \n".
?>
  
<?php

  $to = "boybluenj@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>


</body>
</html>
