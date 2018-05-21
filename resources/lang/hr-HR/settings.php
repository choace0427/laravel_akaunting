<?php

return [

    'company' => [
        'name'              => 'Naziv',
        'email'             => 'E-mail',
        'phone'             => 'Telefon',
        'address'           => 'Adresa',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => 'Lokalizacija',
        'date' => [
            'format'        => 'Format datuma',
            'separator'     => 'Separator datuma',
            'dash'          => 'Crtica (-)',
            'dot'           => 'Točka (.)',
            'comma'         => 'Zarez (,)',
            'slash'         => 'Kosa crta (/)',
            'space'         => 'Razmak ( )',
        ],
        'timezone'          => 'Vremenska zona',
        'percent' => [
            'title'         => 'Pozicija postotka (%)',
            'before'        => 'Ispred broja',
            'after'         => 'Nakon broja',
        ],
    ],
    'invoice' => [
        'tab'               => 'Faktura',
        'prefix'            => 'Prefiks proja',
        'digit'             => 'Broj znamenki',
        'next'              => 'Sljedeći broj',
        'logo'              => 'Logo',
    ],
    'default' => [
        'tab'               => 'Zadano',
        'account'           => 'Zadani račun',
        'currency'          => 'Zadana valuta',
        'tax'               => 'Zadana stopa poreza',
        'payment'           => 'Zadani način plaćanja',
        'language'          => 'Zadani jezik',
    ],
    'email' => [
        'protocol'          => 'Protokol',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP Host',
            'port'          => 'SMTP Port',
            'username'      => 'SMTP Korisničko Ime',
            'password'      => 'SMTP Lozinka',
            'encryption'    => 'SMTP sigurnost',
            'none'          => 'Ništa',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail putanja',
        'log'               => 'E-mail evidentiranje',
    ],
    'scheduling' => [
        'tab'               => 'Zakazivanje',
        'send_invoice'      => 'Slanje podsjetnika faktura',
        'invoice_days'      => 'Slanje prije datuma dospijeća',
        'send_bill'         => 'Slanje podsjetnika računa',
        'bill_days'         => 'Slanje prije datuma dospijeća',
        'cron_command'      => 'Cron naredba',
        'schedule_time'     => 'Vrijeme pokretanja',
    ],
    'appearance' => [
        'tab'               => 'Izgled',
        'theme'             => 'Tema',
        'light'             => 'Svjetlo',
        'dark'              => 'Tamno',
        'list_limit'        => 'Zapisa po stranici',
        'use_gravatar'      => 'Koristi Gravatar',
    ],
    'system' => [
        'tab'               => 'Sustav',
        'session' => [
            'lifetime'      => 'Životni vijek sesije (Minute)',
            'handler'       => 'Rukovatelj sesije',
            'file'          => 'Datoteka',
            'database'      => 'Baza podataka',
        ],
        'file_size'         => 'Max veličina datoteke (MB)',
        'file_types'        => 'Dopuštena vrsta datoteka',
    ],

];
