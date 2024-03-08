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

echo "\n\n";


// #15

echo "#15\n";

function printStringReturnNumber()
{
    echo "string\n";
    return 8148;
}
$my_num = printStringReturnNumber();
echo $my_num;

echo "\n\n";


// #16

function increaseEnthusiasm($str)
{
    return $str . '!';
}
echo increaseEnthusiasm('adadadadadadadada');

echo "\n";

function repeatThreeTimes($str)
{
    return $str . $str . $str;
}
echo repeatThreeTimes('da');

echo "\n";

echo increaseEnthusiasm(repeatThreeTimes('real'));

echo "\n";

function cut($str, $param = 10)
{
    return substr($str, 0, $param);
}
echo cut('12321', 2);

echo "\n";

function show($arr, $i = 0)
{
    if($i < count($arr))
    {
        echo "$arr[$i] ";
        show($arr, $i + 1);
    } 
}
$arr = [2, 24, 4322, 2345, 5, 54, 624, -4321];
show($arr);

echo "\n";

function sumDig($num)
{
    $sum = 0;
    while($num > 0)
    {
        $sum += $num % 10;
        $num  = floor($num / 10);
    }
    if ($sum > 9)
    {
        return sumDig($sum);
    } else {
        return $sum;
    }
}

echo sumDig(12345);

echo "\n\n";


// #17

echo "#17\n";

function fill(&$arr)
{
    $con = 'x';
    for($i = 0; $i < count($arr); $i++)
    {
        $arr[$i] = $con;
        $con .= 'x';
    }
}

$arr = [null, null, null, null];
fill($arr);
var_dump($arr);

echo "\n";

function arrayFill($val, $param)
{
    $arr = [];
    for($i = 0; $i < $param; $i++)
    {
        array_push($arr, $val);
    }
    return $arr;
}
var_dump(arrayFill('x', 10));

echo "\n";

function sumArr($arr)
{
    $sum = 0;
    for($i = 0; $i < count($arr); $i++)
    {
        for($j = 0; $j < count($arr[$i]); $j++)
        {
            $sum += $arr[$i][$j];
        }
    }
    return $sum;
}

$arr = [[1, 2, 3], [4, 5], [6]];
echo sumArr($arr);

echo "\n";

$arr = [];
$num = 1;
for($i = 0; $i < 3; $i++)
{
    array_push($arr, []);
    for($j = 0; $j < 3; $j++)
    {
        $arr[$i][$j] = $num;
        $num++;
    }
}
var_dump($arr);

echo "\n";

$arr = [2, 5, 3, 9];
$sum = 0;
for($i = 1; $i < count($arr); $i++)
{
    $sum += $arr[$i - 1] * $arr[$i];
}
$result = $sum;
echo $result;

echo "\n";

$user = [
    'name' => 'Артём',
    'surname' => 'Бояркин',
    'patronymic' => 'Денисович'
];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];

echo "\n";

$date = [
    'year' => 2024,
    'month' => 3,
    'day' => 8
];

echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];

echo "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr);

echo "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[count($arr)-1] . ' ' . $arr[count($arr)-2];

echo "\n\n";


// #18

echo "#18\n";

function isSum($a, $b)
{
    return $a + $b > 10;
}

function isEqual($a, $b)
{
    return $a == $b;
}

$test = 0;
if ($test == 0) {
    echo 'верно';
}
echo "\n";
//Сокращенно

echo $test == 0 ? 'верно' : '';

echo "\n";

function func($age)
{
    if($age < 10 || $age > 99)
    {
        echo 'Возраст больше 99 или меньше 10';
    } else {
        $sum = ($age % 10) + (floor($age / 10));
        if ($sum <= 9)
        {
            echo 'Число однозначное';
        } else {
            echo 'Число двузначное';
        }
    }
}
func(23);

echo "\n";

function threeSum($arr)
{
    if(count($arr) == 3)
    {
        echo $arr[0] + $arr[1] + $arr[2];
    }
}
threeSum([4, 5, 67]);

echo "\n\n";


// #19

echo "#19\n";

$val = 'x';
for($i = 0; $i < 20; $i++)
{
    echo $val . "\n";
    $val .= 'x';   
}

echo "\n\n";


// #20

echo "#20\n";

function avg($arr)
{
    return array_sum($arr) / count($arr);
}
$arr = [1, 4, 6, 87, 65];
echo avg($arr);

echo "\n";

echo array_sum(range(1, 100));

echo "\n";

$arr = [1, 42, 9, 16];
$arr = array_map('sqrt', $arr);
var_dump($arr);

echo "\n";

$arr1 = range('a', 'z');
$arr2 = range(1, 26);
$arr = array_combine($arr1, $arr2);
var_dump($arr);

echo "\n";

$str = '1234567890';
$sum = array_sum(str_split($str, 2));
echo $sum;

echo "\n";