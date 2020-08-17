<?php

use Globals\Globals;

$globals = new Globals();

$getArray = $globals->getGet()->getAll();

$login = $globals->getPost()->get('login');
