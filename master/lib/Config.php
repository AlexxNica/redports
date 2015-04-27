<?php

/**
 * Configuration class to store various static settings
 *
 * @author     Bernhard Froehlich <decke@bluelife.at>
 * @copyright  2015 Bernhard Froehlich         
 * @license    BSD License (2 Clause)
 * @link       https://decke.github.io/redports/
 */
class Config
{
   protected static $settings = array(
      'debug'          => true,
      'datasource'     => '/var/run/redis/redis.sock',
      'logdir'         => __DIR__.'/../logs',
      'https_only'     => true,
      'ircbridgetoken' => '',
      'userconfig' => array(
          'jails'   => array('10.1-RELEASE-amd64', '10.1-RELEASE-i386'),
          'notify'  => 'commit' /* commit, email, none */
      )
   );

   public static function get($property)
   {
      if(isset(self::$settings[$property]))
         return self::$settings[$property];

      return false;
   }

   public static function getDatabaseHandle()
   {
      if(isset($GLOBALS['redis']))
         return $GLOBALS['redis'];

      return false;
   }
}

