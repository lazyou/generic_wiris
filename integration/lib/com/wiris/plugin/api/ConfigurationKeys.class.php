<?php

class com_wiris_plugin_api_ConfigurationKeys
{
    public function __construct()
    {
    }
    public static $DEBUG = "wirisdebug";
    public static $FORMULA_FOLDER = "wirisformuladirectory";
    public static $CACHE_FOLDER = "wiriscachedirectory";
    public static $INTEGRATION_PATH = "wirisintegrationpath";
    public static $EDITOR_PARAMETERS_LIST = "wiriseditorparameterslist";
    public static $STORAGE_CLASS = "wirisstorageclass";
    public static $CONFIGURATION_CLASS = "wirisconfigurationclass";
    public static $CONFIGURATION_PATH = "wirisconfigurationpath";
    public static $CONTEXT_PATH = "wiriscontextpath";
    public static $SERVICE_PROTOCOL = "wirisimageserviceprotocol";
    public static $SERVICE_PORT = "wirisimageserviceport";
    public static $SERVICE_HOST = "wirisimageservicehost";
    public static $SERVICE_PATH = "wirisimageservicepath";
    public static $CAS_LANGUAGES = "wiriscaslanguages";
    public static $CAS_CODEBASE = "wiriscascodebase";
    public static $CAS_ARCHIVE = "wiriscasarchive";
    public static $CAS_CLASS = "wiriscasclass";
    public static $CAS_WIDTH = "wiriscaswidth";
    public static $CAS_HEIGHT = "wiriscasheight";
    public static $SHOWIMAGE_PATH = "wirishowimagepath";
    public static $SHOWCASIMAGE_PATH = "wirishowcasimagepath";
    public static $CLEAN_CACHE_PATH = "wiriscleancachepath";
    public static $RESOURCE_PATH = "wirisresourcespath";
    public static $LATEX_TO_MATHML_URL = "wirislatextomathmlurl";
    public static $SAVE_MODE = "wiriseditorsavemode";
    public static $EDITOR_TOOLBAR = "wiriseditortoolbar";
    public static $HOST_PLATFORM = "wirishostplatform";
    public static $VERSION_PLATFORM = "wirisversionplatform";
    public static $WIRIS_DPI = "wirisimagedpi";
    public static $FONT_FAMILY = "wirisfontfamily";
    public static $FILTER_OUTPUT_MATHML = "wirisfilteroutputmathml";
    public static $EDITOR_MATHML_ATTRIBUTE = "wiriseditormathmlattribute";
    public static $EDITOR_PARAMS = "wiriseditorparameters";
    public static $EDITOR_PARAMETERS_DEFAULT_LIST = "mml,color,centerbaseline,zoom,dpi,fontSize,fontFamily,defaultStretchy,backgroundColor,format";
    public static $EDITOR_PARAMETERS_NOTRENDER_LIST = "toolbar, toolbarHidden, reservedWords, autoformat, mml, language, rtlLanguages, ltrLanguages, arabicIndicLanguages, easternArabicIndicLanguages, europeanLanguages";
    public static $HTTPPROXY = "wirisproxy";
    public static $HTTPPROXY_HOST = "wirisproxy_host";
    public static $HTTPPROXY_PORT = "wirisproxy_port";
    public static $HTTPPROXY_USER = "wirisproxy_user";
    public static $HTTPPROXY_PASS = "wirisproxy_password";
    public static $REFERER = "wirisreferer";
    public static $IMAGE_FORMAT = "wirisimageformat";
    public static $EXTERNAL_PLUGIN = "wirisexternalplugin";
    public static $EXTERNAL_REFERER = "wirisexternalreferer";
    public static $IMPROVE_PERFORMANCE = "wirispluginperformance";
    public static $EDITOR_KEY = "wiriseditorkey";
    public static $CLEAN_CACHE_TOKEN = "wiriscleancachetoken";
    public static $CLEAN_CACHE_GUI = "wiriscleancachegui";
    public static $imageConfigProperties;
    public static $imageConfigPropertiesInv;
    public static $SERVICES_PARAMETERS_LIST = "mml,lang,service,latex";
    public static function computeInverse($dict)
    {
        $keys = $dict->keys();
        $outDict = new Hash();
        while ($keys->hasNext()) {
            $key = $keys->next();
            $outDict->set($dict->get($key), $key);
            unset($key);
        }
        return $outDict;
    }
    public function __toString()
    {
        return 'com.wiris.plugin.api.ConfigurationKeys';
    }
}
{
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties = new Hash();
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("backgroundColor", "wirisimagebackgroundcolor");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("transparency", "wiristransparency");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("fontSize", "wirisimagefontsize");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("version", "wirisimageserviceversion");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("color", "wirisimagecolor");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("dpi", "wirisimagedpi");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("fontFamily", com_wiris_plugin_api_ConfigurationKeys::$FONT_FAMILY);
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("rtlLanguages", "wirisrtllanguages");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("ltrLanguages", "wirisltrlanguages");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("arabicIndicLanguages", "wirisarabicindiclanguages");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("easternArabicIndicLanguages", "wiriseasternarabicindiclanguages");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("europeanLanguages", "wiriseuropeanlanguages");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("defaultStretchy", "wirisimagedefaultstretchy");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties->set("parseMemoryLimit", "wirisparsememorylimit");
    com_wiris_plugin_api_ConfigurationKeys::$imageConfigPropertiesInv = com_wiris_plugin_api_ConfigurationKeys::computeInverse(com_wiris_plugin_api_ConfigurationKeys::$imageConfigProperties);
}
