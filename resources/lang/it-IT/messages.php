<?php

return [

    'success' => [
        'added'             => ':type aggiunto!',
        'updated'           => ':type aggiornato!',
        'deleted'           => ':type eliminato!',
        'duplicated'        => ':type duplicato!',
        'imported'          => ':type importato!',
        'enabled'           => ':type enabled!',
        'disabled'          => ':type disabled!',
    ],
    'error' => [
        'over_payment'      => 'Errore: Pagamento non aggiunto! L\'importo supera il totale.',
        'not_user_company'  => 'Errore: Non hai i permessi per gestire questa azienda!',
        'customer'          => 'Errore: Utente non creato! :name usa già questo indirizzo email.',
        'no_file'           => 'Errore: Nessun file selezionato!',
        'last_category'     => 'Error: Can not delete the last :type category!',
        'invalid_token'     => 'Error: The token entered is invalid!',
        'import_column'     => 'Error: :message Sheet name: :sheet. Line number: :line.',
        'import_sheet'      => 'Error: Sheet name is not valid. Please, check the sample file.',
    ],
    'warning' => [
        'deleted'           => 'Attenzione: Non è consentito eliminare <b>:name</b> perché ha :text collegato.',
        'disabled'          => 'Attenzione: Non è consentito disabilitare <b>:name</b> perché ha :text collegato.',
    ],

];
