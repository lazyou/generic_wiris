<?php

class haxe_Md5
{
    public function __construct()
    {
    }
    public static function encode($s)
    {
        return md5($s);
    }
    public function __toString()
    {
        return 'haxe.Md5';
    }
}
