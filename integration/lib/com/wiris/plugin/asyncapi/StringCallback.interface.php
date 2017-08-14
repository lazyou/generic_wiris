<?php

interface com_wiris_plugin_asyncapi_StringCallback
{
    public function error($msg);
    public function returnString($str);
}
