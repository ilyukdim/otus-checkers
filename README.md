# otus-checkers

## Проверка строк

- v1.0 - проверка круглых скобок

## Требования
- PHP 7.4

## Установка
```bash
$ composer require ilyukdim/otus-checkers
```

## Использование

```php
<?php
include "vendor/autoload.php";

$checkers = new \Ilyukdim\OtusCheckers\Checkers();

$checker = new \Ilyukdim\OtusCheckers\Types\Brackets();
$checkers->addChecker($checker);

$res = $checkers->check('((()))((())))');
var_dump($res);
```