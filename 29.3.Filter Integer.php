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
    $int = 100;
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    } else {
        echo ("Integer is not valid");
    }
?>
</body>
</html>