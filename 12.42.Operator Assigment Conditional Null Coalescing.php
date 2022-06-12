<?php

// Variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
echo ("<br>");

// Variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";