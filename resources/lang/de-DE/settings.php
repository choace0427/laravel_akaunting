<?php

return [

    'company' => [
        'name'              => 'Name',
        'email'             => 'E-Mail',
        'phone'             => 'Telefon',
        'address'           => 'Adresse',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => 'Lokalisation',
        'financial_start'   => 'Beginn des Finanzjahrs',
        'timezone'          => 'Zeitzone',
        'date' => [
            'format'        => 'Datumsformat',
            'separator'     => 'Datumstrennzeichen',
            'dash'          => 'Bindestrich (-)',
            'dot'           => 'Punkt (.)',
            'comma'         => 'Komma (,)',
            'slash'         => 'Schrägstrich (/)',
            'space'         => 'Leerzeichen ( )',
        ],
        'percent' => [
            'title'         => 'Position des Prozent (%)',
            'before'        => 'Vor der Zahl',
            'after'         => 'Nach der Zahl',
        ],
    ],
    'invoice' => [
        'tab'               => 'Rechnung',
        'prefix'            => 'Rechnungsprefix',
        'digit'             => 'Nachkommastellen',
        'next'              => 'Nächste Nummer',
        'logo'              => 'Logo',
        'custom'            => 'Benutzerdefiniert',
        'item_name'         => 'Artikelbezeichnung',
        'item'              => 'Artikel',
        'product'           => 'Produkte',
        'service'           => 'Dienste',
        'price_name'        => 'Preisbezeichnung',
        'price'             => 'Preis',
        'rate'              => 'Satz',
        'quantity_name'     => 'Mengenbezeichnung',
        'quantity'          => 'Menge',
    ],
    'default' => [
        'tab'               => 'Standardeinstellungen',
        'account'           => 'Standardkonto',
        'currency'          => 'Standardwährung',
        'tax'               => 'Standard-Steuersatz',
        'payment'           => 'Standard-Zahlungsmethode',
        'language'          => 'Standardsprache',
    ],
    'email' => [
        'protocol'          => 'Protokoll',
        'php'               => 'PHP-Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP-Server',
            'port'          => 'SMTP-Port',
            'username'      => 'SMTP-Benutzername',
            'password'      => 'SMTP-Passwort',
            'encryption'    => 'SMTP-Sicherheit',
            'none'          => 'Keine',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail Pfad',
        'log'               => 'E-Mails protokollieren',
    ],
    'scheduling' => [
        'tab'               => 'Zeitpläne',
        'send_invoice'      => 'Erinnerung für Kundenrechnung senden',
        'invoice_days'      => 'Senden nach Fälligkeit (Tage)',
        'send_bill'         => 'Erinnerung für Ausgabenrechnung senden',
        'bill_days'         => 'Senden vor Fälligkeit (Tage)',
        'cron_command'      => 'Cron-Befehl',
        'schedule_time'     => 'Ausführungszeit (volle Stunde)',
        'send_item_reminder'=> 'Erinnerung für Artikel senden',
        'item_stocks'       => 'Senden wenn Artikel verfügbar',
    ],
    'appearance' => [
        'tab'               => 'Darstellung',
        'theme'             => 'Theme',
        'light'             => 'Light',
        'dark'              => 'Dark',
        'list_limit'        => 'Datensätze pro Seite',
        'use_gravatar'      => 'Gravatar verwenden',
    ],
    'system' => [
        'tab'               => 'System',
        'session' => [
            'lifetime'      => 'Sitzungsdauer (Minuten)',
            'handler'       => 'Session-Verwaltung',
            'file'          => 'Datei',
            'database'      => 'Datenbank',
        ],
        'file_size'         => 'Max. Dateigröße (MB)',
        'file_types'        => 'Erlaubte Dateitypen',
    ],

];
