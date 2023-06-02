<?php
    /* The newline character (\n, \r\n or \r, basing on the OS) to signify the end of 
       the current line and the beginning of a new one
    */
    $content = "PHP is cool,\nawesome,\nand great.\r\n";

    echo $content;
        # Notice: The newline is \n for Linux/Unix-based systems, \r\n for Windows and \r for Mac's


    $more = "PHP is cool, &lt;br /&gt;awesome&lt;br /&gt;and great.";
    echo $more;

    printf("\n--nl2br()--\n");
    # //The function nl2br() is available to automatically convert newlines in a string to <br /> tags.
    $string = "This\ntext\nbreaks\nlines.";
    $string = nl2br($string);
    print $string;

    /* Other special characters:::::
       # ASCIINUL \0 - used for padding binary files
       # tab \t - used for display a standard tab
       # return \r - signifying a carriage return
    */
?>