<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1714a8f19cffe330ac2c48cbabaecb97
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'prodigyview\\' => 12,
        ),
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'prodigyview\\' => 
        array (
            0 => __DIR__ . '/..' . '/prodigyview/prodigyview/src',
        ),
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1714a8f19cffe330ac2c48cbabaecb97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1714a8f19cffe330ac2c48cbabaecb97::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1714a8f19cffe330ac2c48cbabaecb97::$classMap;

        }, null, ClassLoader::class);
    }
}