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
    $x = 5985;
    var_dump(is_int($x));

    echo "<br>";

    // Check again
    $x = 59.85;
    var_dump(is_int($x));

?>
</body>
</html>


