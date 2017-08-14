<?php

class com_wiris_common_WInteger
{
    public function __construct()
    {
    }
    public static function max($x, $y)
    {
        if ($x > $y) {
            return $x;
        }
        return $y;
    }
    public static function min($x, $y)
    {
        if ($x < $y) {
            return $x;
        }
        return $y;
    }
    public static function toHex($x, $digits)
    {
        $s = "";
        while ($x !== 0 && $digits > 0) {
            $digits--;
            $d = $x & 15;
            $s = com_wiris_common_WInteger_0($d, $digits, $s, $x) . $s;
            $x = $x >> 4;
            unset($d);
        }
        while ($digits-- > 0) {
            $s = "0" . $s;
        }
        return $s;
    }
    public static function parseHex($str)
    {
        return Std::parseInt("0x" . $str);
    }
    public static function isInteger($str)
    {
        $str = trim($str);
        $i = 0;
        $n = strlen($str);
        if (StringTools::startsWith($str, "-")) {
            $i++;
        }
        if (StringTools::startsWith($str, "+")) {
            $i++;
        }
        $c = null;
        while ($i < $n) {
            $c = _hx_char_code_at($str, $i);
            if ($c < 48 || $c > 57) {
                return false;
            }
            $i++;
        }
        return true;
    }
    public function __toString()
    {
        return 'com.wiris.common.WInteger';
    }
}
function com_wiris_common_WInteger_0(&$d, &$digits, &$s, &$x)
{
    {
        $s1 = new haxe_Utf8(null);
        $s1->addChar($d + ((($d >= 10) ? 55 : 48)));
        return $s1->toString();
    }
}
