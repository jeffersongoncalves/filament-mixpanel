<?php

return [
    'navigation_group' => 'Налаштування',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Налаштування Mixpanel Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Налаштування проєкту',
            'description' => 'Налаштуйте підключення до вашого проєкту Mixpanel.',
        ],
        'tracking_debug' => [
            'heading' => 'Відстеження та налагодження',
            'description' => 'Керуйте поведінкою відстеження та журналом налагодження.',
        ],
        'storage_cookies' => [
            'heading' => 'Сховище та cookie',
            'description' => 'Налаштуйте збереження даних і параметри cookie.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Конфіденційність і геолокація',
            'description' => 'Керуйте налаштуваннями конфіденційності та відстеженням геолокації.',
        ],
        'advanced_features' => [
            'heading' => 'Розширені можливості',
            'description' => 'Налаштуйте запис сесій і збір теплових карт.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Токен проєкту',
            'helper' => 'Токен вашого проєкту Mixpanel (обов\'язковий для роботи відстеження).',
        ],
        'api_host' => [
            'label' => 'Хост API',
            'helper' => 'Користувацький API-ендпоінт для розміщення даних (наприклад, https://api-eu.mixpanel.com) або проксі.',
        ],
        'custom_lib_url' => [
            'label' => 'URL користувацької бібліотеки',
            'helper' => 'Користувацький URL JavaScript-бібліотеки Mixpanel (для роботи через проксі).',
        ],
        'debug' => [
            'label' => 'Режим налагодження',
            'helper' => 'Увімкнути журнал налагодження в консолі браузера.',
        ],
        'autocapture' => [
            'label' => 'Автозахоплення',
            'helper' => 'Автоматично фіксувати кліки, введення, перегляди сторінок та інші взаємодії.',
        ],
        'track_pageview' => [
            'label' => 'Відстежувати перегляди сторінок',
            'helper' => 'Спосіб відстеження переглядів сторінок.',
            'options' => [
                'true' => 'Увімкнено',
                'false' => 'Вимкнено',
                'full-url' => 'Повний URL',
                'url-with-path-and-query-string' => 'URL зі шляхом і рядком запиту',
                'url-with-path' => 'URL зі шляхом',
            ],
        ],
        'persistence' => [
            'label' => 'Зберігання',
            'helper' => 'Спосіб зберігання даних Mixpanel.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Термін дії cookie (дні)',
            'helper' => 'Кількість днів до закінчення терміну дії cookie Mixpanel.',
        ],
        'secure_cookie' => [
            'label' => 'Захищений cookie',
            'helper' => 'Передавати cookie лише через HTTPS.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Cookie для піддоменів',
            'helper' => 'Зберігати cookie між піддоменами.',
        ],
        'ip' => [
            'label' => 'Геолокація за IP',
            'helper' => 'Використовувати IP-адресу користувача для даних геолокації.',
        ],
        'property_blacklist' => [
            'label' => 'Чорний список властивостей',
            'helper' => 'Список властивостей через кому, що виключаються з відстеження.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Відмова за замовчуванням',
            'helper' => 'Вимкнути відстеження за замовчуванням (відповідність GDPR). Користувачі мають явно надати згоду.',
        ],
        'stop_utm_persistence' => [
            'label' => 'Не зберігати UTM',
            'helper' => 'Вимкнути автоматичне збереження UTM-параметрів між сесіями.',
        ],
        'record_sessions_percent' => [
            'label' => 'Запис сесій (%)',
            'helper' => 'Відсоток сесій для запису (0-100). Вкажіть 0, щоб вимкнути.',
        ],
        'record_heatmap_data' => [
            'label' => 'Записувати дані теплових карт',
            'helper' => 'Увімкнути збір даних теплових карт для відстеження кліків і прокручування.',
        ],
    ],
];
