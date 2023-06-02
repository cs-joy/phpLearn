<?php
    $myName="Fred";
    while ($myName!="Rumpelstiltskin")
    {
        if ($myName == "Fred")
        {
            $myName="Leslie";
            echo $myName;
        }
        else
        {
            $myName="Rumpelstiltskin \n";
            printf('%s', $myName);
        }
    }
echo "How did you know?\n";
?>