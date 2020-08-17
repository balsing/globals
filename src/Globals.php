<?php

namespace Globals;

use Globals\Interfaces\GlobalInterface;
use Globals\Variables\ProtectedArray;

class Globals implements GlobalInterface
{
    private $globals;
    private $server;
    private $get;
    private $post;
    private $files;
    private $cookie;
    private $session;
    private $request;
    private $env;

    public function __construct()
    {
        $this->globals = new ProtectedArray($GLOBALS);
        $this->server = new ProtectedArray($_SERVER);
        $this->get = new ProtectedArray($_GET);
        $this->post = new ProtectedArray($_POST);
        $this->files = new ProtectedArray($_FILES);
        $this->cookie = new ProtectedArray($_COOKIE);
        $this->session = new ProtectedArray($_SESSION);
        $this->request = new ProtectedArray($_REQUEST);
        $this->env = new ProtectedArray($_ENV);
    }

    public function getGlobals(): ProtectedArray
    {
        return $this->globals;
    }

    public function getServer(): ProtectedArray
    {
        return $this->server;
    }

    public function getGet(): ProtectedArray
    {
        return $this->get;
    }

    public function getPost(): ProtectedArray
    {
        return $this->post;
    }

    public function getFiles(): ProtectedArray
    {
        return $this->files;
    }

    public function getCookie(): ProtectedArray
    {
        return $this->cookie;
    }

    public function getSession(): ProtectedArray
    {
        return $this->session;
    }

    public function getRequest(): ProtectedArray
    {
        return $this->request;
    }

    public function getEnv(): ProtectedArray
    {
        return $this->env;
    }
}
