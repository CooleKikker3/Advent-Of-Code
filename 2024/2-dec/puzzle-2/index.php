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

        if($current_floor < 0)
        {
            echo $i + 1;
            exit;
        }
    }

    echo $current_floor;