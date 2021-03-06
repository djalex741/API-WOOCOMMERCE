<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit477fae8f4c983b1cae82f1fa7deb5d16
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit477fae8f4c983b1cae82f1fa7deb5d16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit477fae8f4c983b1cae82f1fa7deb5d16::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
