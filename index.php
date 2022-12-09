<?php
declare(strict_types=1);

echo "Hello PHP!";

function test($count = 7){
    for ($i=0;$i<$count;$i++){
        echo "<br />".$i+1;
    }
}

function FuncRes($a=0,$b=0):array{
    $sum = $a + $b;
    $sub = $a+ - $b;
    return  [$sum,$sub];
}
function RestFunction(...$nums){
    $sum =0;
    foreach ($nums as $number){
        $sum+=$number;
    }
    return $sum;
}
$name = 'arman yazdanshenas';
function PrintName(){
    global $name;
    echo $name;
    $name = 'Arman Yazdanshenas';
}

function func_test_static()
{
    static $age = 0;
    echo $age;
    $age++;
}

$sum = function ($a,$b){
    return $a+$b;
};
//var_dump($sum(4,5));

$c=10;
$sum = function ($a,$b)use($c){
    return $a+$b+$c;
};

$list = [1,2,3,4,5];
function my_func($num){
    return $num *2;
}
function map($array,$func){
    $new_list = [];
    foreach ($array as $key=>$value){
        $new_list[$key] = $func($value);
    }
    return $new_list;
}
var_dump(map($list,'my_func'));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
</head>
<body>

</body>
</html>
