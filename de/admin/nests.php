<?php

return [
    'notices' => [
        'created' => 'Ein neues Nest, :name, wurde erfolgreich erstellt.',
        'deleted' => 'Das angeforderte Nest wurde erfolgreich aus dem Panel gelöscht.',
        'updated' => 'Die Nestkonfigurationsoptionen wurden erfolgreich aktualisiert.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Dieses Ei und seine zugehörigen Variablen wurden erfolgreich importiert.',
            'updated_via_import' => 'Dieses Ei wurde mit der bereitgestellten Datei aktualisiert.',
            'deleted' => 'Das angeforderte Ei wurde erfolgreich aus dem Panel gelöscht.',
            'updated' => 'Die Ei-Konfiguration wurde erfolgreich aktualisiert.',
            'script_updated' => 'Das Installationsskript des Eis wurde aktualisiert und wird ausgeführt, wenn Server installiert werden.',
            'egg_created' => 'Ein neues Ei wurde erfolgreich gelegt. Sie müssen alle laufenden Daemons neu starten, um dieses neue Ei zu übernehmen.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Die Variable ":variable" wurde gelöscht und wird auf Servern nicht mehr verfügbar sein, sobald sie neu erstellt wurden.',
            'variable_updated' => 'Die Variable ":variable" wurde aktualisiert. Sie müssen alle Server, die diese Variable verwenden, neu erstellen, um die Änderungen zu übernehmen.',
            'variable_created' => 'Eine neue Variable wurde erfolgreich erstellt und diesem Ei zugewiesen.',
        ],
    ],
];
