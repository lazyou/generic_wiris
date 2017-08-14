<?php

class com_wiris_system_Utf8
{
    public function __construct()
    {
    }
    public static function getLength($s)
    {
        return haxe_Utf8::length($s);
    }
    public static function charCodeAt($s, $i)
    {
        return haxe_Utf8::charCodeAt($s, $i);
    }
    public static function charAt($s, $i)
    {
        return com_wiris_system_Utf8_0($i, $s);
    }
    public static function uchr($i)
    {
        $s = new haxe_Utf8(null);
        $s->addChar($i);
        return $s->toString();
    }
    public static function sub($s, $pos, $len)
    {
        return haxe_Utf8::sub($s, $pos, $len);
    }
    public static function toBytes($s)
    {
        return haxe_io_Bytes::ofString($s)->b;
    }
    public static function fromBytes($s)
    {
        $bs = haxe_io_Bytes::ofData($s);
        return $bs->toString();
    }
    public static function getIterator($s)
    {
        return new com_wiris_system__Utf8_StringIterator($s);
    }
    public function __toString()
    {
        return 'com.wiris.system.Utf8';
    }
}
function com_wiris_system_Utf8_0(&$i, &$s)
{
    {
        $s1 = new haxe_Utf8(null);
        $s1->addChar(haxe_Utf8::charCodeAt($s, $i));
        return $s1->toString();
    }
}
