<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['number'];

$email_sf= $_POST['sf-email'];

$to = "minnhtut.100@gmail.com";
$subject = "Mail From CARisma Cars Website from Contact Form";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Mobile Number = " . $number . "\r\n Message =" . $message;
$headers = "From: noreply@carismacars.ae" . "\r\n" .
"CC: kyawminnhtut.100@gmail.com";

$subject_sf = "Mail From CARisma Cars Website from Newsletter";
$txt_sf ="NewsLetter subscribe Email Address = " . $email_sf;

if($email!=NULL) {
    mail($to,$subject,$txt,$headers);
    // header("Location: index.html#contact");
  } elseif ($email_sf!=NULL) {
    mail($to,$subject_sf,$txt_sf,$headers);
    header("Location: index.html");
  }

//redirect

// header("index.html#contact");
?>