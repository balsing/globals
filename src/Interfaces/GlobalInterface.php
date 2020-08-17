<?php

namespace Globals\Interfaces;

use Globals\Variables\ProtectedArray;

interface GlobalInterface
{
    public function getGlobals(): ProtectedArray;
    public function getServer(): ProtectedArray;
    public function getGet(): ProtectedArray;
    public function getPost(): ProtectedArray;
    public function getFiles(): ProtectedArray;
    public function getCookie(): ProtectedArray;
    public function getSession(): ProtectedArray;
    public function getRequest(): ProtectedArray;
    public function getEnv(): ProtectedArray;
}
