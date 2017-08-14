<?php

class Sys
{
    public function __construct()
    {
    }
    public static function hprint($v)
    {
        echo(Std::string($v));
    }
    public static function println($v)
    {
        Sys::hprint($v);
        Sys::hprint("\x0A");
    }
    public static function args()
    {
        return ((array_key_exists("argv", $_SERVER)) ? new _hx_array(array_slice($_SERVER["argv"], 1)) : new _hx_array(array()));
    }
    public static function getEnv($s)
    {
        return getenv($s);
    }
    public static function putEnv($s, $v)
    {
        putenv($s . "=" . $v);
        return;
    }
    public static function sleep($seconds)
    {
        usleep($seconds * 1000000);
        return;
    }
    public static function setTimeLocale($loc)
    {
        return setlocale(LC_TIME, $loc) !== false;
    }
    public static function getCwd()
    {
        $cwd = getcwd();
        $l = _hx_substr($cwd, -1, null);
        return $cwd . ((($l === "/" || $l === "\\") ? "" : "/"));
    }
    public static function setCwd($s)
    {
        chdir($s);
    }
    public static function systemName()
    {
        $s = php_uname("s");
        $p = null;
        if (($p = _hx_index_of($s, " ", null)) >= 0) {
            return _hx_substr($s, 0, $p);
        } else {
            return $s;
        }
    }
    public static function escapeArgument($arg)
    {
        $ok = true;
        {
            $_g1 = 0; $_g = strlen($arg);
            while ($_g1 < $_g) {
                $i = $_g1++;
                switch (_hx_char_code_at($arg, $i)) {
                case 32:case 34:{
                    $ok = false;
                }break;
                case 0:case 13:case 10:{
                    $arg = _hx_substr($arg, 0, $i);
                }break;
                }
                unset($i);
            }
        }
        if ($ok) {
            return $arg;
        }
        return "\"" . _hx_explode("\"", $arg)->join("\\\"") . "\"";
    }
    public static function command($cmd, $args = null)
    {
        if ($args !== null) {
            $cmd = Sys::escapeArgument($cmd);
            {
                $_g = 0;
                while ($_g < $args->length) {
                    $a = $args[$_g];
                    ++$_g;
                    $cmd .= " " . Sys::escapeArgument($a);
                    unset($a);
                }
            }
        }
        $result = 0;
        system($cmd, $result);
        return $result;
    }
    public static function hexit($code)
    {
        exit($code);
    }
    public static function time()
    {
        return microtime(true);
    }
    public static function cpuTime()
    {
        return microtime(true) - $_SERVER['REQUEST_TIME'];
    }
    public static function executablePath()
    {
        return $_SERVER['SCRIPT_FILENAME'];
    }
    public static function environment()
    {
        return php_Lib::hashOfAssociativeArray($_SERVER);
    }
    public static function stdin()
    {
        return new sys_io_FileInput(fopen("php://stdin", "r"));
    }
    public static function stdout()
    {
        return new sys_io_FileOutput(fopen("php://stdout", "w"));
    }
    public static function stderr()
    {
        return new sys_io_FileOutput(fopen("php://stderr", "w"));
    }
    public static function getChar($echo)
    {
        $v = fgetc(STDIN);
        if ($echo) {
            echo($v);
        }
        return $v;
    }
    public function __toString()
    {
        return 'Sys';
    }
}
