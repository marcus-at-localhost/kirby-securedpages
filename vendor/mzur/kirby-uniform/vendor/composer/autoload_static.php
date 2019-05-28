<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite75dd71623baa0bafc37ab0f4ea53383
{
    public static $files = array (
        'e862d9fce5eaa28c798b151ac7fc8bc6' => __DIR__ . '/..' . '/mzur/kirby-flash/src/helpers.php',
        '316f57472eecfe71b6733d9d2acbcae9' => __DIR__ . '/..' . '/mzur/kirby-form/src/helpers.php',
        '513c89d6408d266be7db63374b5a5cc9' => __DIR__ . '/../..' . '/config.php',
        '1f7ddc2baab73fdd75a4663f7a275bb1' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Uniform\\' => 8,
        ),
        'J' => 
        array (
            'Jevets\\Kirby\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Uniform\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Jevets\\Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/mzur/kirby-flash/src',
            1 => __DIR__ . '/..' . '/mzur/kirby-form/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite75dd71623baa0bafc37ab0f4ea53383::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite75dd71623baa0bafc37ab0f4ea53383::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
