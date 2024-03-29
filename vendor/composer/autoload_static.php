<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ed1eb76261abcc82b64b2a716cd5e0e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ed1eb76261abcc82b64b2a716cd5e0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ed1eb76261abcc82b64b2a716cd5e0e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
