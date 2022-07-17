<?php
namespace Html;
class Table {
    public $title = "";
    public $numRows = 0;
    
    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}

class Row {
    public $numCells = 0;
    public function message() {
        echo "<p> The row has {$this->numCells} cells.</p>";
    }
}
?>

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
    $table = new Table();
    $table->title = "My table";
    $table->numRows = 5;

    $row = new Row();
    $row->numCells = 3;

    $table->message();
    $row->message();

?>
</body>
</html>
