<?php

include '../conn/conn.php';


$val = $_GET['selectvalue'];

//$val = 'Hello7';

$selectquery = " SELECT * from tests where tname= '$val' ";

$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);

    while($res = mysqli_fetch_array($query)){
        //echo $res['tcode'];
        $returnCode = $res['tcode'];
        $returnPrice = $res['s_price'];
        $returnCost = $res['c_price'];
    }

$returnval =$returnCode. "~" .$returnPrice. "~" .$returnCost;   //concatenating two variables in single variable.

echo $returnval;

?>