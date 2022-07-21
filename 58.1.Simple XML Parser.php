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
    $myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
                    <note>
                        <to>Tove</to>
                        <from>Jani</from>
                        <heading>Reminder</heading>
                        <body>Don't forget me this weekend!</body>
                    </note>";

    $xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");
    print_r($xml);
?>

</body>
</html>
