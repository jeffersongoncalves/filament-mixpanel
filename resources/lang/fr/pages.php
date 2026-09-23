<?php

return [
    'navigation_group' => 'Paramètres',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Paramètres de Mixpanel Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Configuration du projet',
            'description' => 'Configurez la connexion à votre projet Mixpanel.',
        ],
        'tracking_debug' => [
            'heading' => 'Suivi et débogage',
            'description' => 'Contrôlez le comportement du suivi et la journalisation de débogage.',
        ],
        'storage_cookies' => [
            'heading' => 'Stockage et cookies',
            'description' => 'Configurez la persistance des données et les paramètres des cookies.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Confidentialité et géolocalisation',
            'description' => 'Contrôlez les paramètres de confidentialité et le suivi de la géolocalisation.',
        ],
        'advanced_features' => [
            'heading' => 'Fonctionnalités avancées',
            'description' => 'Configurez l\'enregistrement des sessions et la collecte des cartes de chaleur.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Jeton du projet',
            'helper' => 'Le jeton de votre projet Mixpanel (requis pour le suivi).',
        ],
        'api_host' => [
            'label' => 'Hôte de l\'API',
            'helper' => 'Point de terminaison d\'API personnalisé pour la résidence des données (par ex. https://api-eu.mixpanel.com) ou proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'URL de bibliothèque personnalisée',
            'helper' => 'URL personnalisée de la bibliothèque JavaScript Mixpanel (pour les configurations avec proxy).',
        ],
        'debug' => [
            'label' => 'Mode débogage',
            'helper' => 'Activer la journalisation de débogage dans la console du navigateur.',
        ],
        'autocapture' => [
            'label' => 'Capture automatique',
            'helper' => 'Capturer automatiquement les clics, saisies, pages vues et autres interactions.',
        ],
        'track_pageview' => [
            'label' => 'Suivre les pages vues',
            'helper' => 'Comment les pages vues doivent être suivies.',
            'options' => [
                'true' => 'Activé',
                'false' => 'Désactivé',
                'full-url' => 'URL complète',
                'url-with-path-and-query-string' => 'URL avec chemin et chaîne de requête',
                'url-with-path' => 'URL avec chemin',
            ],
        ],
        'persistence' => [
            'label' => 'Persistance',
            'helper' => 'Méthode de stockage des données Mixpanel.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Expiration du cookie (jours)',
            'helper' => 'Nombre de jours avant l\'expiration du cookie Mixpanel.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie sécurisé',
            'helper' => 'Transmettre les cookies uniquement via HTTPS.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Cookie inter-sous-domaines',
            'helper' => 'Conserver les cookies entre sous-domaines.',
        ],
        'ip' => [
            'label' => 'Géolocalisation IP',
            'helper' => 'Utiliser l\'adresse IP de l\'utilisateur pour les données de géolocalisation.',
        ],
        'property_blacklist' => [
            'label' => 'Liste noire des propriétés',
            'helper' => 'Liste de propriétés séparées par des virgules à exclure du suivi.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Désactivé par défaut',
            'helper' => 'Désactiver le suivi par défaut (conformité RGPD). Les utilisateurs doivent l\'accepter explicitement.',
        ],
        'stop_utm_persistence' => [
            'label' => 'Arrêter la persistance UTM',
            'helper' => 'Désactiver la conservation automatique des paramètres UTM entre les sessions.',
        ],
        'record_sessions_percent' => [
            'label' => 'Enregistrement des sessions (%)',
            'helper' => 'Pourcentage de sessions à enregistrer (0-100). Mettez 0 pour désactiver.',
        ],
        'record_heatmap_data' => [
            'label' => 'Enregistrer les données de carte de chaleur',
            'helper' => 'Activer la collecte des données de carte de chaleur pour le suivi des clics et du défilement.',
        ],
    ],
];
