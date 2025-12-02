<?php
    error_reporting(E_ALL);

    $input = file_get_contents("input1.txt");
    $lines = explode("\n", $input);


    $current_loc = 50;
    $password = 0;

    foreach ($lines as $line)
    {
        $current_loc += $line[0] == "R" ? intval(substr($line, 1)) : -intval(substr($line, 1));

        $current_loc = $current_loc % 100;
        if($current_loc < 0)
        {
            $current_loc = 100 + $current_loc;
        }

        if($current_loc == 0)
        {
            $password++;
        }
    }

    echo $password;

