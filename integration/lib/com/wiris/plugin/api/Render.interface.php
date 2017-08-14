<?php

interface com_wiris_plugin_api_Render
{
    public function computeDigest($mml, $param);
    public function getMathml($digest);
    public function showImageHash($digest, $lang);
    public function showImageJson($digest, $lang);
    public function showImage($digest, $mml, $provider);
    public function createImage($mml, $param, &$output);
}
