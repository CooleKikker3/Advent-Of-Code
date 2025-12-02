<?php
    error_reporting(E_ALL);

    $input = file_get_contents("input1.txt");
    $lines = explode("\n", $input);


    $current_loc = 50;
    $password = 0;

    foreach ($lines as $line)
    {
        $rotates = intval(substr($line, 1));

        for($i = 0; $i < $rotates; $i++)
        {
            $current_loc += $line[0] == "R" ? 1 : -1;

            if($current_loc == 100)
            {
                $current_loc = 0;
            }

            if($current_loc < 0)
            {
                $current_loc = 99;
            }

            if($current_loc == 0)
            {
                $password++;
            }
        }
    }

    echo $password;
echo "<br>h " . $current_loc;

