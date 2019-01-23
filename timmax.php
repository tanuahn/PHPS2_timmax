<?php
    $arr = array ([25,46,89,78],[26,46,98,01],[02,03,26,10],[65,99,07,15]);
    function timMax($array ){
        $max = $array[0][0];
        for ($i = 0; $i < count($array); $i++){
            for ($j = 0; $j < count($array[$i]); $j++){
                if ($array[$i][$j] > $max){
                    $max = $array[$i][$j];
                }
        }
    }
        return $max;

}
   echo "Max is : " . timMax($arr);
?>

