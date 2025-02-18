<?php

return [
    'email' => [
        'title' => 'Aktualisieren Sie Ihre E-Mail',
        'updated' => 'Ihre E-Mail-Adresse wurde aktualisiert.',
    ],
    'password' => [
        'title' => 'Ändern Sie Ihr Passwort',
        'requirements' => 'Ihr neues Passwort muss mindestens 8 Zeichen lang sein.',
        'updated' => 'Ihr Passwort wurde aktualisiert.',
    ],
    'two_factor' => [
        'button' => 'Zwei-Faktor-Authentifizierung konfigurieren',
        'disabled' => 'Die Zwei-Faktor-Authentifizierung wurde für Ihr Konto deaktiviert. Sie werden beim Anmelden nicht mehr zur Eingabe eines Tokens aufgefordert.',
        'enabled' => 'Die Zwei-Faktor-Authentifizierung wurde für Ihr Konto aktiviert! Ab sofort müssen Sie beim Anmelden den von Ihrem Gerät generierten Code eingeben.',
        'invalid' => 'Das eingegebene Token ist ungültig.',
        'setup' => [
            'title' => 'Zwei-Faktor-Authentifizierung einrichten',
            'help' => 'Können Sie den Code nicht scannen? Geben Sie den folgenden Code in Ihre Anwendung ein:',
            'field' => 'Token eingeben',
        ],
        'disable' => [
            'title' => 'Zwei-Faktor-Authentifizierung deaktivieren',
            'field' => 'Token eingeben',
        ],
    ],
];
