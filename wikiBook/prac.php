<?php
    $string = 'Hello PHP!! <br>';
    $kitchen_stuff = 'cup';
    $bathroom_stuff = 'toothbrush';
    $funnyStuff = "cup $bathroom_stuff";

    $testStuff = "Hello world!";
    $testStuff .= " ". "let's go with PHP...";

    echo $string;

    print $string;

    printf('%s', $funnyStuff);

    printf('%s', $testStuff);

?>