
<?php
/**
 * Created by PhpStorm.
 * User: JustFadi
 * Date: 2/27/2017
 * Time: 8:45 PM
 */
 function isPrime($n)
{
    for($i=1;$i<=$n;$i++) {  //numbers to be checked as prime

        $counter = 0;
        for($j=1;$j<=$i;$j++){ //all divisible factors

            if($i % $j==0){

                $counter++;
            }
        }

        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2){

            print $i." is Prime <br/>";
        }
    }
}
function primeno($n)
{
    {
        for ($x = 2; $x < $n; $x++) {
            if ($n % $x == 0) {
                return 0;
            }
        }
        return 1;
    }
    $a = primeno(3);
    if ($a == 0)
        echo 'This is not a Prime Number.....' . "\n";
    else
        echo 'This is a Prime Number..' . "\n";
}

function array_prime_no($array)
{
    $count = count($array);
    $prime_array = array();
    $not_prime_array = array();
    $primecount=0;

    for ($i = 0; $i < $count; $i++) {
$primecount=0;
        for ($x = 2; $x < $array[$i]; $x++) {
// substring logic for checking of last no
//            $convert_number_to_string = (string)$array[$i];
//            $count_length = strlen($convert_number_to_string);
//            echo $count_length . " ";

            $lastdigit=$array[$i]%10 ; // use of modulus to separate number from large value

//            if ($count_length - 1 >= 5)
            if($lastdigit >= 5)  // last number should be greater than equal to 5
            {
//Prime number finding by dual factor method in array
                if ($array[$i] % $x == 0) {
                    $prime_array[$array[$i]] = 'not prime';
                    $primecount = 1;
                    break;
                    //return 0;
                } else {
                    $prime_array[$array[$i]] = 'prime';//return 1;}
                }
                //return 1;
                  // if primecount=0 every time
                if ($primecount == 0) {
                    $prime_array[$array[$i]] = 'prime';
                }
            }
        }


    }
    echo '<pre>';
    print_r($prime_array);
    echo '</pre>';


}


$prime = array( 12,56,77,99,345,242,234,66,88,23,68,89,332,545,66,77,21,66,99,11);

    $result = array_prime_no($prime);
//if($result==0) {
//    echo 'This is not a Prime Number.....' . "\n";
//}
//else{
//    echo 'This is a Prime Number..' . "\n";
//}



?>