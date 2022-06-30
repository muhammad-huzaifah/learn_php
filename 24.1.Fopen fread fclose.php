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
    $myFile = fopen("webdictionary.txt", "r") or die("unable to open file!");
    echo fread($myFile,filesize("webdictionary.txt"));
    fclose($myFile);
?>

</body>
</html>