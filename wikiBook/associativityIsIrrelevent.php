<?php
    # Examples where associativity is irrelevant

    printf("--Non Associative--\n");
    $a = 5*2*3*4; //equals 120
    echo $a . "\n";

    print("---Left Associativity---\n");
    #with it's left associativity
    $lefttAssociativity = (((5*2)*3)*4); //equals 120
    echo $lefttAssociativity . "\n";

    print("---Right Associativity---\n");
    #with itt's right associativity
    $rightAssociativity = (5*(2*(3*4))); //would also equals 120
    echo $rightAssociativity . "\n";
?>