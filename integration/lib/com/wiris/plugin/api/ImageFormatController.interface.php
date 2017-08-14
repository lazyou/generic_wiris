<?php

interface com_wiris_plugin_api_ImageFormatController
{
    public function getMetrics($bytes, &$output);
    public function getContentType();
}
