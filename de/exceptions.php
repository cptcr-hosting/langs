<?php

return [
    'daemon_connection_failed' => 'Beim Versuch, mit dem Daemon zu kommunizieren, ist eine Ausnahme aufgetreten, die zu einem HTTP/:code-Antwortcode führte. Diese Ausnahme wurde protokolliert.',
    'node' => [
        'servers_attached' => 'Ein Node kann nur gelöscht werden, wenn keine Server mit ihm verknüpft sind.',
        'daemon_off_config_updated' => 'Die Daemon-Konfiguration <strong>wurde aktualisiert</strong>, jedoch ist ein Fehler aufgetreten, während versucht wurde, die Konfigurationsdatei auf dem Daemon automatisch zu aktualisieren. Sie müssen die Konfigurationsdatei (config.yml) manuell aktualisieren, damit die Änderungen wirksam werden.',
    ],
    'allocations' => [
        'server_using' => 'Diese Zuweisung ist derzeit einem Server zugeordnet. Eine Zuweisung kann nur gelöscht werden, wenn sie keinem Server zugeordnet ist.',
        'too_many_ports' => 'Das Hinzufügen von mehr als 1000 Ports in einem einzigen Bereich wird nicht unterstützt.',
        'invalid_mapping' => 'Die für :port angegebene Zuordnung war ungültig und konnte nicht verarbeitet werden.',
        'cidr_out_of_range' => 'Die CIDR-Notation erlaubt nur Masken zwischen /25 und /32.',
        'port_out_of_range' => 'Ports in einer Zuweisung müssen größer als 1024 und kleiner oder gleich 65535 sein.',
    ],
    'nest' => [
        'delete_has_servers' => 'Ein Nest mit aktiven Servern kann nicht aus dem Panel gelöscht werden.',
        'egg' => [
            'delete_has_servers' => 'Ein Ei mit aktiven Servern kann nicht aus dem Panel gelöscht werden.',
            'invalid_copy_id' => 'Das für das Kopieren eines Skripts ausgewählte Ei existiert entweder nicht oder kopiert selbst ein Skript.',
            'must_be_child' => 'Die "Einstellungen kopieren von"-Option für dieses Ei muss eine untergeordnete Option des ausgewählten Nests sein.',
            'has_children' => 'Dieses Ei ist das übergeordnete Element von einem oder mehreren anderen Eiern. Bitte löschen Sie diese Eier, bevor Sie dieses Ei löschen.',
        ],
        'variables' => [
            'env_not_unique' => 'Die Umgebungsvariable :name muss für dieses Ei eindeutig sein.',
            'reserved_name' => 'Die Umgebungsvariable :name ist geschützt und kann nicht zugewiesen werden.',
            'bad_validation_rule' => 'Die Validierungsregel ":rule" ist für diese Anwendung nicht gültig.',
        ],
        'importer' => [
            'json_error' => 'Beim Parsen der JSON-Datei ist ein Fehler aufgetreten: :error.',
            'file_error' => 'Die bereitgestellte JSON-Datei ist ungültig.',
            'invalid_json_provided' => 'Die bereitgestellte JSON-Datei hat ein nicht erkennbares Format.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Das Bearbeiten des eigenen Subuser-Kontos ist nicht erlaubt.',
        'user_is_owner' => 'Sie können den Serverbesitzer nicht als Subuser für diesen Server hinzufügen.',
        'subuser_exists' => 'Ein Benutzer mit dieser E-Mail-Adresse ist bereits als Subuser für diesen Server zugewiesen.',
    ],
    'databases' => [
        'delete_has_databases' => 'Ein Datenbank-Hostserver mit aktiven verknüpften Datenbanken kann nicht gelöscht werden.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Das maximale Intervall für eine verkettete Aufgabe beträgt 15 Minuten.',
    ],
    'locations' => [
        'has_nodes' => 'Ein Standort mit aktiven Nodes kann nicht gelöscht werden.',
    ],
    'users' => [
        'node_revocation_failed' => 'Fehler beim Widerrufen der Schlüssel auf <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Es wurden keine Nodes gefunden, die die für die automatische Bereitstellung festgelegten Anforderungen erfüllen.',
        'no_viable_allocations' => 'Es wurden keine Zuweisungen gefunden, die die Anforderungen für die automatische Bereitstellung erfüllen.',
    ],
    'api' => [
        'resource_not_found' => 'Die angeforderte Ressource existiert nicht auf diesem Server.',
    ],
];
