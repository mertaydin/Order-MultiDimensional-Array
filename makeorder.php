<?php

class Makeorder
{
    function __construct() {
    }

    public function getDummyArray()
    {
        return array(
            array(
                'id'    =>  1,
                'name'  =>  "Mert",
                'old'   =>  26
            ),
            array(
                'id'    =>  1,
                'name'  =>  "Ali",
                'old'   =>  24
            ),
            array(
                'id'    =>  1,
                'name'  =>  "Yunus",
                'old'   =>  22
            ),
            array(
                'id'    =>  1,
                'name'  =>  "Tuncay",
                'old'   =>  35
            ),
            array(
                'id'    =>  1,
                'name'  =>  "Gülten",
                'old'   =>  32
            ),
        );
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