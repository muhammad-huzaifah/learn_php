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
        echo "<p>The row has {$this->numCells} cells.";
    }
}
?>

<?php
use Html\Table as T;
$table = new T();
$table->title = "My table";
$table->numRows = 5;

$table->message();
?>
