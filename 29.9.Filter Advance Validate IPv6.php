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
    // Variable to check
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    // Validate ip as IPv6
    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo ("$ip is a valid IPv6 address");
    } else {
        echo ("$ip is not a valid IPv6 address");
    }
?>
</body>
</html>