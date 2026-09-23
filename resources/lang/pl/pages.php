<?php

return [
    'navigation_group' => 'Ustawienia',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Ustawienia Mixpanel Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Konfiguracja projektu',
            'description' => 'Skonfiguruj połączenie z projektem Mixpanel.',
        ],
        'tracking_debug' => [
            'heading' => 'Śledzenie i debugowanie',
            'description' => 'Kontroluj zachowanie śledzenia i logowanie debugowania.',
        ],
        'storage_cookies' => [
            'heading' => 'Przechowywanie i pliki cookie',
            'description' => 'Skonfiguruj trwałość danych i ustawienia plików cookie.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Prywatność i geolokalizacja',
            'description' => 'Kontroluj ustawienia prywatności i śledzenie geolokalizacji.',
        ],
        'advanced_features' => [
            'heading' => 'Funkcje zaawansowane',
            'description' => 'Skonfiguruj nagrywanie sesji i zbieranie map cieplnych.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Token projektu',
            'helper' => 'Token projektu Mixpanel (wymagany do działania śledzenia).',
        ],
        'api_host' => [
            'label' => 'Host API',
            'helper' => 'Niestandardowy punkt końcowy API dla lokalizacji danych (np. https://api-eu.mixpanel.com) lub proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'Niestandardowy URL biblioteki',
            'helper' => 'Niestandardowy adres URL biblioteki JavaScript Mixpanel (dla konfiguracji z proxy).',
        ],
        'debug' => [
            'label' => 'Tryb debugowania',
            'helper' => 'Włącz logowanie debugowania w konsoli przeglądarki.',
        ],
        'autocapture' => [
            'label' => 'Automatyczne przechwytywanie',
            'helper' => 'Automatycznie przechwytuj kliknięcia, dane wejściowe, odsłony i inne interakcje.',
        ],
        'track_pageview' => [
            'label' => 'Śledź odsłony',
            'helper' => 'Sposób śledzenia odsłon.',
            'options' => [
                'true' => 'Włączone',
                'false' => 'Wyłączone',
                'full-url' => 'Pełny URL',
                'url-with-path-and-query-string' => 'URL ze ścieżką i parametrami zapytania',
                'url-with-path' => 'URL ze ścieżką',
            ],
        ],
        'persistence' => [
            'label' => 'Trwałość',
            'helper' => 'Metoda przechowywania danych Mixpanel.',
            'options' => [
                'cookie' => 'Plik cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Wygaśnięcie pliku cookie (dni)',
            'helper' => 'Liczba dni do wygaśnięcia pliku cookie Mixpanel.',
        ],
        'secure_cookie' => [
            'label' => 'Bezpieczny plik cookie',
            'helper' => 'Przesyłaj pliki cookie tylko przez HTTPS.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Plik cookie między subdomenami',
            'helper' => 'Zachowuj pliki cookie między subdomenami.',
        ],
        'ip' => [
            'label' => 'Geolokalizacja IP',
            'helper' => 'Używaj adresu IP użytkownika do danych geolokalizacji.',
        ],
        'property_blacklist' => [
            'label' => 'Czarna lista właściwości',
            'helper' => 'Lista właściwości oddzielonych przecinkami do wykluczenia ze śledzenia.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Domyślnie wyłączone',
            'helper' => 'Domyślnie wyłącz śledzenie (zgodność z RODO). Użytkownicy muszą wyrazić wyraźną zgodę.',
        ],
        'stop_utm_persistence' => [
            'label' => 'Zatrzymaj trwałość UTM',
            'helper' => 'Wyłącz automatyczne zachowywanie parametrów UTM między sesjami.',
        ],
        'record_sessions_percent' => [
            'label' => 'Nagrywanie sesji (%)',
            'helper' => 'Procent nagrywanych sesji (0-100). Ustaw 0, aby wyłączyć.',
        ],
        'record_heatmap_data' => [
            'label' => 'Rejestruj dane map cieplnych',
            'helper' => 'Włącz zbieranie danych map cieplnych do śledzenia kliknięć i przewijania.',
        ],
    ],
];
