<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit345f8565a1453ad68e183e53ad741265
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Phpbb\\Epv\\' => 10,
        ),
        'G' => 
        array (
            'Gitonomy\\Git\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Phpbb\\Epv\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpbb/epv/src',
        ),
        'Gitonomy\\Git\\' => 
        array (
            0 => __DIR__ . '/..' . '/gitonomy/gitlib/src/Gitonomy/Git',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SensioLabs\\AnsiConverter' => 
            array (
                0 => __DIR__ . '/..' . '/sensiolabs/ansi-to-html',
            ),
        ),
        'P' => 
        array (
            'PHPParser' => 
            array (
                0 => __DIR__ . '/..' . '/nikic/php-parser/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit345f8565a1453ad68e183e53ad741265::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit345f8565a1453ad68e183e53ad741265::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit345f8565a1453ad68e183e53ad741265::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
