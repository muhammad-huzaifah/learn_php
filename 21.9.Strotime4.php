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
$d1 = strtotime("July 04");
$d2 = ceil(($d1-time())/60/60/24);
echo "There are " . $d2 . " days unit 4th of July."
?>
</body>
</html>