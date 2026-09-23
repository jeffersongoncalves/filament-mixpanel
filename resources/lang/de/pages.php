<?php

return [
    'navigation_group' => 'Einstellungen',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Mixpanel Analytics-Einstellungen',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Projektkonfiguration',
            'description' => 'Konfigurieren Sie die Verbindung zu Ihrem Mixpanel-Projekt.',
        ],
        'tracking_debug' => [
            'heading' => 'Tracking & Debugging',
            'description' => 'Steuern Sie das Tracking-Verhalten und die Debug-Protokollierung.',
        ],
        'storage_cookies' => [
            'heading' => 'Speicher & Cookies',
            'description' => 'Konfigurieren Sie Datenpersistenz und Cookie-Einstellungen.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Datenschutz & Geolokalisierung',
            'description' => 'Steuern Sie Datenschutzeinstellungen und Geolokalisierung.',
        ],
        'advanced_features' => [
            'heading' => 'Erweiterte Funktionen',
            'description' => 'Konfigurieren Sie Sitzungsaufzeichnung und Heatmap-Erfassung.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Projekt-Token',
            'helper' => 'Ihr Mixpanel-Projekt-Token (erforderlich für das Tracking).',
        ],
        'api_host' => [
            'label' => 'API-Host',
            'helper' => 'Benutzerdefinierter API-Endpunkt für Datenresidenz (z. B. https://api-eu.mixpanel.com) oder Proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'Benutzerdefinierte Bibliotheks-URL',
            'helper' => 'Benutzerdefinierte URL für die Mixpanel-JavaScript-Bibliothek (für Proxy-Setups).',
        ],
        'debug' => [
            'label' => 'Debug-Modus',
            'helper' => 'Debug-Protokollierung in der Browserkonsole aktivieren.',
        ],
        'autocapture' => [
            'label' => 'Autocapture',
            'helper' => 'Klicks, Eingaben, Seitenaufrufe und andere Interaktionen automatisch erfassen.',
        ],
        'track_pageview' => [
            'label' => 'Seitenaufrufe erfassen',
            'helper' => 'Wie Seitenaufrufe erfasst werden sollen.',
            'options' => [
                'true' => 'Aktiviert',
                'false' => 'Deaktiviert',
                'full-url' => 'Vollständige URL',
                'url-with-path-and-query-string' => 'URL mit Pfad und Query-String',
                'url-with-path' => 'URL mit Pfad',
            ],
        ],
        'persistence' => [
            'label' => 'Persistenz',
            'helper' => 'Speichermethode für Mixpanel-Daten.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Cookie-Ablauf (Tage)',
            'helper' => 'Anzahl der Tage, bis das Mixpanel-Cookie abläuft.',
        ],
        'secure_cookie' => [
            'label' => 'Sicheres Cookie',
            'helper' => 'Cookies nur über HTTPS übertragen.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Subdomain-übergreifendes Cookie',
            'helper' => 'Cookies über Subdomains hinweg beibehalten.',
        ],
        'ip' => [
            'label' => 'IP-Geolokalisierung',
            'helper' => 'Die IP-Adresse des Benutzers für Geolokalisierungsdaten verwenden.',
        ],
        'property_blacklist' => [
            'label' => 'Eigenschafts-Sperrliste',
            'helper' => 'Kommagetrennte Liste von Eigenschaften, die vom Tracking ausgeschlossen werden.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Standardmäßig deaktiviert',
            'helper' => 'Tracking standardmäßig deaktivieren (DSGVO-Konformität). Benutzer müssen ausdrücklich zustimmen.',
        ],
        'stop_utm_persistence' => [
            'label' => 'UTM-Persistenz stoppen',
            'helper' => 'Automatische Speicherung von UTM-Parametern über Sitzungen hinweg deaktivieren.',
        ],
        'record_sessions_percent' => [
            'label' => 'Sitzungsaufzeichnung (%)',
            'helper' => 'Prozentsatz der aufzuzeichnenden Sitzungen (0-100). Auf 0 setzen zum Deaktivieren.',
        ],
        'record_heatmap_data' => [
            'label' => 'Heatmap-Daten aufzeichnen',
            'helper' => 'Heatmap-Datenerfassung für Klick- und Scroll-Tracking aktivieren.',
        ],
    ],
];
