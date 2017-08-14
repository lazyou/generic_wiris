<?php

class haxe_Int32
{
    public function __construct()
    {
    }
    public static function make($a, $b)
    {
        return $a << 16 | $b;
    }
    public static function ofInt($x)
    {
        return $x | 0;
    }
    public static function clamp($x)
    {
        return $x | 0;
    }
    public static function toInt($x)
    {
        if (($x >> 30 & 1) !== _hx_shift_right($x, 31)) {
            throw new HException("Overflow " . Std::string($x));
        }
        return $x & -1;
    }
    public static function toNativeInt($x)
    {
        return $x;
    }
    public static function add($a, $b)
    {
        return $a + $b | 0;
    }
    public static function sub($a, $b)
    {
        return $a - $b | 0;
    }
    public static function mul($a, $b)
    {
        return $a * ($b & 65535) + ($a * (_hx_shift_right($b, 16)) << 16 | 0) | 0;
    }
    public static function div($a, $b)
    {
        return intval($a / $b);
    }
    public static function mod($a, $b)
    {
        return _hx_mod($a, $b);
    }
    public static function shl($a, $b)
    {
        return $a << $b;
    }
    public static function shr($a, $b)
    {
        return $a >> $b;
    }
    public static function ushr($a, $b)
    {
        return _hx_shift_right($a, $b);
    }
    public static function hand($a, $b)
    {
        return $a & $b;
    }
    public static function hor($a, $b)
    {
        return $a | $b;
    }
    public static function hxor($a, $b)
    {
        return $a ^ $b;
    }
    public static function neg($a)
    {
        return -$a;
    }
    public static function isNeg($a)
    {
        return $a < 0;
    }
    public static function isZero($a)
    {
        return $a === 0;
    }
    public static function complement($a)
    {
        return ~$a;
    }
    public static function compare($a, $b)
    {
        return $a - $b;
    }
    public static function ucompare($a, $b)
    {
        if ($a < 0) {
            return haxe_Int32_0($a, $b);
        }
        return haxe_Int32_1($a, $b);
    }
    public function __toString()
    {
        return 'haxe.Int32';
    }
}
function haxe_Int32_0(&$a, &$b)
{
    if ($b < 0) {
        return ~$b - ~$a;
    } else {
        return 1;
    }
}
function haxe_Int32_1(&$a, &$b)
{
    if ($b < 0) {
        return -1;
    } else {
        return $a - $b;
    }
}
