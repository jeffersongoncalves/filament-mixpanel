<?php

return [
    'navigation_group' => 'Instellingen',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Mixpanel Analytics-instellingen',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Projectconfiguratie',
            'description' => 'Configureer de verbinding met je Mixpanel-project.',
        ],
        'tracking_debug' => [
            'heading' => 'Tracking & debug',
            'description' => 'Bepaal het trackinggedrag en de debuglogging.',
        ],
        'storage_cookies' => [
            'heading' => 'Opslag & cookies',
            'description' => 'Configureer gegevenspersistentie en cookie-instellingen.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Privacy & geolocatie',
            'description' => 'Beheer privacy-instellingen en geolocatietracking.',
        ],
        'advanced_features' => [
            'heading' => 'Geavanceerde functies',
            'description' => 'Configureer sessie-opname en heatmapverzameling.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Projecttoken',
            'helper' => 'Je Mixpanel-projecttoken (vereist voor tracking).',
        ],
        'api_host' => [
            'label' => 'API-host',
            'helper' => 'Aangepast API-endpoint voor dataresidentie (bijv. https://api-eu.mixpanel.com) of proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'Aangepaste bibliotheek-URL',
            'helper' => 'Aangepaste URL voor de Mixpanel-JavaScriptbibliotheek (voor proxyconfiguraties).',
        ],
        'debug' => [
            'label' => 'Debugmodus',
            'helper' => 'Debuglogging in de browserconsole inschakelen.',
        ],
        'autocapture' => [
            'label' => 'Autocapture',
            'helper' => 'Klikken, invoer, paginaweergaven en andere interacties automatisch vastleggen.',
        ],
        'track_pageview' => [
            'label' => 'Paginaweergaven volgen',
            'helper' => 'Hoe paginaweergaven gevolgd moeten worden.',
            'options' => [
                'true' => 'Ingeschakeld',
                'false' => 'Uitgeschakeld',
                'full-url' => 'Volledige URL',
                'url-with-path-and-query-string' => 'URL met pad en querystring',
                'url-with-path' => 'URL met pad',
            ],
        ],
        'persistence' => [
            'label' => 'Persistentie',
            'helper' => 'Opslagmethode voor Mixpanel-gegevens.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Cookieverval (dagen)',
            'helper' => 'Aantal dagen voordat de Mixpanel-cookie verloopt.',
        ],
        'secure_cookie' => [
            'label' => 'Beveiligde cookie',
            'helper' => 'Cookies alleen via HTTPS verzenden.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Cookie over subdomeinen',
            'helper' => 'Cookies behouden over subdomeinen heen.',
        ],
        'ip' => [
            'label' => 'IP-geolocatie',
            'helper' => 'Het IP-adres van de gebruiker gebruiken voor geolocatiegegevens.',
        ],
        'property_blacklist' => [
            'label' => 'Eigenschappen-blacklist',
            'helper' => 'Kommagescheiden lijst met eigenschappen die van tracking worden uitgesloten.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Standaard afgemeld',
            'helper' => 'Tracking standaard uitschakelen (AVG-naleving). Gebruikers moeten expliciet toestemming geven.',
        ],
        'stop_utm_persistence' => [
            'label' => 'UTM-persistentie stoppen',
            'helper' => 'Automatisch bewaren van UTM-parameters over sessies heen uitschakelen.',
        ],
        'record_sessions_percent' => [
            'label' => 'Sessie-opname (%)',
            'helper' => 'Percentage sessies om op te nemen (0-100). Stel in op 0 om uit te schakelen.',
        ],
        'record_heatmap_data' => [
            'label' => 'Heatmapgegevens vastleggen',
            'helper' => 'Verzameling van heatmapgegevens voor klik- en scrolltracking inschakelen.',
        ],
    ],
];
