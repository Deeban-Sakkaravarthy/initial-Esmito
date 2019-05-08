<?php 
$errors = '';
$myemail = 'volleyball.kingchakku@gmail.com';
if(empty($_POST['first_name'])  ||
   empty($_POST['last-name']) ||
   empty($_POST['phone'])||
   empty($_POST['email']))
{
    $errors .= "\n Error: all fields are required";
}
$first_name = $_POST['first_name'];
$last_name = $_POST['last__name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];
if (!preg_match(
"/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}
if( empty($errors))
{
    $to = "$myemail";
    $email_subject = "Contact form submission: $first_name";
    $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $fisrt_name \n ".
        "Email: $email\n Message \n $comments";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
//    header('Location: contact-form-thank-you.html');
}
?>