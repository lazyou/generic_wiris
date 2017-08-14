<?php

interface com_wiris_plugin_storage_StorageAndCache
{
    public function deleteCache();
    public function storeData($digest, $service, $stream);
    public function retreiveData($digest, $service);
    public function decodeDigest($digest);
    public function codeDigest($content);
    public function init($obj, $config, $cache, $cacheFormula);
}
