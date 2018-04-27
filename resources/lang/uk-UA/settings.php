<?php

return [

    'company' => [
        'name'              => 'Ім’я',
        'email'             => 'Електронна пошта',
        'phone'             => 'Телефон',
        'address'           => 'Адреса',
        'logo'              => 'Логотип',
    ],
    'localisation' => [
        'tab'               => 'Локалізація',
        'date' => [
            'format'        => 'Формат дати',
            'separator'     => 'Роздільник дати',
            'dash'          => 'Тире (–)',
            'dot'           => 'Крапка (.)',
            'comma'         => 'Кома ()',
            'slash'         => 'Слеш (/)',
            'space'         => '(Пробіл)',
        ],
        'timezone'          => 'Часовий пояс',
    ],
    'invoice' => [
        'tab'               => 'Рахунок',
        'prefix'            => 'Префікс номеру',
        'digit'             => 'Кількість цифр',
        'next'              => 'Наступний номер',
        'logo'              => 'Логотип',
    ],
    'default' => [
        'tab'               => 'За замовчуванням',
        'account'           => 'Обліковий запис за замовчуванням',
        'currency'          => 'Валюта за замовчуванням',
        'tax'               => 'Ставка податку за замовчуванням',
        'payment'           => 'Методу оплати за замовчуванням',
        'language'          => 'Мова за замовчуванням',
    ],
    'email' => [
        'protocol'          => 'Протокол',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP хост',
            'port'          => 'SMTP порт',
            'username'      => 'SMTP ім\'я користувача',
            'password'      => 'Пароль до SMTP',
            'encryption'    => 'SMTP безпеки',
            'none'          => 'Жодний',
        ],
        'sendmail'          => 'Надіслати пошту',
        'sendmail_path'     => 'Шлях надсилання пошти',
        'log'               => 'Журнал Електронної пошти ',
    ],
    'scheduling' => [
        'tab'               => 'Планувальник',
        'send_invoice'      => 'Надсилати нагадування рахунку',
        'invoice_days'      => 'Надсилання після відповідних днів',
        'send_bill'         => 'Відправити Нагадування',
        'bill_days'         => 'Надсилання після відповідних днів',
        'cron_command'      => 'Cron команда',
        'schedule_time'     => 'Години, щоб запустити',
    ],
    'appearance' => [
        'tab'               => 'Вигляд',
        'theme'             => 'Тема',
        'light'             => 'Світлий',
        'dark'              => 'Темний',
        'list_limit'        => 'Записів на сторінці',
        'use_gravatar'      => 'Використання Gravatar',
    ],
    'system' => [
        'tab'               => 'Система',
        'session' => [
            'lifetime'      => 'Тривалість сеансу (хв)',
            'handler'       => 'Менеджер сесій',
            'file'          => 'Файл',
            'database'      => 'База Даних',
        ],
        'file_size'         => 'Максимальний об’єм файлу (Мб)',
        'file_types'        => 'Допускається тип файлів',
    ],

];
