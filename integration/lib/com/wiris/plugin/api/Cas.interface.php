<?php

interface com_wiris_plugin_api_Cas
{
    public function cas($mode, $language);
    public function createCasImage($imageParameter);
    public function showCasImage($formula, $provider);
}
