<?php

namespace App\core;

class Translation
{
    /**
     * @var array<string, string>
     */
    private static array $translations = [];
    private static string $lang = 'fr';

    public static function init(?string $lang = null): void
    {
        if ($lang !== null) {
            self::$lang = $lang;
        } else if (isset($_SESSION['lang'])) {
            self::$lang = $_SESSION['lang'];
        }
        $file = __DIR__ . "/../config/languages/translation-" . self::$lang . ".json";
        if (file_exists($file)) {
            $json = file_get_contents($file);
            if ($json !== false) {
                $data = json_decode($json, true);
                if (is_array($data)) {
                    // On ne garde que les paires string => string
                    self::$translations = array_filter(
                        $data,
                        fn($v) => is_string($v)
                    );
                }
            }
        }
    }

    public static function get(string $key): string
    {
        if (empty(self::$translations)) {
            self::init();
        }
        return self::$translations[$key] ?? $key;
    }
}