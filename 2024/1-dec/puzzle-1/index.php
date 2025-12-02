<?php
    $input = file_get_contents("input.txt");

    $current_floor = 0;
    for($i=0; $i<strlen($input); $i++) {
        if($input[$i] == ")")
        {
            $current_floor -= 1;
        }
        else
        {
            $current_floor += 1;
        }
    }

    echo $current_floor;