<?php
/**
 * Created by PhpStorm.
 * User: JustFadi
 * Date: 2/28/2017
 * Time: 12:29 AM
 */

function sort_by_index($array) // index sorting of array in Ascending order
{
    for ($i=0 ;$i<count($array); $i++) {
        //echo count($array);
        for ($j = $i+1; $j <=count($array)-1; $j++) {

            if ($array[$i] > $array[$j]) {

                $temp =0;
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;


            }
        }

    }
   return $array;

    //echo"<pre>".print_r($array)."<pre>";

}

$arr = array( 12,56,77,99,345,242,234,66,88,23,68,89,332,545,66,77,21,66,99,11);
$result=array();
$result=sort_by_index($arr);

echo '</pre>'.'</br>';
print_r($result).'<br/>';
echo '</pre>';













?>
