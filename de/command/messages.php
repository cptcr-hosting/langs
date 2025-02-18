<?php

return [
    'location' => [
        'no_location_found' => 'Es konnte kein Eintrag mit dem angegebenen Kurzcode gefunden werden.',
        'ask_short' => 'Standort-Kurzcode',
        'ask_long' => 'Standortbeschreibung',
        'created' => 'Ein neuer Standort (:name) wurde erfolgreich mit der ID :id erstellt.',
        'deleted' => 'Der angeforderte Standort wurde erfolgreich gelöscht.',
    ],
    'user' => [
        'search_users' => 'Geben Sie einen Benutzernamen, eine Benutzer-ID oder eine E-Mail-Adresse ein',
        'select_search_user' => 'ID des zu löschenden Benutzers (Geben Sie \'0\' ein, um die Suche erneut durchzuführen)',
        'deleted' => 'Benutzer wurde erfolgreich aus dem Panel gelöscht.',
        'confirm_delete' => 'Sind Sie sicher, dass Sie diesen Benutzer aus dem Panel löschen möchten?',
        'no_users_found' => 'Es wurden keine Benutzer für den angegebenen Suchbegriff gefunden.',
        'multiple_found' => 'Es wurden mehrere Konten für den angegebenen Benutzer gefunden. Aufgrund des --no-interaction-Flags kann kein Benutzer gelöscht werden.',
        'ask_admin' => 'Ist dieser Benutzer ein Administrator?',
        'ask_email' => 'E-Mail-Adresse',
        'ask_username' => 'Benutzername',
        'ask_name_first' => 'Vorname',
        'ask_name_last' => 'Nachname',
        'ask_password' => 'Passwort',
        'ask_password_tip' => 'Falls Sie ein Konto mit einem zufälligen Passwort erstellen möchten, das dem Benutzer per E-Mail gesendet wird, führen Sie diesen Befehl erneut aus (CTRL+C) und geben Sie die Option `--no-password` an.',
        'ask_password_help' => 'Passwörter müssen mindestens 8 Zeichen lang sein und mindestens einen Großbuchstaben sowie eine Zahl enthalten.',
        '2fa_help_text' => [
            'Dieser Befehl deaktiviert die Zwei-Faktor-Authentifizierung für das Benutzerkonto, falls sie aktiviert ist. Dies sollte nur als Wiederherstellungsmaßnahme verwendet werden, falls der Benutzer keinen Zugriff mehr auf sein Konto hat.',
            'Falls dies nicht beabsichtigt war, drücken Sie CTRL+C, um diesen Vorgang abzubrechen.',
        ],
        '2fa_disabled' => 'Die Zwei-Faktor-Authentifizierung wurde für :email deaktiviert.',
    ],
    'schedule' => [
        'output_line' => 'Job für die erste Aufgabe in `:schedule` (:hash) wird ausgeführt.',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Lösche Sicherungsdatei des Dienstes: :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Der Wiederaufbau von ":name" (#:id) auf Node ":node" ist mit folgendem Fehler fehlgeschlagen: :message',
        'reinstall' => [
            'failed' => 'Die Neuinstallation von ":name" (#:id) auf Node ":node" ist mit folgendem Fehler fehlgeschlagen: :message',
            'confirm' => 'Sie sind dabei, eine Gruppe von Servern neu zu installieren. Möchten Sie fortfahren?',
        ],
        'power' => [
            'confirm' => 'Sie sind dabei, eine :action für :count Server auszuführen. Möchten Sie fortfahren?',
            'action_failed' => 'Die Stromaktionsanforderung für ":name" (#:id) auf Node ":node" ist mit folgendem Fehler fehlgeschlagen: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP-Host (z. B. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP-Port',
            'ask_smtp_username' => 'SMTP-Benutzername',
            'ask_smtp_password' => 'SMTP-Passwort',
            'ask_mailgun_domain' => 'Mailgun-Domain',
            'ask_mailgun_endpoint' => 'Mailgun-Endpunkt',
            'ask_mailgun_secret' => 'Mailgun-Schlüssel',
            'ask_mandrill_secret' => 'Mandrill-Schlüssel',
            'ask_postmark_username' => 'Postmark-API-Schlüssel',
            'ask_driver' => 'Welcher Treiber soll zum Versenden von E-Mails verwendet werden?',
            'ask_mail_from' => 'E-Mail-Adresse, von der aus E-Mails gesendet werden sollen',
            'ask_mail_name' => 'Name, der als Absender für E-Mails angezeigt werden soll',
            'ask_encryption' => 'Zu verwendende Verschlüsselungsmethode',
        ],
    ],
];
