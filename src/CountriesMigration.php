<?php

namespace CountriesMigration;

class CountriesMigration {


    const VERSION = '1.1.1';

    /**
     * All of the service bindings for Antvel.
     *
     * @return array
     */
    public static function bindings()
    {
        return [];
    }

    /**
     * All of the service aliases for Antvel.
     *
     * @return array
     */
    public static function alias()
    {
        return [];
    }

    /**
     * The Antvel components services providers.
     *
     * @return array
     */
    public static function providers()
    {
        return [];
    }

    /**
     * Get the base path of the Countries installation.
     *
     * @param string $path Optionally, a path to append to the base path
     *
     * @return string
     */
    public static function basePath($path = '')
    {
        return realpath(__DIR__ . '/../') . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    /**
     * Get the path to the resources directory.
     *
     * @param  string  $path
     *
     * @return string
     */
    public static function resourcePath($path = '')
    {
        return self::basePath() . DIRECTORY_SEPARATOR . 'resources' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    /**
     * Get the path to the language files.
     *
     * @return string
     */
    public static function langPath()
    {
        return self::resourcePath() . DIRECTORY_SEPARATOR . 'lang';
    }
}