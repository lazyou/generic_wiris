<?php

class sys_FileSystem
{
    public function __construct()
    {
    }
    public static function exists($path)
    {
        return file_exists($path);
    }
    public static function rename($path, $newpath)
    {
        rename($path, $newpath);
    }
    public static function stat($path)
    {
        $fp = fopen($path, "r");
        $fstat = fstat($fp);
        fclose($fp);
        ;
        return _hx_anonymous(array("gid" => $fstat['gid'], "uid" => $fstat['uid'], "atime" => Date::fromTime($fstat['atime'] * 1000), "mtime" => Date::fromTime($fstat['mtime'] * 1000), "ctime" => Date::fromTime($fstat['ctime'] * 1000), "dev" => $fstat['dev'], "ino" => $fstat['ino'], "nlink" => $fstat['nlink'], "rdev" => $fstat['rdev'], "size" => $fstat['size'], "mode" => $fstat['mode']));
    }
    public static function fullPath($relpath)
    {
        $p = realpath($relpath);
        if (($p === false)) {
            return null;
        } else {
            return $p;
        }
    }
    public static function kind($path)
    {
        $k = filetype($path);
        switch ($k) {
        case "file":{
            return sys__FileSystem_FileKind::$kfile;
        }break;
        case "dir":{
            return sys__FileSystem_FileKind::$kdir;
        }break;
        default:{
            return sys__FileSystem_FileKind::kother($k);
        }break;
        }
    }
    public static function isDirectory($path)
    {
        return is_dir($path);
    }
    public static function createDirectory($path)
    {
        @mkdir($path, 493);
    }
    public static function deleteFile($path)
    {
        @unlink($path);
    }
    public static function deleteDirectory($path)
    {
        @rmdir($path);
    }
    public static function readDirectory($path)
    {
        $l = array();
        $dh = opendir($path);
        while (($file = readdir($dh)) !== false) {
            if ("." != $file && ".." != $file) {
                $l[] = $file;
            }
        }
        closedir($dh);
        ;
        return new _hx_array($l);
    }
    public function __toString()
    {
        return 'sys.FileSystem';
    }
}
