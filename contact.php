<html>
<body>

<?php 
   $visitor_name = $_POST['fullName'];
   $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
	$visitor_address1 = $_POST['address1'];
	$visitor_city = $_POST['city'];
	$visitor_state = $_POST['state'];
	$visitor_zip = $_POST['zip'];
   $message = $_POST['message'];

   $email_subject = "Sink Or Swim Pools - Contact Form - ";
   $email_subject .= $visitor_name;

   $email_body = "User Name: $visitor_name. \n". 
               "User Email: $visitor_email. \n". 
               "User Phone: $visitor_phone. \n".
               "User Address $visitor_address1. \n".
               "User City $visitor_city. \n".
               "User State $visitor_state. \n".
               "User Zip   $visitor_zip. \n".
                      "User Message: $message. \n";

   $to = "brian.barker@leansolutionsllc.com";

   mail($to, $email_subject, $email_body, "brian.barker@leansolutionsllc.com");




//var_dump($_POST);

	
	
  header('Location: http://www.sinkorswimpool.com/thankyou.html');

?>

</body>
</html>