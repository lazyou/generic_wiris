<?php

class com_wiris_system_PropertiesTools
{
    public function __construct()
    {
    }
    public static function getSystemProperty($s)
    {
        return null;
    }
    public static function getProperty($prop, $key, $dflt = null)
    {
        if (isset($prop[$key])) {
            return $prop[$key];
        }
        return $dflt;
    }
    public static function newProperties()
    {
        return array();
        ;
    }
    public static function setProperty($prop, $key, $value)
    {
        $prop[$key] = $value;
    }
    public static function fromProperties($prop)
    {
        $ht = new Hash();
        $key = "";
        $value = "";
        foreach ($prop as $key => $value) {
            $ht->set($key, $value);
        }
        return $ht;
    }
    public static function toProperties($h)
    {
        $np = array();
        ;
        $ks = $h->keys();
        while ($ks->hasNext()) {
            $k = $ks->next();
            $np[$k] = $h->get($k);
            unset($k);
        }
        return $np;
    }
    public function __toString()
    {
        return 'com.wiris.system.PropertiesTools';
    }
}
