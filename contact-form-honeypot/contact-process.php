<?php

$youremail = "email@domain.com";
@extract($_POST);
$name = stripslashes($name);
$phone = stripslashes($phone);
$email = stripslashes($email);
$message = stripslashes($message);
$sugarcup = $_POST['sugarcup'];

//

$date       = (date ("F j, Y"));
$time = (date ("H:i:s"));
$IPnumber = getenv("REMOTE_ADDR");

$_POST['phone'] = preg_replace("/[\n\r]+/", "", $_POST['phone']);
$_POST['name'] = preg_replace("/[\n\r]+/", "", $_POST['name']);
$_POST['email'] = preg_replace("/[\n\r]+/", "", $_POST['email']);
$_POST['message'] = preg_replace("/[\n\r]+/", "", $_POST['message']);

//
$msg = "

CUSTOMER NAME Enquiry Form

------------------------

Name: $name

Phone: $phone

Email: $email

Message: $message

------------------------

Date of Enquiry: ".$date." at ".$time."
IP Number: ".$IPnumber."

";

$validstring = '^([._a-z0-9-]+[._a-z0-9-]*)@(([a-z0-9-]+\.)*([a-z0-9-]+)(\.[a-z]{2,3}))$';
if (!eregi($validstring,$email)&&$email) {
$emailcorrect = 0;
}
else  {
$emailcorrect = 1;
}

if($name&&$emailcorrect) {

$subject="Submitted contact form, $name";

if($sugarcup)
     echo "<p>Your email was not sent to our office. Please try again.</p>";
   else{

if(mail($youremail, $subject, $msg, "From: CUSTOMER NAME GOES HERE <$email>")) {

echo "<div class=\"success\"><p>Your email was sent to our office.
Thank you $name, for your enquiry.<br />You will be contacted shortly
regarding your email.</p></div>";

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$autoreply="
Thank you for your request $name.

Someone will get back to you shortly.

CUSTOMER NAME GOES HERE.

This is an automated reply.

";
$subject="Thank you for your enquiry, $name!";

mail($email, $subject, $autoreply, "From: CUSTOMER NAME GOES HERE - Email Confirmation<$email>");

}
}
}
//
if(!$name||!$phone||!$email||!$subject) {
echo  "<div class=\"error\"><p>Sorry, $name your e-mail was not sent
as you have forgotten to fill in a detail. Please <a
href=\"javascript:history.go(-1)\">go back</a> and complete all
required fields.</p></div>";
}
if (!$emailcorrect) {
echo "<div class=\"error\"><p>Sorry, $name your e-mail address is not
valid. Please <a href=\"javascript:history.go(-1)\">go back</a> and
try again.</p></div>";
}

?>
