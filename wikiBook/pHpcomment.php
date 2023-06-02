<?php

    /*
        The Comments:::
        ---------------
        Comments are pieces of code that the PHP parser skips. When the parser spots a comment, it simply keeps going until the end of the comment without doing anything. PHP
        offers both one line and multi-line comments.
    */

    //*
    print "block\n";
    print "one\n";

    // */
    print "block\n";
    print "two\n\n";

    if (0) {
        $subject = "Hi Joe";
        $matching = preg_match($subject, '/^Hi.*/');
    }

?>