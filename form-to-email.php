 <?php
$name = $_POST[\'name'];
$visitor_email=$_POST['email'];
$date=$_POST['91date'];
$number=$_POST['number'];
$message=$_POST['message'];
?>

<?php
$email_from='info@reactivephysio.com.np';
$email_subject="New Form Submission";
$email_body="You have received a new message from the user $name.\n".
"Here is the message:\n $message".
?>

<?php
$to = "info@reactivephysio.com.np";
$headers= "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
?>
