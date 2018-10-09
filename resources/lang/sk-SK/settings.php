<?php

return [

    'company' => [
        'name'              => 'Názov',
        'email'             => 'E-mail',
        'phone'             => 'Telefón',
        'address'           => 'Adresa',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => 'Lokalizácia',
        'date' => [
            'format'        => 'Formát dátumu',
            'separator'     => 'Separátor dátumu',
            'dash'          => 'Pomlčka (-)',
            'dot'           => 'Bodka (.)',
            'comma'         => 'Čiarka ()',
            'slash'         => 'Lomka (/)',
            'space'         => 'Medzera ( )',
        ],
        'timezone'          => 'Časové pásmo',
        'percent' => [
            'title'         => 'Percento (%) Pozícia',
            'before'        => 'Pred číslom',
            'after'         => 'Za číslom',
        ],
    ],
    'invoice' => [
        'tab'               => 'Faktúra',
        'prefix'            => 'Dľžka prefix-u',
        'digit'             => 'Počet číslic',
        'next'              => 'Ďalšie číslo',
        'logo'              => 'Logo',
    ],
    'default' => [
        'tab'               => 'Predvolené',
        'account'           => 'Predvolený účet',
        'currency'          => 'Predvolená mena',
        'tax'               => 'Predvolené sadzba dane',
        'payment'           => 'Predvolený spôsob platby',
        'language'          => 'Predvolený jazyk',
    ],
    'email' => [
        'protocol'          => 'Protokol',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP Host',
            'port'          => 'SMTP Port',
            'username'      => 'SMTP Username',
            'password'      => 'SMTP Password',
            'encryption'    => 'Zabezpečenia SMTP',
            'none'          => 'Žiadne',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail cesta',
        'log'               => 'Log e-mailov',
    ],
    'scheduling' => [
        'tab'               => 'Plánovanie',
        'send_invoice'      => 'Odoslať pripomenutie faktúry',
        'invoice_days'      => 'Poslať po dni splatnosti',
        'send_bill'         => 'Odoslať pripomenutie na platbu',
        'bill_days'         => 'Odoslať pred dňom splatnosti',
        'cron_command'      => 'Cron príkaz',
        'schedule_time'     => 'Hodinu pre štart',
    ],
    'appearance' => [
        'tab'               => 'Vzhľad',
        'theme'             => 'Téma',
        'light'             => 'Svetlá',
        'dark'              => 'Tmavá',
        'list_limit'        => 'Počet záznamov na stránku',
        'use_gravatar'      => 'Použite Gravatar',
    ],
    'system' => [
        'tab'               => 'Systém',
        'session' => [
            'lifetime'      => 'Doba platnosti sedenia (v minútach)',
            'handler'       => 'Správca sedenia',
            'file'          => 'Súbor',
            'database'      => 'Databáza',
        ],
        'file_size'         => 'Max veľkosť (MB)',
        'file_types'        => 'Povolené typy súborov',
    ],

];
