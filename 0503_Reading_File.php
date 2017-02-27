<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <title>0503_Reading_File</title>

    <link rel="stylesheet" type="text/css" href="css/king_2.css"/>

</head>

<body>
<h3 class="heading">Reading From a File</h3>

<?php

class Filehandling
{
    public $DOCUMENT_ROOT, $filename, $lines_in_file, $fp, $line, $city;

    public function setfilename($filename)
    {
        $this->filename = $filename;
    }

    public function getfilename()
    {
        return $this->filename;

    }


    public function fileread($filename)
    {
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
        $filename = $DOCUMENT_ROOT .$this->getfilename();
        $lines_in_file = count(file($filename));

        $fp = fopen($filename, 'r');   //opens the file for reading

        for ($ii = 1; $ii <= $lines_in_file; $ii++) {
            $line = fgets($fp);  //Reads one line from the file
            $city = trim($line);

            //print 'City: '.$city.'<br />';
            echo $city . '<br/>';
        }
        print('</br>' . 'File Handling successful !!!!');
//mysqli_real_escape_string(); 
        fclose($fp);
    }

    public function odd_even_array_foramt($array)
    {
        $list=$array;
        $result_array=count($array);
        //echo "result array is ".$result_array."</br></br></br>";

        $even_array_count=0;
        $odd_array_count=0;
 $even=array();
 $odd=array();
 $result=array();
        for($x=0;$x<$result_array;$x++) {

            if ($list[$x]%2 == 0) {
                print  $list[$x]."  is even </br>"   ;
                //$even=array();
               // $even=$list[$x];
                $result[$list[$x]]='even';
                $even_array_count++;
            }
            else {
                print  $list[$x]."  is odd </br> "   ;
                //$odd=array();
                //$odd=$list[$x];
                $result[$list[$x]]='odd';


                $odd_array_count++;
            }
            //echo "total even count".$even_array_count."</br>";
        }

       echo '<pre>';  print_r($result); echo '</pre>';
 
        echo "</br> total even count   ".$even_array_count."</br>";
        //$odd_array_count=count($odd);
        echo "total odd count   ".$odd_array_count."</br>";
        $totalcount=$even_array_count+$odd_array_count;
        echo "total array count   ".$totalcount."</br></br></br></br> ";
       // print_r($even) ;

//         for($x=0;$x<$totalcount;$x++)
//         {
//             //$result=array();
//             if($x<=$even_array_count) {
//                 $result[$x] = $even[$x];
//                 echo "This ".$even[$x]."is even </br>";


//             }
//               else {
//                   //$odd_array_first_index = $odd[0];
//                   $result[$even[$x]] =$odd;
//             }
//         }

//         Echo "Inserted successfully  </br>";
// print_r($result);
  }// <--------odd even array function end here---->

public function array_fact($array)
{   var $array;
$result=0;

      $this->array=count($array);
      echo $this->array."</br>";
      for ($x=0;$x<$this->array;$x++)
      {   
        $result=






      }


}








}//class ends

$fileobj = new Filehandling();
//$filename = '\Fahad.txt';// hold file path
//$fileobj->fileread($fileobj->setfilename($filename)); //file read function calling
//$fileobj->setfilename($filename);

$array=array(1,2,3,4,5,6,7,8,9,10,22,22,33,55,11,44);
echo "Total Array size is </br>".count($array)."</br>";
$fileobj->odd_even_array_foramt($array);













?>


<!-- <h3  class="heading">Reading From a File</h3>

	<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$filename = $DOCUMENT_ROOT . '\Fahad.txt';

$lines_in_file = count(file($filename));

$fp = fopen($filename, 'r');   //opens the file for reading

for ($ii = 1; $ii <= $lines_in_file; $ii++) {
    $line = fgets($fp);  //Reads one line from the file
    $city = trim($line);

    //print 'City: '.$city.'<br />';
    echo $city . '<br/>';
}
//mysqli_real_escape_string(); 
fclose($fp);

?>
 -->




 <!-- $arr = array( 12,56,77,99,345,242,234,66,88,23,68,89,332,545,66,77,21,66,99,11);


    1 = prime of each number that last digit greater than or equal to 5.

    2 = index sort in ascending order ( without using function and return an indexed array included number 2 )
$arr = array( 12,56,77,99,345,242,234,66,88,23,68,89,332,545,66,77,21,66,99,11);
1. Total array sum ( in array sum 3 digit number should not be included )

2. Make an array their index are odd and values are even ( using above array ) -->

</body>
</html>
