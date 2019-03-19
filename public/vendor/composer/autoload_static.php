<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a0c18c9be69dd2a6238b996045cfa75
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CodeCourse\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CodeCourse\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/CodeCourse',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a0c18c9be69dd2a6238b996045cfa75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a0c18c9be69dd2a6238b996045cfa75::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
