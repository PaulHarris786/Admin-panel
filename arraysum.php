<?php
/**
 * Created by PhpStorm.
 * User: JustFadi
 * Date: 2/28/2017
 * Time: 1:04 AM
 */

function arraysum($array) //Return sum of array numbers other than 3 digit
{  $total=0;

    for($i=0;$i<count($array);$i++)
    {
       //first logic More efficient
//       if($array[$i]>=100 && $array[$i]<=999)
//        {
//           echo  $array[$i] ."  ---3 digit No </br>";
//        }
//          else {
//                $total += $array[$i];
//          }
// Second logic more useful for separating digits from array
        $count = 0;
        $num = $array[$i];
        while($num > 10){
            $num = (int)$num / 10;
            $count++;
        }
        if($count == 2){
            echo  $array[$i] ."  ---3 digit No </br>";
        }else{
            $total += $array[$i];
        }



    }
    return $total;
}

function evenvaluesoddindexes($array ) //return array of oddindexes with even values on it
{
    $evenvalues=array();
    //$oddindexes=array();
    for ($i=0;$i<count($array);$i++)
    {
//        if ($i%2!=0) {
//            $oddindexes =$i;
//
//                 if($array[$oddindexes[$i]]%2==0)
//                 {
//                     $evenvalues[$array[$oddindexes[$i]]]='even';
//                 }
//
//                  }
        if($i%2!=0 && $array[$i]%2 == 0){
            $evenvalues[$array[$i]]='even';
        }
    }
return $evenvalues;


}


$arr = array( 12,56,77,99,345,242,234,66,88,23,68,89,332,545,66,77,21,66,99,11);

//call for finding array sum
//$result=array();
//$result=arraysum($arr);
//echo "total sum of array is ";
//    print_r($result);

// call for finding array of oddindexes with even values on it

 $evenarray=array();
$evenarray=evenvaluesoddindexes($arr);

echo "</br>"."Odd indexed Even arrays";
print_r($evenarray);

?>