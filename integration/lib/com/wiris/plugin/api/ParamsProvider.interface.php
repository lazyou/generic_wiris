<?php

interface com_wiris_plugin_api_ParamsProvider
{
    public function getServiceParameters();
    public function getRenderParameters($configuration);
    public function getParameters();
    public function getRequiredParameter($param);
    public function getParameter($param, $dflt);
}
