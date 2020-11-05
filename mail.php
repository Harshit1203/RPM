<?php
if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form!"
} 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$contact = $POST['contact'];

if(empty($name)||empty($email))
{
    echo "Name and email are mandatory";
    exit;
}

$formcontent="From: $name \n Message: $message";
$reciever = "kharshit@gmail.com";
$subject = "Enquiry";
$mailheader = "From: $email \nContact info: $contact \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>