<?php

interface com_wiris_plugin_impl_HttpListener
{
    public function onError($msg);
    public function onData($data);
}
