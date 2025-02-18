<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Der angegebene FQDN oder die IP-Adresse lässt sich nicht in eine gültige IP-Adresse auflösen.',
        'fqdn_required_for_ssl' => 'Ein vollständig qualifizierter Domainname, der auf eine öffentliche IP-Adresse verweist, ist erforderlich, um SSL für diesen Node zu verwenden.',
    ],
    'notices' => [
        'allocations_added' => 'Zuweisungen wurden erfolgreich zu diesem Node hinzugefügt.',
        'node_deleted' => 'Der Node wurde erfolgreich aus dem Panel entfernt.',
        'location_required' => 'Sie müssen mindestens einen Standort konfiguriert haben, bevor Sie einen Node zu diesem Panel hinzufügen können.',
        'node_created' => 'Neuer Node wurde erfolgreich erstellt. Sie können den Daemon auf dieser Maschine automatisch konfigurieren, indem Sie den Reiter „Konfiguration“ aufrufen. <strong>Bevor Sie Server hinzufügen können, müssen Sie mindestens eine IP-Adresse und einen Port zuweisen.</strong>',
        'node_updated' => 'Node-Informationen wurden aktualisiert. Falls Daemon-Einstellungen geändert wurden, müssen Sie ihn neu starten, damit die Änderungen wirksam werden.',
        'unallocated_deleted' => 'Alle nicht zugewiesenen Ports für <code>:ip</code> wurden gelöscht.',
    ],
];
