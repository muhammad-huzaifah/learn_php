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
    $str = "The rain in SPAIN falls mainly on the plains";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $str);
?>

</body>
</html>