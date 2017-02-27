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
        echo "result array is ".$result_array."</br></br></br>";

        $even_array_count=0;
        $odd_array_count=0;
        for($x=0;$x<$result_array;$x++) {

            if ($list[$x]%2 == 0) {
                print  $list[$x]."  is even </br>"   ;
                $even=array();
                $even=$list[$x];
                $even_array_count++;
            }
            else {
                print  $list[$x]."  is odd </br> "   ;
                $odd=array();
                $odd=$list[$x];
                $odd_array_count++;
            }
            //echo "total even count".$even_array_count."</br>";
        }

        echo "</br> total even count   ".$even_array_count."</br>";
        //$odd_array_count=count($odd);
        echo "total odd count   ".$odd_array_count."</br>";
        $totalcount=$even_array_count+$odd_array_count;
        echo "total array count   ".$totalcount."</br></br></br></br> ";
        echo "even odd arrays Inserted successfully  </br>";

        for($x=0;$x<$totalcount;$x++)
        {
            $result=array();
            if($x<=$even_array_count) {
                $result[$x] = $even[$x];
            }
              else {
                  //$odd_array_first_index = $odd[0];
                  $result[$even[$x]] =$odd;
            }
        }

        Echo "Inserted successfully  </br>";
print_r($result);


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

</body>
</html>
