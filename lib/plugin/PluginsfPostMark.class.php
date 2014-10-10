<?php

/**
 * Emailmanager PHP class
 * 
 * Copyright 2010, Markus Hedlund, Mimmin AB, www.mimmin.com
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author Markus Hedlund (markus@mimmin.com) at mimmin (www.mimmin.com)
 * @copyright Copyright 2009 - 2010, Markus Hedlund, Mimmin AB, www.mimmin.com
 * @version 0.4.4
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * 
 * Usage:
 * Mail_Emailmanager::compose()
 *      ->addTo('address@example.com', 'Name')
 *      ->subject('Subject')
 *      ->messagePlain('Plaintext message')
 *	    ->tag('Test tag')
 *      ->send();
 * 
 * or:
 * 
 * $email = new Mail_Emailmanager();
 * $email->addTo('address@example.com', 'Name')
 *      ->subject('Subject')
 *      ->messagePlain('Plaintext message')
 *	    ->tag('Test tag')
 *      ->send();
 */
 
class PluginsfEmailManager extends Mail_Emailmanager
{
  public function __construct()
  {
    $this->_apiKey = sfEmailManagerAdapter::getApiKey();      
    sfEmailManagerAdapter::setupDefaults($this);
    $this->messageHtml(null)->messagePlain(null);
  }

  public static function compose()
  {
    return new self();
  }

  protected function _log($logData)
  {
    sfEmailManagerAdapter::log($logData);
  }
}