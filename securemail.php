<?php
print header("Content-Type: text/json");
$okay_to_send = 1;
$json_out = "";
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
    $name = stripslashes(strip_tags($_POST['name']));
} else {$json_out .= "name_error: \"Please enter your name\", "; $okay_to_send = 0;}

if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
    $email = stripslashes(strip_tags($_POST['email']));
} else {
    $json_out .= "email_error: \"Please enter your email address\", "; $okay_to_send = 0;
}

if ((isset($_POST['comments'])) && (strlen(trim($_POST['comments'])) > 0)) {
    $comments = stripslashes(strip_tags($_POST['comments']));
} else {$json_out .= "comments_error: \"No comments entered\", "; $okay_to_send = 0;}

if ($okay_to_send) {
    $to = "belinkd.design@gmail.com";
    $subject = "{$_REQUEST['name']}";
    $email = "'{$_REQUEST['name']}' <{$_REQUEST['email']}>";
    $message = "name: ".$name."\r\n" ;
    $message .= "email: ".$email."\r\n" ;
    $message .= "comments: ".$comments."\r\n" ;
    $headers = "From: $email";
    $sent = mail($to, $subject, $message, $headers) ;
    if(!$sent) {
        $json_out .= "error: \"We encountered an error sending your mail\", sent: 0";
    } else {
        $json_out .= "sent: 1";
    }
} else {
    $json_out .= "sent: 0";
}
print "{" . $json_out . "}\n";
?>
