<?php

/**
 * Enthält alle Übersetzungsstrings für verschiedene Aktivitätsprotokoll-
 * Ereignisse. Diese sollten mit dem Wert vor dem Doppelpunkt (:) 
 * im Ereignisnamen als Schlüssel gespeichert werden. Falls kein Doppelpunkt 
 * vorhanden ist, sollten sie auf der obersten Ebene stehen.
 */
return [
    'auth' => [
        'fail' => 'Fehlgeschlagene Anmeldung',
        'success' => 'Erfolgreich angemeldet',
        'password-reset' => 'Passwort zurückgesetzt',
        'reset-password' => 'Passwort-Zurücksetzung angefordert',
        'checkpoint' => 'Zwei-Faktor-Authentifizierung erforderlich',
        'recovery-token' => 'Zwei-Faktor-Wiederherstellungstoken verwendet',
        'token' => 'Zwei-Faktor-Herausforderung gelöst',
        'ip-blocked' => 'Anfrage von nicht gelisteter IP-Adresse für :identifier blockiert',
        'sftp' => [
            'fail' => 'Fehlgeschlagene SFTP-Anmeldung',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-Mail-Adresse geändert von :old zu :new',
            'password-changed' => 'Passwort geändert',
        ],
        'api-key' => [
            'create' => 'Neuen API-Schlüssel erstellt: :identifier',
            'delete' => 'API-Schlüssel gelöscht: :identifier',
        ],
        'ssh-key' => [
            'create' => 'SSH-Schlüssel :fingerprint zum Konto hinzugefügt',
            'delete' => 'SSH-Schlüssel :fingerprint aus dem Konto entfernt',
        ],
        'two-factor' => [
            'create' => 'Zwei-Faktor-Authentifizierung aktiviert',
            'delete' => 'Zwei-Faktor-Authentifizierung deaktiviert',
        ],
    ],
    'server' => [
        'reinstall' => 'Server neu installiert',
        'console' => [
            'command' => 'Befehl ":command" auf dem Server ausgeführt',
        ],
        'power' => [
            'start' => 'Server gestartet',
            'stop' => 'Server gestoppt',
            'restart' => 'Server neu gestartet',
            'kill' => 'Serverprozess beendet',
        ],
        'backup' => [
            'download' => 'Backup :name heruntergeladen',
            'delete' => 'Backup :name gelöscht',
            'restore' => 'Backup :name wiederhergestellt (gelöschte Dateien: :truncate)',
            'restore-complete' => 'Wiederherstellung von Backup :name abgeschlossen',
            'restore-failed' => 'Wiederherstellung von Backup :name fehlgeschlagen',
            'start' => 'Neues Backup :name gestartet',
            'complete' => 'Backup :name als abgeschlossen markiert',
            'fail' => 'Backup :name als fehlgeschlagen markiert',
            'lock' => 'Backup :name gesperrt',
            'unlock' => 'Backup :name entsperrt',
        ],
        'database' => [
            'create' => 'Neue Datenbank :name erstellt',
            'rotate-password' => 'Passwort für Datenbank :name geändert',
            'delete' => 'Datenbank :name gelöscht',
        ],
        'file' => [
            'compress_one' => ':directory:file komprimiert',
            'compress_other' => ':count Dateien in :directory komprimiert',
            'read' => 'Inhalt von :file angezeigt',
            'copy' => 'Kopie von :file erstellt',
            'create-directory' => 'Verzeichnis :directory:name erstellt',
            'decompress' => ':files in :directory entpackt',
            'delete_one' => ':directory:files.0 gelöscht',
            'delete_other' => ':count Dateien in :directory gelöscht',
            'download' => ':file heruntergeladen',
            'pull' => 'Remote-Datei von :url nach :directory heruntergeladen',
            'rename_one' => ':directory:files.0 von :directory:files.0.from zu :directory:files.0.to umbenannt',
            'rename_other' => ':count Dateien in :directory umbenannt',
            'write' => 'Neuer Inhalt in :file geschrieben',
            'upload' => 'Datei-Upload gestartet',
            'uploaded' => ':directory:file hochgeladen',
        ],
        'sftp' => [
            'denied' => 'SFTP-Zugriff aufgrund fehlender Berechtigungen blockiert',
            'create_one' => ':files.0 erstellt',
            'create_other' => ':count neue Dateien erstellt',
            'write_one' => 'Inhalt von :files.0 geändert',
            'write_other' => 'Inhalt von :count Dateien geändert',
            'delete_one' => ':files.0 gelöscht',
            'delete_other' => ':count Dateien gelöscht',
            'create-directory_one' => 'Verzeichnis :files.0 erstellt',
            'create-directory_other' => ':count Verzeichnisse erstellt',
            'rename_one' => ':files.0 von :files.0.from zu :files.0.to umbenannt',
            'rename_other' => ':count Dateien umbenannt oder verschoben',
        ],
        'allocation' => [
            'create' => ':allocation zum Server hinzugefügt',
            'notes' => 'Notizen für :allocation von ":old" zu ":new" geändert',
            'primary' => ':allocation als primäre Serverzuweisung gesetzt',
            'delete' => 'Zuweisung :allocation gelöscht',
        ],
        'schedule' => [
            'create' => 'Zeitplan :name erstellt',
            'update' => 'Zeitplan :name aktualisiert',
            'execute' => 'Zeitplan :name manuell ausgeführt',
            'delete' => 'Zeitplan :name gelöscht',
        ],
        'task' => [
            'create' => 'Neue ":action"-Aufgabe für den Zeitplan :name erstellt',
            'update' => '":action"-Aufgabe für den Zeitplan :name aktualisiert',
            'delete' => 'Aufgabe für den Zeitplan :name gelöscht',
        ],
        'settings' => [
            'rename' => 'Server von :old zu :new umbenannt',
            'description' => 'Serverbeschreibung von :old zu :new geändert',
        ],
        'startup' => [
            'edit' => 'Variable :variable von ":old" zu ":new" geändert',
            'image' => 'Docker-Image für den Server von :old zu :new aktualisiert',
        ],
        'subuser' => [
            'create' => ':email als Unterbenutzer hinzugefügt',
            'update' => 'Unterbenutzerrechte für :email aktualisiert',
            'delete' => ':email als Unterbenutzer entfernt',
        ],
    ],
];
