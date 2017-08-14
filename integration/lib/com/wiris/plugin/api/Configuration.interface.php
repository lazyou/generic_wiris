<?php

interface com_wiris_plugin_api_Configuration
{
    public function setConfigurations($configurationKeys, $configurationValues);
    public function getJsonConfiguration($configurationKeys);
    public function setInitObject($context);
    public function setProperty($name, $value);
    public function getProperty($name, $dflt);
    public function getJavaScriptConfigurationJson();
    public function getFullConfiguration();
}
