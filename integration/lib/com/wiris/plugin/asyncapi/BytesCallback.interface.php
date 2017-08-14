<?php

interface com_wiris_plugin_asyncapi_BytesCallback
{
    public function error($msg);
    public function returnBytes($bs);
}
