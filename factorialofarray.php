<?php
/**
 * Created by PhpStorm.
 * User: JustFadi
 * Date: 3/1/2017
 * Time: 6:51 PM
 */

Function fact_of_array($array)
{


    for ($i=0; $i<count($array);$i++)
    {
       for ($x=1;$x<$array[$i];$x++)
        {
            $array[$i]=$array[$i]*$x;
        }

    }
    return $array;
}

function Reverse_number($n)
{
    $reverse=0;
//    $num=$n;

while($n!=0) {

    $reverse = $reverse * 10;
    $reverse = $reverse + $n%10;
    $n= (int)$n/10;


//    $lastnum = $num % 10;
//    $firstnum = intval($num / 10);
}
echo $reverse;

//echo  chr($n) ;
//echo "Num is ".$n." Reverse of number is ".$lastnum.$firstnum;
//echo  chr($firstnum.$lastnum) ;
}



$arr = array( 3,5);
$factorial_array=fact_of_array($arr);
print_r($factorial_array);

//reverse number
//$num=431;
//Reverse_number($num);








?>