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
    $xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
    echo $xml->book[0]->title . "<br>";
    echo $xml->book[1]->title . "<br>";
?>

</body>
</html>