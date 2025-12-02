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

        if($split % 2 == 0)
        {
            $split_number = str_split($current, $split / 2);
            if($split_number[0] == $split_number[1])
            {
                $answer += $current;

                echo $current . "<br>";
                $current++;
                continue;
            }
        }
        
        // Part 2 extension
        $split_number1 = str_split($current);
        $split_number2 = str_split($current, 2);
        $split_number3 = str_split($current, 3);


        if(AllSameNumbers($split_number1) || AllSameNumbers($split_number2) || AllSameNumbers($split_number3))
        {
            echo $current . "<br>";
            $answer += $current;

            $current++;
        }

        $current++;
    }
}
echo "<b>" . $answer . "</b>";

function AllSameNumbers(array $arr) {
    if(count($arr) < 2)
    {
        return false;
    }

    $testValue = $arr[0];
    foreach ($arr as $val) {
        if ($testValue !== $val) {
            return false;
        }
    }
    return true;
}
