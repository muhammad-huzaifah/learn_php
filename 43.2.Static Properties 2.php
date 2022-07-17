<?php
class pi {
    public static $value = 3.14159;
    public function staticValue() {
        return self::$value;
    }
}

// Get static property
$pi = new pi();
echo $pi->staticValue();