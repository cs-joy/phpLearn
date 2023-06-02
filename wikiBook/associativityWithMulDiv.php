<?php
    # Associativity with multiplication and division

    echo "--Non Associative--\n";
    $a = 5*4/2*3; //equals 30
    echo $a . "\n";

    print("--Left Associative--\n");
    $a = (((5*4)/2)*3); //also equals 30
    echo $a . "\n";

    /*
        However, as with the addition/subtraction example above, performing this 
        by right associativity (in a strictly reverse linear fashion) does not produce the same (intended)
        result:
    */
    printf("--Right Associative--\n");
    $a = (5*(4/(2*3))); //equals 3.33333
    echo $a . "\n";
?>