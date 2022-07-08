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
        function divide ($dividend, $divisor) {
            if ($divisor == 0) {
                throw new Exception("Division by zero", 1);
            }
            return $dividend / $divisor;
        }

        try {
            echo divide(5, 0);
        } catch (Exception $ex) {
            $code       = $ex->getCode();
            $message    = $ex->getMessage();
            $file       = $ex->getFile();
            $line       = $ex->getLine();
            echo "Exception throw in $file on line $line: [Code $code] $message";
        }
    ?>

</body>
</html>