<?php
    # Examples where associativity is relevant in PHP (but not mathematically)
    
    printf("--Non Associative--\n");
    $a = 5 + 3 - 2 + 8; //equals 14
    echo $a . "\n";

    print("---Left Associative---\n");
    # ...is equivalent to this (left associative) statement:
    $leftAssociative = (((5 + 3) - 2) + 8); //equals 14
    echo $leftAssociative . "\n";

    print("---Right Associative---\n");
    # ...is equivalent to this (right associative) statement:
    $rightAssociative = ( 5 + (3 + (-2 + 8 ))); //would also equals 14
    echo $rightAssociative . "\n";

    // if PHP were to perform the following expression in a strict right associative manner, the following (mistaken) outcome would occur:
    print("-------------------------------\n\n");
    $a = (5 + (3 - (2 + 8))); //would equals -2

    echo $a . "\n";

    /*
        Note :: Thus, the associativity is relevant and should be memorized (though it is generally good practice to
         make one's groupings explicit anyhow—both to avoid mistakes and to improve readability for others looking at the code).
    */
?>