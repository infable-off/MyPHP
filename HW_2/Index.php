<?php
// Task_1
$a =12;
$b = 213;
if ($a>0 && $b>0){
    echo $a-$b .PHP_EOL;

}
$a =-12;
$b = -213;
if ($a<0 && $b<0){
    echo $a*$b .PHP_EOL;
}
$a =-12;
$b = 213;

if (($a<0 and $b>0) or ($a>0 and $b<0)){
    echo $a + $b ."<br>";
}
//Task_2

$a = 3;
switch ($a) {
    case 0: echo $a++ . "<br>";
    case 1: echo $a++ . "<br>";
    case 2: echo $a++ . "<br>";
    case 3: echo $a++ . "<br>";
    case 4: echo $a++ . "<br>";
    case 5: echo $a++ . "<br>";
    case 6: echo $a++ . "<br>";
    case 7: echo $a++ . "<br>";
    case 8: echo $a++ . "<br>";
    case 9: echo $a++ . "<br>";
    case 10: echo $a++ . "<br>";
    case 11: echo $a++ . "<br>";
    case 12: echo $a++ . "<br>";
    case 13: echo $a++ . "<br>";
    case 14: echo $a++ . "<br>";
    case 15: echo $a++ . "<br>";
}

//Task_3
function add($a,$b){
    return $a + $b;
}
function sub($a,$b){
    return $a - $b;
}
function mul($a,$b){
    return $a * $b;
}
function div($a,$b){
    return $a / $b;
}

//Task_4
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case '+': return add($arg1, arg2);
        case '-': return sub($arg1, arg2);
        case '*': return mul($arg1, arg2);
        case '/': return div($arg1, arg2);
        default: return "Неверная операция";
    }

}
//Task_5
$year = date('Y');

//Task_6
function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    } elseif ($pow < 0) {
        return power(1 / $val, -$pow);
    }
    return $val * power($val, $pow - 1);
}

echo power(2, 0) . "<br>";
echo power(2, -2) . "<br>";
echo power(2, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>d</title>
    <meta charset="UTF-8">
</head>
<body>

<footer><p><?=$year?></p></footer>

</body>
</html>

