<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9a948636f221715ff33086ec00f0a9a
{
    public static $files = array (
        '8a9dc1de0ca7e01f3e08231539562f61' => __DIR__ . '/..' . '/aws/aws-sdk-php/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aws\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aws\\' => 
        array (
            0 => __DIR__ . '/..' . '/aws/aws-sdk-php/src',
        ),
    );

    public static $classMap = array (
        'AWS\\CRT\\Auth\\AwsCredentials' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/AwsCredentials.php',
        'AWS\\CRT\\Auth\\CredentialsProvider' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/CredentialsProvider.php',
        'AWS\\CRT\\Auth\\Signable' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/Signable.php',
        'AWS\\CRT\\Auth\\SignatureType' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/SignatureType.php',
        'AWS\\CRT\\Auth\\SignedBodyHeaderType' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/SignedBodyHeaderType.php',
        'AWS\\CRT\\Auth\\Signing' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/Signing.php',
        'AWS\\CRT\\Auth\\SigningAlgorithm' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/SigningAlgorithm.php',
        'AWS\\CRT\\Auth\\SigningConfigAWS' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/SigningConfigAWS.php',
        'AWS\\CRT\\Auth\\SigningResult' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/SigningResult.php',
        'AWS\\CRT\\Auth\\StaticCredentialsProvider' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Auth/StaticCredentialsProvider.php',
        'AWS\\CRT\\CRT' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/CRT.php',
        'AWS\\CRT\\HTTP\\Headers' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/HTTP/Headers.php',
        'AWS\\CRT\\HTTP\\Message' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/HTTP/Message.php',
        'AWS\\CRT\\HTTP\\Request' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/HTTP/Request.php',
        'AWS\\CRT\\HTTP\\Response' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/HTTP/Response.php',
        'AWS\\CRT\\IO\\EventLoopGroup' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/IO/EventLoopGroup.php',
        'AWS\\CRT\\IO\\InputStream' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/IO/InputStream.php',
        'AWS\\CRT\\Internal\\Encoding' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Internal/Encoding.php',
        'AWS\\CRT\\Internal\\Extension' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Internal/Extension.php',
        'AWS\\CRT\\Log' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Log.php',
        'AWS\\CRT\\NativeResource' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/NativeResource.php',
        'AWS\\CRT\\OptionValue' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Options.php',
        'AWS\\CRT\\Options' => __DIR__ . '/..' . '/aws/aws-crt-php/src/AWS/CRT/Options.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9a948636f221715ff33086ec00f0a9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9a948636f221715ff33086ec00f0a9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9a948636f221715ff33086ec00f0a9a::$classMap;

        }, null, ClassLoader::class);
    }
}