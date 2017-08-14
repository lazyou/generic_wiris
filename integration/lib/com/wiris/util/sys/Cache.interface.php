<?php

interface com_wiris_util_sys_Cache
{
    public function delete($key);
    public function deleteAll();
    public function get($key);
    public function set($key, $value);
}
