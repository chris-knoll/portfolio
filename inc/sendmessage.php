<?php

$TO = 'cknoll3@gmail.com';

//message the subject of the email
$SUBJECT = 'Message from Portfolio Site';
$MSG_SEND_ERROR = 'Sorry, we can\'t send this message.';

// Sender Info
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$error = "";
$dummy = array();

// Email regex
$pattern = "^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$^";

// test for name
if (empty($name)) {
    $error .= 'error-name,'; // No name
}

// test for email
if (empty($email) || !preg_match_all($pattern, $email, $dummy)) {
    $error .= 'error-email,'; // No Email
}

// test for message
if (empty($message)) {
    $error .= 'error-message'; // No Message
}


//define the headers we want passed. Note that they are separated with \r\n
$headers = "From: " . $name . " <" . $email . ">\r\nReply-To: " . $email . "";

if (!$error) {

   //Insert into database
   require_once('../../../../db.php');
   $sql = "INSERT INTO cknoll_grcc.messages(name, email, message) VALUES ('"
         . mysqli_real_escape_string($connection, $name) . "','"
         . mysqli_real_escape_string($connection, $email) . "','"
         . mysqli_real_escape_string($connection, $message) . "')";
   mysqli_query($connection, $sql);



    //send the email
    $send = mail($TO, $SUBJECT, $message, $headers);

    if ($send) {
        // If the message is sent successfully return success
        echo "success";
    } else {
        // If the message is not sent return error
        echo $MSG_SEND_ERROR;
    }
} else {
    echo $error; // If the message is not sent return error
}
?>
