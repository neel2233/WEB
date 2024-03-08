<?php
// #1

/* Imagine a lot of code here */ 
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:

$order = &$very_bad_unclear_name;
$order .= ' special for you <3';
echo "#1";
  
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


// #2

echo "\n\n#2\n";

$num = 10;
echo $num;
 
echo "\n";
 
$special_num = 81.48;
echo $special_num;
 
echo "\n";
 
echo $num + 2;
 
echo "\n";
 
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;
 
echo "\n\n";


// #11

echo "#11\n";

$num_languages = 4;
$month = 11;
$days = $month * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;

echo "\n\n";

// #12

echo "#12\n";

echo 8 ** 2;

echo "\n\n";


// #13

echo "#13\n";

$my_num = 8148;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

echo "\n\n";


// #14

echo "#14\n";

$a = 10;
$b = 3;
echo $a % $b;

echo "\n";

function isDivides($a, $b)
{
    if($a % $b == 0)
    {
        echo 'Делится ' . $a / $b;
    } else {
        echo 'Делится с остатком ' . $a % $b;
    }
}
isDivides($a, $b);

echo "\n";

$st = pow(2, 10);
echo $st;

echo "\n";

echo sqrt(245);

echo "\n";

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $x)
{
    $sum += pow($x, 2);
}
echo sqrt($sum);

echo "\n";

$sqrt = sqrt(379);

echo round($sqrt, 0) . ' ';
echo round($sqrt, 1) . ' ';
echo round($sqrt, 2);

echo "\n";

$sqrt = sqrt(587);
$arr = [
    'floor' => floor($sqrt),
    'ceil' => ceil($sqrt)    
];
var_dump($arr);

echo "\n";

$arr = [4, -2, 5, 19, -130, 0, 10];
echo min($arr) . ' ' . max($arr);

echo "\n";

echo rand(1, 100);

echo "\n";

$arr = [];
for($i = 0; $i < 10; $i++)
{
    array_push($arr, rand(1337, 8148));
}
var_dump($arr);

echo "\n";

function difference($a, $b)
{
    return abs($a - $b);
}

echo difference(214, 53) . ' ';
echo difference(1, 10) . ' ';
echo difference(-42, 56) . ' ';
echo difference(-42, -56) . ' ';
echo difference(rand(-23, 34), rand(1243, 4243));

echo "\n";

$arr = [];
for($i = 0; $i < 10; $i++)
{
    array_push($arr, rand(-8148, 8148));
}
var_dump($arr);
echo "\n";
for($i = 0; $i < 10; $i++)
{
    $arr[$i] = abs($arr[$i]);
}
var_dump($arr);

echo "\n";

$num = rand(30, 59);
$arr = [1];
echo "$num\n";
for($i = 2; $i <= $num; $i++)
{
    if($num % $i == 0)
    {
        array_push($arr, $i);
    }
}
var_dump($arr);

echo "\n";

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach($arr as $x)
{
    $sum += $x;
    $count++;
    if ($sum > 10)
    {
        echo $count;
        break;
    }
}

echo "\n";
