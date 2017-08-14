<?php

class com_wiris_std_system_HttpProxyAuth
{
    public function __construct()
    {
        ;
    }
    public $pass;
    public $user;
    public function __call($m, $a)
    {
        if (isset($this->$m) && is_callable($this->$m)) {
            return call_user_func_array($this->$m, $a);
        } elseif (isset($this->»dynamics[$m]) && is_callable($this->»dynamics[$m])) {
            return call_user_func_array($this->»dynamics[$m], $a);
        } elseif ('toString' == $m) {
            return $this->__toString();
        } else {
            throw new HException('Unable to call «'.$m.'»');
        }
    }
    public function __toString()
    {
        return 'com.wiris.std.system.HttpProxyAuth';
    }
}
