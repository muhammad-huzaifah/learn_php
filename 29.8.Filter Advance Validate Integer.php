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
    $int = 122;

    // Min value
    $min = 1;

    // Max value
    $max = 200;

    if (filter_var($int, FILTER_VALIDATE_INT, array("option" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo ("Variable value is not within the legal range");
    } else {
        echo ("Variable value is within the legal range");
    }
?>
</body>
</html>