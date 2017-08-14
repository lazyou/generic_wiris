<?php

interface com_wiris_plugin_asyncapi_AsyncTextService
{
    public function mathml2accessible($mml, $lang, $prop, $response);
    public function service($serviceName, $provider, $response);
}
