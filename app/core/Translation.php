<?php

namespace App\core;

class Translation
{
    private static $translations = [];
    private static $lang = 'fr';

    public static function init($lang = null)
    {
        if ($lang !== null) {
            self::$lang = $lang;
        } else if (isset($_SESSION['lang'])) {
            self::$lang = $_SESSION['lang'];
        }
        $file = __DIR__ . "/../config/languages/translation-" . self::$lang . ".json";
        if (file_exists($file)) {
            self::$translations = json_decode(file_get_contents($file), true);
        }
    }

    public static function get($key)
    {
        if (empty(self::$translations)) {
            self::init();
        }
        return self::$translations[$key] ?? $key;
    }
}