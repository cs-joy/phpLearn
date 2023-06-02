<?php
    # Shortcut Operators

    echo "--Shortcut Operators--\n\n";

    $x = 1;
    $x++;
    echo "X = " . $x ."\n";

    $y = 5;
    $y *= $x;
    echo "Y = " . $y . "\n";

    $z = 180;
    $z /= --$y;
    echo "Z = " . $z . "\n";
?>