<?php
namespace Html;
class Table {
    public $title = "";
    public $numRows = 0;

    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.";
    }
}

class Row {
    public $numCells = 0;
    public function message() {
        echo "<p>The row has {$this->numCells} cells.";
    }
}
?>

<?php
use Html as H;
$table = new H\Table();
$table->title = "My table";
$table->numRows = 5;

$table->message();
?>
