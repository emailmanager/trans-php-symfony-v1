<?php

class PluginsfEmailManagerAdapter implements Mail_Emailmanager_Adapter_Interface
{
  public static $latestLogEntry;
  
  public static function getApiKey()
  {
    return sfConfig::get('app_sf_emailmanager_plugin_key',Mail_Emailmanager::TESTING_API_KEY);
  }
  
  public static function setupDefaults(Mail_Emailmanager &$mail)
  {
    $from = sfConfig::get('app_sf_emailmanager_plugin_from','foo@bar.com');
    $name = sfConfig::get('app_sf_emailmanager_plugin_name','Foo Bar');
    $mail->from($from, $name);
  }
  
  public static function log($logData)
  {
    self::$latestLogEntry = $logData;
  }
}