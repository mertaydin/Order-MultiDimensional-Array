<?php

class Makeorder
{
    function __construct() {
    }

    public function makeOrderWithBubbleSort($array , $key)
    {
        $size = (sizeof($array)-1);
        for($i=0; $i<$size;$i++)
        {
            for ($j=$i+1; $j<=$size ; $j++)
            {
                $birinci = intval($array[$i][$key]);
                $ikinci  = intval($array[$j][$key]);
                if($birinci > $ikinci )
                {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
        return $array;
    }
}