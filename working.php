<?php

#######################################################
# This script is Copyright 2003, Infinity Web Design #
# Distributed by http://www.webdevfaqs.com #
# Written by Ryan Brill - ryan@infinitypages.com #
# All Rights Reserved - Do not remove this notice #
#######################################################

## The lines below need to be edited...

###################### Set up the following variables ######################
#
$to = "chrisboyle@gmail.com"; #set address to send form to
$subject = "WhoIsCinch.com Contact Form Submission"; #set the subject line
$headers = "From: WhoIsCinch.com"; #set the from address, or any other headers
$forward = 0; # redirect? 1 : yes || 0 : no
$location = "thankyou.htm"; #set page to redirect to, if 1 is above
$your_name_input = $_POST['your_name_input'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$how = $_POST['how'];
$questions_textarea = $_POST['questions_textarea'];
#
##################### No need to edit below this line ######################

## set up the time ##

$date = date ("l, F jS, Y");
$time = date ("h:i A");

## mail the message ##

$msg = "A new inquiry from WhoIsCinch.com's contact form has been received.\n\nIt was submitted on $date at $time.\n\n";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
foreach ($_POST as $key => $value) {
$msg .= ucfirst ($key) .": ". $value . "\n\n";
}
}

mail($to, $subject, $msg, $headers);
if ($forward == 1) {
header ("Location:$location");
}
else {
echo "
<p style=\"color:green;\">Boom! Email sent!</p>
";
}
?>

<?php
//$email = $_REQUEST[email];
//
//$mailto = "$email";
//
//$mailsubj = "Auto-reponse to your MySimpleSecurity.com inquiry";
//
//$mailhead = "From: $email\r\nContent-type: text/html";
//
//reset ($_REQUEST);
//
//$mailbody = "<a href=\"http://www.mysimplesecurity.com\" target=\"_blank\" title=\"MySimpleSecurity.com | Simple. Reliable. Secure.\"><img src=\"http://www.mysimplesecurity.com/images/index/logo.png\" border=\"0\" alt=\"MySimpleSecurity.com | Simple. Reliable. Secure.\"></a><br><br>Thank you for your interest in MySimpleSecurity.  Security is critical in today's online world, and MySimpleSecurity is dedicated to protecting you and your most valuable information. Our service is personalized for your protection, your needs, and your online experience.<br><br>We're in the process of setting up a fan page on Facebook and Twitter to keep you informed on our product launch, updates, and news that will help you better secure yourself in today's online world.  We will notify you when it becomes available!<br><br>Sophisticated security made simple for you!<br><br>We look forward to introducing you to SAM - Your Personal Security Advisor.<br><br><a href=\"http://www.mysimplesecurity.com\" target=\"_blank\" title=\"SAM - Your Personal Security Advisor\"><img src=\"http://www.mysimplesecurity.com/images/index/sam.png\" border=\"0\" alt=\"SAM - Your Personal Security Advisor\"></a>";
//
//mail($mailto, $mailsubj, $mailbody, $mailhead);
?>
