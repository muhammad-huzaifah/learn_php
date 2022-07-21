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
    libxml_use_internal_errors(true);
    $mySMLData = "<document>
<user>John Doe</wronguser>
<email>john@example.com</wrongemail>
</document>";

    $xml = simplexml_load_string($mySMLData);
    if ($xml === false) {
        echo "Failed loading XML: ";
        foreach (libxml_get_errors() as $error) {
            echo "<br>", $error->message;
        }
    } else {
        print_r($xml);
    }
?>

</body>
</html>