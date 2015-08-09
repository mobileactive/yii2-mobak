Yii2 компонент для работы с HTTP XML API Mobile Active
======================================================

Установка
---------

Для установки компонента используйте  [composer](http://getcomposer.org/download/).

Запустите в терминале

```
php composer.phar require --prefer-dist mobileactive/yii2-mobak "1.*"
```

или добавьте

```json
"mobileactive/yii2-mobak": "1.*"
```

в ваш файл composer.json.

Конфигурация
------------

В файл config.php вашего Yii2 проекта добавьте:

```php
    'components' => [

        .........

        'sms' => [
            'class' => mobileactive\yii2\Base,
            'login' => 'ВАШ_ЛОГИН',
            'password' => 'ВАШ_ПАРОЛЬ'
        ],

        .........

    ];
```

Использование
-----

```php

$sms = Yii::$app->sms->getSender();

// Отправка СМС-сообщения
$result = $sms->send([
         'message' => "Your message text",
         'sender' => "Info",
         'phone' => '79194839xxx'
     ]);

// Получить результат в виде массива
$result->toArray();

......

```

License
-------

MIT
