<?php

return [
    'navigation_group' => 'Configuración',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Configuración de Mixpanel Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Configuración del proyecto',
            'description' => 'Configura la conexión con tu proyecto de Mixpanel.',
        ],
        'tracking_debug' => [
            'heading' => 'Seguimiento y depuración',
            'description' => 'Controla el comportamiento del seguimiento y los registros de depuración.',
        ],
        'storage_cookies' => [
            'heading' => 'Almacenamiento y cookies',
            'description' => 'Configura la persistencia de datos y los ajustes de cookies.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Privacidad y geolocalización',
            'description' => 'Controla los ajustes de privacidad y el seguimiento de geolocalización.',
        ],
        'advanced_features' => [
            'heading' => 'Funciones avanzadas',
            'description' => 'Configura la grabación de sesiones y la recopilación de mapas de calor.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Token del proyecto',
            'helper' => 'Tu token de proyecto de Mixpanel (necesario para que funcione el seguimiento).',
        ],
        'api_host' => [
            'label' => 'Host de la API',
            'helper' => 'Endpoint de API personalizado para residencia de datos (p. ej., https://api-eu.mixpanel.com) o proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'URL de librería personalizada',
            'helper' => 'URL personalizada para la librería JavaScript de Mixpanel (para configuraciones con proxy).',
        ],
        'debug' => [
            'label' => 'Modo de depuración',
            'helper' => 'Activa los registros de depuración en la consola del navegador.',
        ],
        'autocapture' => [
            'label' => 'Captura automática',
            'helper' => 'Captura automáticamente clics, entradas, visitas de página y otras interacciones.',
        ],
        'track_pageview' => [
            'label' => 'Registrar páginas vistas',
            'helper' => 'Cómo se deben registrar las páginas vistas.',
            'options' => [
                'true' => 'Activado',
                'false' => 'Desactivado',
                'full-url' => 'URL completa',
                'url-with-path-and-query-string' => 'URL con ruta y cadena de consulta',
                'url-with-path' => 'URL con ruta',
            ],
        ],
        'persistence' => [
            'label' => 'Persistencia',
            'helper' => 'Método de almacenamiento para los datos de Mixpanel.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Caducidad de la cookie (días)',
            'helper' => 'Número de días antes de que caduque la cookie de Mixpanel.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie segura',
            'helper' => 'Transmite las cookies solo a través de HTTPS.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Cookie entre subdominios',
            'helper' => 'Mantiene las cookies entre subdominios.',
        ],
        'ip' => [
            'label' => 'Geolocalización por IP',
            'helper' => 'Usa la dirección IP del usuario para los datos de geolocalización.',
        ],
        'property_blacklist' => [
            'label' => 'Lista negra de propiedades',
            'helper' => 'Lista de propiedades separadas por comas que se excluirán del seguimiento.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Excluir por defecto',
            'helper' => 'Desactiva el seguimiento por defecto (cumplimiento del RGPD). Los usuarios deben aceptarlo explícitamente.',
        ],
        'stop_utm_persistence' => [
            'label' => 'Detener persistencia de UTM',
            'helper' => 'Desactiva la retención automática de parámetros UTM entre sesiones.',
        ],
        'record_sessions_percent' => [
            'label' => 'Grabación de sesiones (%)',
            'helper' => 'Porcentaje de sesiones a grabar (0-100). Pon 0 para desactivarlo.',
        ],
        'record_heatmap_data' => [
            'label' => 'Registrar datos de mapa de calor',
            'helper' => 'Activa la recopilación de datos de mapas de calor para el seguimiento de clics y desplazamiento.',
        ],
    ],
];
