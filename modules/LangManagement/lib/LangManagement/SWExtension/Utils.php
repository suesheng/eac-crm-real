<?php
namespace LangManagement\SWExtension;

/**
 * Created by JetBrains PhpStorm.
 * User: Stefan Warnat <support@stefanwarnat.de>
 * Date: 21.04.14 22:55
 * You must not use this file without permission.
 */

class Utils
{
    public static function encrypt($text, $key) {
        set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__));
        require_once("Crypt/Blowfish.php");
        $bf = Crypt_Blowfish::factory('cbc');
       	$iv = 'abc123+=';

        $bf->setKey($key, $iv);

        $content = $bf->encrypt($text);
    }

    public function decrypt($text, $key) {
        set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__));
        require_once("Crypt/Blowfish.php");

        $bf = Crypt_Blowfish::factory('cbc');$iv = 'abc123+=';
        $bf->setKey($key, $iv);

        $content = $bf->decrypt($text);
        return $content;
    }
}
