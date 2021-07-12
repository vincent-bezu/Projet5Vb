<?php

namespace Core;

/**
 * Class Autoload
 * @package app
 */

class Autoloader {

    static function register(){

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    /**
     * fichier correspondant à notre class
     * @param $class string le nom de la classe a charger
     */
    static function autoload($class){
        if (strpos($class, __NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require __DIR__ . '/' . $class . '.php';
        }
    }
}
