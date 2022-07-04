<?php
    $cookie_name = "user";
    $cookie_value = "Alex Porter";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

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
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is set!<br>";
    } else {
         echo "Cookie '" . $cookie_name . "' is set!<br>";
         echo "Value is: " . $_COOKIE[$cookie_name];
    }
?>

<p><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>
</body>
</html>
