<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* !
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

$config = array(
            // set on "base_url" the relative url that point to HybridAuth Endpoint
            'base_url' => '/hauth/endpoint',
            "providers" => array(
                // openid providers
                "OpenID" => array(
                    "enabled" => true
                ),
                "Yahoo" => array(
                    "enabled" => true,
                    "keys" => array("id" => "", "secret" => ""),
                ),
                "AOL" => array(
                    "enabled" => true
                ),
                "Google" => array(
                    "enabled" => true,
                    "keys" => array("id" => "", "secret" => ""),
                ),
                "Facebook" => array(
                    "enabled" => true,
                    "keys" => array("id" => "907747149242350", "secret" => "6b807dfd4872e36f8b0ea5a4d1156e35"),
                    "scope" => "email, user_about_me, user_birthday, user_hometown, user_website, read_stream, publish_actions,read_friendlists, read_custom_friendlists,user_friends" //read_friendlists optional
                ),
                "Twitter" => array(
                    "enabled" => true,
                    "keys" => array("key" => "", "secret" => "")
                ),
                // windows live
                "Live" => array(
                    "enabled" => true,
                    "keys" => array("id" => "", "secret" => "")
                ),
                "MySpace" => array(
                    "enabled" => true,
                    "keys" => array("key" => "", "secret" => "")
                ),
                "LinkedIn" => array(
                    "enabled" => true,
                    "keys" => array("key" => "", "secret" => "")
                ),
                "Foursquare" => array(
                    "enabled" => true,
                    "keys" => array("id" => "", "secret" => "")
                ),
            ),
            // if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
            "debug_mode" => (ENVIRONMENT == 'development'),
            "debug_file" => APPPATH . '/logs/hybridauth.log',
);


/* End of file hybridauthlib.php */
/* Location: ./application/config/hybridauthlib.php */