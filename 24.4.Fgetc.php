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
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while (!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);
?>

</body>
</html>