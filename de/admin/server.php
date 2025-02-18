<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Sie versuchen, die Standardzuweisung für diesen Server zu löschen, aber es gibt keine alternative Zuweisung als Ersatz.',
        'marked_as_failed' => 'Dieser Server wurde als fehlgeschlagen markiert. Der aktuelle Status kann in diesem Zustand nicht umgeschaltet werden.',
        'bad_variable' => 'Es gab einen Validierungsfehler mit der Variable :name.',
        'daemon_exception' => 'Beim Versuch, mit dem Daemon zu kommunizieren, ist eine Ausnahme aufgetreten, die zu einem HTTP/:code-Antwortcode führte. Diese Ausnahme wurde protokolliert. (Anfrage-ID: :request_id)',
        'default_allocation_not_found' => 'Die angeforderte Standardzuweisung wurde in den Zuweisungen dieses Servers nicht gefunden.',
    ],
    'alerts' => [
        'startup_changed' => 'Die Startkonfiguration für diesen Server wurde aktualisiert. Falls das Nest oder das Ei dieses Servers geändert wurde, wird nun eine Neuinstallation durchgeführt.',
        'server_deleted' => 'Der Server wurde erfolgreich aus dem System gelöscht.',
        'server_created' => 'Der Server wurde erfolgreich im Panel erstellt. Bitte geben Sie dem Daemon ein paar Minuten Zeit, um die Installation dieses Servers abzuschließen.',
        'build_updated' => 'Die Build-Details für diesen Server wurden aktualisiert. Einige Änderungen erfordern möglicherweise einen Neustart, um wirksam zu werden.',
        'suspension_toggled' => 'Der Sperrstatus des Servers wurde auf :status geändert.',
        'rebuild_on_boot' => 'Dieser Server wurde als erforderlich für einen Docker-Container-Neuaufbau markiert. Dies wird beim nächsten Start des Servers durchgeführt.',
        'install_toggled' => 'Der Installationsstatus für diesen Server wurde umgeschaltet.',
        'server_reinstalled' => 'Dieser Server wurde für eine sofort beginnende Neuinstallation in die Warteschlange gestellt.',
        'details_updated' => 'Die Serverdetails wurden erfolgreich aktualisiert.',
        'docker_image_updated' => 'Das Standard-Docker-Image für diesen Server wurde erfolgreich geändert. Ein Neustart ist erforderlich, um diese Änderung anzuwenden.',
        'node_required' => 'Sie müssen mindestens einen Node konfiguriert haben, bevor Sie einen Server zu diesem Panel hinzufügen können.',
        'transfer_nodes_required' => 'Sie müssen mindestens zwei Nodes konfiguriert haben, bevor Sie Server übertragen können.',
        'transfer_started' => 'Die Serverübertragung wurde gestartet.',
        'transfer_not_viable' => 'Der ausgewählte Node verfügt nicht über den erforderlichen Speicherplatz oder Arbeitsspeicher, um diesen Server aufzunehmen.',
    ],
];
