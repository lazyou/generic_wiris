<?php

class StringTools
{
    public function __construct()
    {
    }
    public static function urlEncode($s)
    {
        return rawurlencode($s);
    }
    public static function urlDecode($s)
    {
        return urldecode($s);
    }
    public static function htmlEscape($s)
    {
        return _hx_explode(">", _hx_explode("<", _hx_explode("&", $s)->join("&amp;"))->join("&lt;"))->join("&gt;");
    }
    public static function htmlUnescape($s)
    {
        return htmlspecialchars_decode($s);
    }
    public static function startsWith($s, $start)
    {
        return strlen($s) >= strlen($start) && _hx_substr($s, 0, strlen($start)) === $start;
    }
    public static function endsWith($s, $end)
    {
        $elen = strlen($end);
        $slen = strlen($s);
        return $slen >= $elen && _hx_substr($s, $slen - $elen, $elen) === $end;
    }
    public static function isSpace($s, $pos)
    {
        $c = _hx_char_code_at($s, $pos);
        return $c >= 9 && $c <= 13 || $c === 32;
    }
    public static function ltrim($s)
    {
        return ltrim($s);
    }
    public static function rtrim($s)
    {
        return rtrim($s);
    }
    public static function trim($s)
    {
        return trim($s);
    }
    public static function rpad($s, $c, $l)
    {
        return str_pad($s, $l, $c, STR_PAD_RIGHT);
    }
    public static function lpad($s, $c, $l)
    {
        return str_pad($s, $l, $c, STR_PAD_LEFT);
    }
    public static function replace($s, $sub, $by)
    {
        return str_replace($sub, $by, $s);
    }
    public static function hex($n, $digits = null)
    {
        $s = dechex($n);
        if ($digits !== null) {
            $s = str_pad($s, $digits, "0", STR_PAD_LEFT);
        }
        return strtoupper($s);
    }
    public static function fastCodeAt($s, $index)
    {
        return ord(substr($s, $index, 1));
    }
    public static function isEOF($c)
    {
        return ($c === 0);
    }
    public function __toString()
    {
        return 'StringTools';
    }
}
