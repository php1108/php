<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53426c924a758b896a5f32a9ce9b9682
{
    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Identicon' => 
            array (
                0 => __DIR__ . '/..' . '/yzalis/identicon/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit53426c924a758b896a5f32a9ce9b9682::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
