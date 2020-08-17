<?php

use Globals\GlobalsSingletone;

$globals = GlobalsSingletone::getInstance();

$getArray = $globals->getGet()->getAll();

$login = GlobalsSingletone::getInstance()->getPost()->get('login');
