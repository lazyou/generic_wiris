<?php

class haxe_io_Eof
{
    public function __construct()
    {
    }
    public function toString()
    {
        return "Eof";
    }
    public function __toString()
    {
        return $this->toString();
    }
}
