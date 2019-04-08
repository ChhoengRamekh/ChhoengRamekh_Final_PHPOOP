<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc599a5df2c3473af19f87e10420beaf5
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'finalExam\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'finalExam\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../src',
        ),
    );

    public static $classMap = array (
        'finalExam\\functions' => __DIR__ . '/../..' . '/../src/functions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc599a5df2c3473af19f87e10420beaf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc599a5df2c3473af19f87e10420beaf5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc599a5df2c3473af19f87e10420beaf5::$classMap;

        }, null, ClassLoader::class);
    }
}
