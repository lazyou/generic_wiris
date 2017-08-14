<?php

interface com_wiris_plugin_asyncapi_AsyncRender
{
    public function getMathml($digest, $call);
    public function showImage($digest, $mml, $param, $call);
    public function createImage($mml, $param, &$output, $call);
}
