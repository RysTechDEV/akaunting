<?php

return [

    'company' => [
        'name'              => 'Име',
        'email'             => 'Е-пошта',
        'phone'             => 'Телефон',
        'address'           => 'Адреса',
        'logo'              => 'Лого',
    ],
    'localisation' => [
        'tab'               => 'Локализација',
        'date' => [
            'format'        => 'Формат на датум',
            'separator'     => 'Текст разделник',
            'dash'          => 'Црта(-)',
            'dot'           => 'Точка (.)',
            'comma'         => 'Запирка (,)',
            'slash'         => 'Коса црта (/)',
            'space'         => 'Празно место ( )',
        ],
        'timezone'          => 'Временска зона',
        'percent' => [
            'title'         => 'Процент (%) Позиција',
            'before'        => 'Пред број',
            'after'         => 'После број',
        ],
    ],
    'invoice' => [
        'tab'               => 'Фактура',
        'prefix'            => 'Префикс на број',
        'digit'             => 'Цифрен број',
        'next'              => 'Следен број',
        'logo'              => 'Лого',
    ],
    'default' => [
        'tab'               => 'Стандардно',
        'account'           => 'Основна сметка',
        'currency'          => 'Основна валута',
        'tax'               => 'Основна стапка на данок',
        'payment'           => 'Основен начин на плаќање',
        'language'          => 'Поставен јазик за сајт',
    ],
    'email' => [
        'protocol'          => 'Протокол',
        'php'               => 'PHP Маил',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP Host',
            'port'          => 'SMTP Port',
            'username'      => 'SMTP корисничко име',
            'password'      => 'SMTP лозинка',
            'encryption'    => 'SMTP безбедност',
            'none'          => 'Ништо',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Патека до праќач на писма',
        'log'               => 'Лог од е-маил пораки',
    ],
    'scheduling' => [
        'tab'               => 'Распоред',
        'send_invoice'      => 'Испрати потсетник за пораки',
        'invoice_days'      => 'Испрати после денови на доспевање',
        'send_bill'         => 'Испрати потсетник за сметки',
        'bill_days'         => 'Испрати пред денови на доспевање',
        'cron_command'      => 'Cron Command',
        'schedule_time'     => 'Како да се изврши',
    ],
    'appearance' => [
        'tab'               => 'Изглед',
        'theme'             => 'Тема',
        'light'             => 'Светло',
        'dark'              => 'Темно',
        'list_limit'        => 'Записи по страна',
        'use_gravatar'      => 'Користи Меме',
    ],
    'system' => [
        'tab'               => 'Систем',
        'session' => [
            'lifetime'      => 'Време на активна сесија (Минути)',
            'handler'       => 'Ракувач со сесија',
            'file'          => 'Фајл',
            'database'      => 'Датабаза',
        ],
        'file_size'         => 'Максимална големина на фајл (MB)',
        'file_types'        => 'Дозволени типови на фајлови',
    ],

];
