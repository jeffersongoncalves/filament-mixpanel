<?php

return [
    'navigation_group' => 'Настройки',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Настройки Mixpanel Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Настройка проекта',
            'description' => 'Настройте подключение к вашему проекту Mixpanel.',
        ],
        'tracking_debug' => [
            'heading' => 'Отслеживание и отладка',
            'description' => 'Управляйте поведением отслеживания и журналом отладки.',
        ],
        'storage_cookies' => [
            'heading' => 'Хранилище и cookie',
            'description' => 'Настройте сохранение данных и параметры cookie.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Конфиденциальность и геолокация',
            'description' => 'Управляйте настройками конфиденциальности и отслеживанием геолокации.',
        ],
        'advanced_features' => [
            'heading' => 'Расширенные возможности',
            'description' => 'Настройте запись сессий и сбор тепловых карт.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Токен проекта',
            'helper' => 'Токен вашего проекта Mixpanel (обязателен для работы отслеживания).',
        ],
        'api_host' => [
            'label' => 'Хост API',
            'helper' => 'Пользовательский API-эндпоинт для размещения данных (например, https://api-eu.mixpanel.com) или прокси.',
        ],
        'custom_lib_url' => [
            'label' => 'URL пользовательской библиотеки',
            'helper' => 'Пользовательский URL JavaScript-библиотеки Mixpanel (для работы через прокси).',
        ],
        'debug' => [
            'label' => 'Режим отладки',
            'helper' => 'Включить журнал отладки в консоли браузера.',
        ],
        'autocapture' => [
            'label' => 'Автозахват',
            'helper' => 'Автоматически фиксировать клики, ввод, просмотры страниц и другие взаимодействия.',
        ],
        'track_pageview' => [
            'label' => 'Отслеживать просмотры страниц',
            'helper' => 'Способ отслеживания просмотров страниц.',
            'options' => [
                'true' => 'Включено',
                'false' => 'Отключено',
                'full-url' => 'Полный URL',
                'url-with-path-and-query-string' => 'URL с путём и строкой запроса',
                'url-with-path' => 'URL с путём',
            ],
        ],
        'persistence' => [
            'label' => 'Хранение',
            'helper' => 'Способ хранения данных Mixpanel.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Срок действия cookie (дни)',
            'helper' => 'Количество дней до истечения срока действия cookie Mixpanel.',
        ],
        'secure_cookie' => [
            'label' => 'Защищённый cookie',
            'helper' => 'Передавать cookie только по HTTPS.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Cookie для поддоменов',
            'helper' => 'Сохранять cookie между поддоменами.',
        ],
        'ip' => [
            'label' => 'Геолокация по IP',
            'helper' => 'Использовать IP-адрес пользователя для данных геолокации.',
        ],
        'property_blacklist' => [
            'label' => 'Чёрный список свойств',
            'helper' => 'Список свойств через запятую, исключаемых из отслеживания.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Отказ по умолчанию',
            'helper' => 'Отключить отслеживание по умолчанию (соответствие GDPR). Пользователи должны явно дать согласие.',
        ],
        'stop_utm_persistence' => [
            'label' => 'Не сохранять UTM',
            'helper' => 'Отключить автоматическое сохранение UTM-параметров между сессиями.',
        ],
        'record_sessions_percent' => [
            'label' => 'Запись сессий (%)',
            'helper' => 'Процент записываемых сессий (0-100). Укажите 0, чтобы отключить.',
        ],
        'record_heatmap_data' => [
            'label' => 'Записывать данные тепловых карт',
            'helper' => 'Включить сбор данных тепловых карт для отслеживания кликов и прокрутки.',
        ],
    ],
];
