Globals
=======

**Q: Что это?**

A: Это небольшая и простая библиотека, основная цель которой - фиксировать состояние глобальных переменных.

**Q: Зачем?**

A: Состояние глобальных переменных может изменяться во время выполнения программы. 
Пользователь может изменить или очистить переменные, и это может привести к неожиданным ошибкам, поэтому мы сохраняем их значения на момент инициализации и запрещаем изменять, добавлять и удалять что-либо.

\* Данное верно при использовании одного инстанта. 
Между нами, обращаясь к суперглобальным переменным, вы по прежнему можете производить какие угодно манипуляции.
Поэтому важно договориться и использовать только один экземпляр.

Usage:
----

Как объект:
```php
<?php

use Globals\Globals;

$globals = new Globals();

$getArray = $globals->getGet()->getAll();

$login = $globals->getPost()->get('login');
```

Как синглтон:
```php
<?php

use Globals\GlobalsSingletone;

$globals = GlobalsSingletone::getInstance();

$getArray = $globals->getGet()->getAll();

$login = GlobalsSingletone::getInstance()->getPost()->get('login');
```