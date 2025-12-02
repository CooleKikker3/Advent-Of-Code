<?php
    error_reporting(E_ALL);

    $input = file_get_contents("input1.txt");
    $lines = explode(",", $input);

    $answer = 0;
    foreach ($lines as $range)
    {
        $defined_range = explode("-", $range);
        $min = $defined_range[0];
        $max = $defined_range[1];

        $current = $min;
        while($current <= $max)
        {
            $split = strlen($current);

            if($split % 2 != 0)
            {
                $current++;
                continue;
            }

            $split_number = str_split($current, $split / 2);

            if($split_number[0] == $split_number[1])
            {
                $answer += $current;

                echo $current . "<br>";
            }

            $current++;
        }
    }
    echo "<b>" . $answer . "</b>";


