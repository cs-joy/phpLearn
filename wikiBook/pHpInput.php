<?php
    $stdin = fopen('php://stdin', 'r'); // opens standard input
    echo 'Input anything what you would like to see : ';
    $myString = fgets($stdin);  // reads until user presses ENTER

    printf("\nYou Input is : %s\n", $myString); 

?>