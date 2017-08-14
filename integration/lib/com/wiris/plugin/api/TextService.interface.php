<?php

interface com_wiris_plugin_api_TextService
{
    public function filter($str, $prop);
    public function getMathML($digest, $latex);
    public function latex2mathml($mml);
    public function mathml2latex($mml);
    public function mathml2accessible($mml, $lang, $prop);
    public function service($serviceName, $provider);
}
