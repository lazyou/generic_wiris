<?php

class sys_io_File
{
    public function __construct()
    {
    }
    public static function getContent($path)
    {
        return file_get_contents($path);
    }
    public static function getBytes($path)
    {
        return haxe_io_Bytes::ofString(sys_io_File::getContent($path));
    }
    public static function saveContent($path, $content)
    {
        file_put_contents($path, $content);
    }
    public static function saveBytes($path, $bytes)
    {
        $f = sys_io_File::write($path, null);
        $f->write($bytes);
        $f->close();
    }
    public static function read($path, $binary = null)
    {
        if ($binary === null) {
            $binary = true;
        }
        return new sys_io_FileInput(fopen($path, (($binary) ? "rb" : "r")));
    }
    public static function write($path, $binary = null)
    {
        if ($binary === null) {
            $binary = true;
        }
        return new sys_io_FileOutput(fopen($path, (($binary) ? "wb" : "w")));
    }
    public static function append($path, $binary = null)
    {
        if ($binary === null) {
            $binary = true;
        }
        return new sys_io_FileOutput(fopen($path, (($binary) ? "ab" : "a")));
    }
    public static function copy($src, $dst)
    {
        copy($src, $dst);
    }
    public function __toString()
    {
        return 'sys.io.File';
    }
}
