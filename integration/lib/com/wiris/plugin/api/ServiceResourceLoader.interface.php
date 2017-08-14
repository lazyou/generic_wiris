<?php

interface com_wiris_plugin_api_ServiceResourceLoader
{
    public function getContentType($name);
    public function getContent($resource);
}
