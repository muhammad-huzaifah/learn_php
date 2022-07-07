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
    $url = "https://www.w3schools.com";

    // Validate URL
    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo ("$url is a valid URL with a query string");
    } else {
        echo ("$url is not a valid URL with a query string");
    }
?>
</body>
</html>