<?php

class com_wiris_system_ArrayEx
{
    public function __construct()
    {
    }
    public static function contains($a, $b)
    {
        {
            $_g = 0;
            while ($_g < $a->length) {
                $x = $a[$_g];
                ++$_g;
                if ($x == $b) {
                    return true;
                }
                unset($x);
            }
        }
        return false;
    }
    public static function indexOf($a, $b)
    {
        $idx = 0;
        while ($idx < $a->length) {
            if ($a[$idx] == $b) {
                return $idx;
            }
            ++$idx;
        }
        return -1;
    }
    public function __toString()
    {
        return 'com.wiris.system.ArrayEx';
    }
}
