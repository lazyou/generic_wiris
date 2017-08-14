<?php

class com_wiris_system_Md5Tools
{
    public function __construct()
    {
    }
    public static function encodeString($content)
    {
        return haxe_Md5::encode($content);
    }
    public static function encodeBytes($content)
    {
        return haxe_Md5::encode($content->toString());
    }
    public function __toString()
    {
        return 'com.wiris.system.Md5Tools';
    }
}
