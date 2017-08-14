<?php

class Math
{
    public function __construct()
    {
    }
    public static $PI;
    public static $NaN;
    public static $POSITIVE_INFINITY;
    public static $NEGATIVE_INFINITY;
    public static function abs($v)
    {
        return abs($v);
    }
    public static function min($a, $b)
    {
        return min($a, $b);
    }
    public static function max($a, $b)
    {
        return max($a, $b);
    }
    public static function sin($v)
    {
        return sin($v);
    }
    public static function cos($v)
    {
        return cos($v);
    }
    public static function atan2($y, $x)
    {
        return atan2($y, $x);
    }
    public static function tan($v)
    {
        return tan($v);
    }
    public static function exp($v)
    {
        return exp($v);
    }
    public static function log($v)
    {
        return log($v);
    }
    public static function sqrt($v)
    {
        return sqrt($v);
    }
    public static function round($v)
    {
        return (int) floor($v + 0.5);
    }
    public static function floor($v)
    {
        return (int) floor($v);
    }
    public static function ceil($v)
    {
        return (int) ceil($v);
    }
    public static function atan($v)
    {
        return atan($v);
    }
    public static function asin($v)
    {
        return asin($v);
    }
    public static function acos($v)
    {
        return acos($v);
    }
    public static function pow($v, $exp)
    {
        return pow($v, $exp);
    }
    public static function random()
    {
        return mt_rand() / mt_getrandmax();
    }
    public static function isNaN($f)
    {
        return is_nan($f);
    }
    public static function isFinite($f)
    {
        return is_finite($f);
    }
    public function __toString()
    {
        return 'Math';
    }
}
{
    Math::$PI = M_PI;
    Math::$NaN = acos(1.01);
    Math::$NEGATIVE_INFINITY = log(0);
    Math::$POSITIVE_INFINITY = -Math::$NEGATIVE_INFINITY;
}
