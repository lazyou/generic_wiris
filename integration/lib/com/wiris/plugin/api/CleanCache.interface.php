<?php

interface com_wiris_plugin_api_CleanCache
{
    public function getContentType();
    public function getCacheOutput();
    public function init($provider);
}
