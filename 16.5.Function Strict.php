<?php
declare(strict_types=1); // Strict requirement

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");
// Since strict is enabled and "5 days" is not an integer an error will be thrown