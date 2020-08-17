<?php

namespace Globals;

use Globals\Interfaces\GlobalInterface;
use Globals\Variables\ProtectedArray;

class GlobalsSingletone implements GlobalInterface
{
    private static $globals;
    private static $server;
    private static $get;
    private static $post;
    private static $files;
    private static $cookie;
    private static $session;
    private static $request;
    private static $env;

    private static $instances = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): self
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::init();
            self::$instances[$cls] = new static;
        }

        return self::$instances[$cls];
    }

    protected static function init()
    {
        self::$globals = new ProtectedArray($GLOBALS);
        self::$server = new ProtectedArray($_SERVER);
        self::$get = new ProtectedArray($_GET);
        self::$post = new ProtectedArray($_POST);
        self::$files = new ProtectedArray($_FILES);
        self::$cookie = new ProtectedArray($_COOKIE);
        self::$session = new ProtectedArray($_SESSION);
        self::$request = new ProtectedArray($_REQUEST);
        self::$env = new ProtectedArray($_ENV);
    }

    public function getGlobals(): ProtectedArray
    {
        return self::$globals;
    }

    public function getServer(): ProtectedArray
    {
        return self::$server;
    }

    public function getGet(): ProtectedArray
    {
        return self::$get;
    }

    public function getPost(): ProtectedArray
    {
        return self::$post;
    }

    public function getFiles(): ProtectedArray
    {
        return self::$files;
    }

    public function getCookie(): ProtectedArray
    {
        return self::$cookie;
    }

    public function getSession(): ProtectedArray
    {
        return self::$session;
    }

    public function getRequest(): ProtectedArray
    {
        return self::$request;
    }

    public function getEnv(): ProtectedArray
    {
        return self::$env;
    }
}
