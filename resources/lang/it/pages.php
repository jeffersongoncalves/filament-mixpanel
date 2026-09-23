<?php

return [
    'navigation_group' => 'Impostazioni',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Impostazioni di Mixpanel Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Configurazione del progetto',
            'description' => 'Configura la connessione al tuo progetto Mixpanel.',
        ],
        'tracking_debug' => [
            'heading' => 'Tracciamento e debug',
            'description' => 'Controlla il comportamento del tracciamento e i log di debug.',
        ],
        'storage_cookies' => [
            'heading' => 'Archiviazione e cookie',
            'description' => 'Configura la persistenza dei dati e le impostazioni dei cookie.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Privacy e geolocalizzazione',
            'description' => 'Controlla le impostazioni della privacy e il tracciamento della geolocalizzazione.',
        ],
        'advanced_features' => [
            'heading' => 'Funzionalità avanzate',
            'description' => 'Configura la registrazione delle sessioni e la raccolta delle heatmap.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Token del progetto',
            'helper' => 'Il token del tuo progetto Mixpanel (necessario per il tracciamento).',
        ],
        'api_host' => [
            'label' => 'Host API',
            'helper' => 'Endpoint API personalizzato per la residenza dei dati (ad es. https://api-eu.mixpanel.com) o proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'URL libreria personalizzata',
            'helper' => 'URL personalizzato per la libreria JavaScript di Mixpanel (per configurazioni con proxy).',
        ],
        'debug' => [
            'label' => 'Modalità debug',
            'helper' => 'Abilita i log di debug nella console del browser.',
        ],
        'autocapture' => [
            'label' => 'Acquisizione automatica',
            'helper' => 'Acquisisci automaticamente clic, input, visualizzazioni di pagina e altre interazioni.',
        ],
        'track_pageview' => [
            'label' => 'Traccia visualizzazioni di pagina',
            'helper' => 'Come devono essere tracciate le visualizzazioni di pagina.',
            'options' => [
                'true' => 'Abilitato',
                'false' => 'Disabilitato',
                'full-url' => 'URL completo',
                'url-with-path-and-query-string' => 'URL con percorso e query string',
                'url-with-path' => 'URL con percorso',
            ],
        ],
        'persistence' => [
            'label' => 'Persistenza',
            'helper' => 'Metodo di archiviazione dei dati di Mixpanel.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Scadenza del cookie (giorni)',
            'helper' => 'Numero di giorni prima della scadenza del cookie di Mixpanel.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie sicuro',
            'helper' => 'Trasmetti i cookie solo tramite HTTPS.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Cookie tra sottodomini',
            'helper' => 'Mantieni i cookie tra i sottodomini.',
        ],
        'ip' => [
            'label' => 'Geolocalizzazione IP',
            'helper' => 'Usa l\'indirizzo IP dell\'utente per i dati di geolocalizzazione.',
        ],
        'property_blacklist' => [
            'label' => 'Blacklist delle proprietà',
            'helper' => 'Elenco di proprietà separate da virgole da escludere dal tracciamento.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Opt-out predefinito',
            'helper' => 'Disabilita il tracciamento per impostazione predefinita (conformità GDPR). Gli utenti devono acconsentire esplicitamente.',
        ],
        'stop_utm_persistence' => [
            'label' => 'Interrompi persistenza UTM',
            'helper' => 'Disabilita la conservazione automatica dei parametri UTM tra le sessioni.',
        ],
        'record_sessions_percent' => [
            'label' => 'Registrazione sessioni (%)',
            'helper' => 'Percentuale di sessioni da registrare (0-100). Imposta 0 per disabilitare.',
        ],
        'record_heatmap_data' => [
            'label' => 'Registra dati heatmap',
            'helper' => 'Abilita la raccolta dei dati heatmap per il tracciamento di clic e scorrimento.',
        ],
    ],
];
