<?php

return [
    'navigation_group' => 'Definições',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Definições do Mixpanel Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Configuração do projeto',
            'description' => 'Configure a ligação ao seu projeto Mixpanel.',
        ],
        'tracking_debug' => [
            'heading' => 'Rastreamento e depuração',
            'description' => 'Controle o comportamento do rastreamento e os registos de depuração.',
        ],
        'storage_cookies' => [
            'heading' => 'Armazenamento e cookies',
            'description' => 'Configure a persistência de dados e as definições de cookies.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Privacidade e geolocalização',
            'description' => 'Controle as definições de privacidade e o rastreamento de geolocalização.',
        ],
        'advanced_features' => [
            'heading' => 'Funcionalidades avançadas',
            'description' => 'Configure a gravação de sessões e a recolha de mapas de calor.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Token do projeto',
            'helper' => 'O token do seu projeto Mixpanel (necessário para o rastreamento funcionar).',
        ],
        'api_host' => [
            'label' => 'Host da API',
            'helper' => 'Endpoint de API personalizado para residência de dados (por ex., https://api-eu.mixpanel.com) ou proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'URL de biblioteca personalizada',
            'helper' => 'URL personalizado para a biblioteca JavaScript do Mixpanel (para configurações com proxy).',
        ],
        'debug' => [
            'label' => 'Modo de depuração',
            'helper' => 'Ativar registos de depuração na consola do navegador.',
        ],
        'autocapture' => [
            'label' => 'Captura automática',
            'helper' => 'Capturar automaticamente cliques, entradas, visualizações de página e outras interações.',
        ],
        'track_pageview' => [
            'label' => 'Rastrear visualizações de página',
            'helper' => 'Como as visualizações de página devem ser rastreadas.',
            'options' => [
                'true' => 'Ativado',
                'false' => 'Desativado',
                'full-url' => 'URL completo',
                'url-with-path-and-query-string' => 'URL com caminho e query string',
                'url-with-path' => 'URL com caminho',
            ],
        ],
        'persistence' => [
            'label' => 'Persistência',
            'helper' => 'Método de armazenamento dos dados do Mixpanel.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Expiração do cookie (dias)',
            'helper' => 'Número de dias até o cookie do Mixpanel expirar.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie seguro',
            'helper' => 'Transmitir cookies apenas via HTTPS.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Cookie entre subdomínios',
            'helper' => 'Manter cookies entre subdomínios.',
        ],
        'ip' => [
            'label' => 'Geolocalização por IP',
            'helper' => 'Usar o endereço IP do utilizador para dados de geolocalização.',
        ],
        'property_blacklist' => [
            'label' => 'Lista negra de propriedades',
            'helper' => 'Lista de propriedades separadas por vírgulas a excluir do rastreamento.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Exclusão por predefinição',
            'helper' => 'Desativar o rastreamento por predefinição (conformidade com o RGPD). Os utilizadores têm de aceitar explicitamente.',
        ],
        'stop_utm_persistence' => [
            'label' => 'Parar persistência de UTM',
            'helper' => 'Desativar a retenção automática de parâmetros UTM entre sessões.',
        ],
        'record_sessions_percent' => [
            'label' => 'Gravação de sessões (%)',
            'helper' => 'Percentagem de sessões a gravar (0-100). Defina 0 para desativar.',
        ],
        'record_heatmap_data' => [
            'label' => 'Registar dados de mapa de calor',
            'helper' => 'Ativar a recolha de dados de mapa de calor para rastreamento de cliques e deslocamento.',
        ],
    ],
];
