<?php
    # The expanded version of the above code (without the shortcut operators) looks like this:

    $x = 1;
    $x = $x + 1;
    echo "X = " . $x . "\n";

    $y = 5;
    $y = $y * $x;
    echo "Y = " . $y . "\n";

    $z = 180;
    $y = $y - 1;
    $z = $z / $y;
    echo "Z = " . $z . "\n";
?>