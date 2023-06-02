<?php
    function myFunc() {
        for ($i = 0; func_num_args(); $i++) {
            printf("Argument %d: %s\n", $i, func_get_args($i));
        }
    }

    /*
       Argument 0: a
       Argument 1: 2
       Argument 2: 3.5
    */

    myFunc('a', 2, 3.5);


?>