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
    $d = mktime(11,14,54, 8, 12, 2022);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
</body>
</html>