<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validierungs-Sprachzeilen
    |--------------------------------------------------------------------------
    |
    | Die folgenden Sprachzeilen enthalten die Standard-Fehlermeldungen, die
    | von der Validator-Klasse verwendet werden. Einige dieser Regeln haben
    | mehrere Versionen, z. B. die Größenregeln. Sie können diese
    | Nachrichten beliebig anpassen.
    |
    */

    'accepted' => 'Das Feld :attribute muss akzeptiert werden.',
    'active_url' => 'Das Feld :attribute ist keine gültige URL.',
    'after' => 'Das Feld :attribute muss ein Datum nach :date sein.',
    'after_or_equal' => 'Das Feld :attribute muss ein Datum nach oder gleich :date sein.',
    'alpha' => 'Das Feld :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Das Feld :attribute darf nur Buchstaben, Zahlen und Bindestriche enthalten.',
    'alpha_num' => 'Das Feld :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Das Feld :attribute muss ein Array sein.',
    'before' => 'Das Feld :attribute muss ein Datum vor :date sein.',
    'before_or_equal' => 'Das Feld :attribute muss ein Datum vor oder gleich :date sein.',
    'between' => [
        'numeric' => 'Das Feld :attribute muss zwischen :min und :max liegen.',
        'file' => 'Das Feld :attribute muss zwischen :min und :max Kilobyte groß sein.',
        'string' => 'Das Feld :attribute muss zwischen :min und :max Zeichen enthalten.',
        'array' => 'Das Feld :attribute muss zwischen :min und :max Elemente enthalten.',
    ],
    'boolean' => 'Das Feld :attribute muss wahr oder falsch sein.',
    'confirmed' => 'Die Bestätigung für :attribute stimmt nicht überein.',
    'date' => 'Das Feld :attribute ist kein gültiges Datum.',
    'date_format' => 'Das Feld :attribute entspricht nicht dem Format :format.',
    'different' => 'Das Feld :attribute und :other müssen unterschiedlich sein.',
    'digits' => 'Das Feld :attribute muss :digits Ziffern enthalten.',
    'digits_between' => 'Das Feld :attribute muss zwischen :min und :max Ziffern enthalten.',
    'dimensions' => 'Das Feld :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das Feld :attribute enthält einen doppelten Wert.',
    'email' => 'Das Feld :attribute muss eine gültige E-Mail-Adresse sein.',
    'exists' => 'Das ausgewählte :attribute ist ungültig.',
    'file' => 'Das Feld :attribute muss eine Datei sein.',
    'filled' => 'Das Feld :attribute ist erforderlich.',
    'image' => 'Das Feld :attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte :attribute ist ungültig.',
    'in_array' => 'Das Feld :attribute existiert nicht in :other.',
    'integer' => 'Das Feld :attribute muss eine ganze Zahl sein.',
    'ip' => 'Das Feld :attribute muss eine gültige IP-Adresse sein.',
    'json' => 'Das Feld :attribute muss eine gültige JSON-Zeichenfolge sein.',
    'max' => [
        'numeric' => 'Das Feld :attribute darf nicht größer als :max sein.',
        'file' => 'Das Feld :attribute darf nicht größer als :max Kilobyte sein.',
        'string' => 'Das Feld :attribute darf nicht mehr als :max Zeichen enthalten.',
        'array' => 'Das Feld :attribute darf nicht mehr als :max Elemente enthalten.',
    ],
    'mimes' => 'Das Feld :attribute muss eine Datei des Typs :values sein.',
    'mimetypes' => 'Das Feld :attribute muss eine Datei des Typs :values sein.',
    'min' => [
        'numeric' => 'Das Feld :attribute muss mindestens :min sein.',
        'file' => 'Das Feld :attribute muss mindestens :min Kilobyte groß sein.',
        'string' => 'Das Feld :attribute muss mindestens :min Zeichen enthalten.',
        'array' => 'Das Feld :attribute muss mindestens :min Elemente enthalten.',
    ],
    'not_in' => 'Das ausgewählte :attribute ist ungültig.',
    'numeric' => 'Das Feld :attribute muss eine Zahl sein.',
    'present' => 'Das Feld :attribute muss vorhanden sein.',
    'regex' => 'Das Format von :attribute ist ungültig.',
    'required' => 'Das Feld :attribute ist erforderlich.',
    'required_if' => 'Das Feld :attribute ist erforderlich, wenn :other :value ist.',
    'required_unless' => 'Das Feld :attribute ist erforderlich, es sei denn, :other befindet sich in :values.',
    'required_with' => 'Das Feld :attribute ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all' => 'Das Feld :attribute ist erforderlich, wenn :values vorhanden sind.',
    'required_without' => 'Das Feld :attribute ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das Feld :attribute ist erforderlich, wenn keiner der Werte :values vorhanden ist.',
    'same' => 'Das Feld :attribute und :other müssen übereinstimmen.',
    'size' => [
        'numeric' => 'Das Feld :attribute muss :size sein.',
        'file' => 'Das Feld :attribute muss :size Kilobyte groß sein.',
        'string' => 'Das Feld :attribute muss :size Zeichen enthalten.',
        'array' => 'Das Feld :attribute muss :size Elemente enthalten.',
    ],
    'string' => 'Das Feld :attribute muss eine Zeichenfolge sein.',
    'timezone' => 'Das Feld :attribute muss eine gültige Zeitzone sein.',
    'unique' => 'Das Feld :attribute wurde bereits vergeben.',
    'uploaded' => 'Das Hochladen von :attribute ist fehlgeschlagen.',
    'url' => 'Das Format von :attribute ist ungültig.',

    /*
    |--------------------------------------------------------------------------
    | Anpassbare Validierungsattribute
    |--------------------------------------------------------------------------
    |
    | Die folgenden Sprachzeilen werden verwendet, um Platzhalter für Attribute
    | durch etwas Lesefreundlicheres zu ersetzen, z. B. "E-Mail-Adresse" statt
    | "email". Dies hilft, die Nachrichten verständlicher zu machen.
    |
    */

    'attributes' => [],

    // Interne Validierungslogik für Pterodactyl
    'internal' => [
        'variable_value' => ':env Variable',
        'invalid_password' => 'Das eingegebene Passwort ist für dieses Konto ungültig.',
    ],
];
