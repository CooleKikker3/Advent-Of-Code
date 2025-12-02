<?php
    $input = file("index.txt");

    $games = [];
    foreach ($input as $key => $line)
    {
        if(empty($line))
        {
            continue;
        }
        $game_needed = ['blue' => 0, 'red' => 0, 'green' => 0];
        $game_id = $key + 1;
        echo "<b>" . $game_id . "</b><br>";
        $line = substr($line, strpos($line, ":") + 1);
        $sets = explode(";", $line);
        foreach ($sets as $set)
        {
            $game_valid[$game_id] = 0;
            $required = explode(",", $set);
            foreach($required as $item)
            {
                $data = explode(" ", trim($item));
                echo "<pre>";
                print_r($data);
                $game_needed[$data[1]] += $data[0];
            }
        }


    }

    echo array_sum($games);