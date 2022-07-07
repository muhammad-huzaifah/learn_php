<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $email = "john.doe@example.com";

    // Remove all illegal character from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($email, FILTER_SANITIZE_EMAIL) === false) {
        echo ("$email is a valid email address");
        } else {
        echo ("$email is not a valid email address");
    }
?>
</body>
</html>