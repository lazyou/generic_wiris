<?php

interface com_wiris_plugin_configuration_ConfigurationUpdater
{
    public function updateConfiguration(&$configuration);
    public function init($obj);
}
