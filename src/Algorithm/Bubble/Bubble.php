<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/21/18
 * Time: 2:46 PM
 */

namespace PatternDesigns\Algorithm\Bubble;

class Bubble
{
    public function sort($array)
    {
        for ($j=0;$j<count($array)-1;$j++) {
            for ($i=0;$i<count($array)-$j-1;$i++) {
                if ($array[$i] > $array[$i + 1]) {
                    $tmp = $array[$i + 1];
                    $array[$i + 1] = $array[$i];
                    $array[$i] = $tmp;
                }
            }
        }
        return $array;
    }
}