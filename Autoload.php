<?php

class Autoload {
    public static function register() {
        spl_autoload_register(array(__CLASS__, 'load'));
    }

    public static function load($className) {
        $baseDir  = __DIR__ . '/';
        $directories = [
            'controllers/',
            'models/',
            'views/',
            'core/',
            'core/database/',
            '/',
        ];

        foreach ($directories as $directory) {
            $file = $baseDir . $directory . $className . '.php';
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    }
}

Autoload::register();