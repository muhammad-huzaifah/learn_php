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
    // Initialize the XML parser
    $parser = xml_parser_create();

    // Function to use at the start of an element
    function start($parser, $element_name, $element_attrs) {
        switch ($element_name) {
            case "NOTE":
            echo "--Note--<br>";
        break;
            case "TO" :
            echo "To: ";
        break;
            case "FROM";
            echo "From: ";
        break;
            case "HEADING";
            echo "Heading: ";
        break;
            case "BODY":
            echo "Message: ";
        }
    }

    // Function to use at the end of an element
    function stop($parser, $element_name) {
        echo "<br>";
    }

    // Function to use when finding character data
    function char($parser, $data) {
        echo $data;
    }

    // Specify element handler
    xml_set_element_handler($parser, "start", "stop");

    // Specify data handler
    xml_set_character_data_handler($parser, "char");

    // Open XML file
    $ftp = fopen("note.xml", "r");

    // Read data
    while ($data = fread($ftp, 4096)) {
        xml_parse($parser, $data, feof($ftp)) or
        die(sprintf("XML Error: %s at line %d", xml_error_string(xml_get_error_code($parser)),
        xml_get_current_line_number($parser)));
    }

    // Free the XML parser
    xml_parser_free($parser);
?>

</body>
</html>