<?php

return [
    'navigation_group' => 'Ayarlar',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Mixpanel Analytics ayarları',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Proje yapılandırması',
            'description' => 'Mixpanel projenize bağlantıyı yapılandırın.',
        ],
        'tracking_debug' => [
            'heading' => 'İzleme ve hata ayıklama',
            'description' => 'İzleme davranışını ve hata ayıklama günlüğünü kontrol edin.',
        ],
        'storage_cookies' => [
            'heading' => 'Depolama ve çerezler',
            'description' => 'Veri kalıcılığını ve çerez ayarlarını yapılandırın.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Gizlilik ve konum',
            'description' => 'Gizlilik ayarlarını ve konum izlemeyi kontrol edin.',
        ],
        'advanced_features' => [
            'heading' => 'Gelişmiş özellikler',
            'description' => 'Oturum kaydını ve ısı haritası toplamayı yapılandırın.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Proje anahtarı',
            'helper' => 'Mixpanel proje anahtarınız (izlemenin çalışması için gereklidir).',
        ],
        'api_host' => [
            'label' => 'API sunucusu',
            'helper' => 'Veri yerleşimi için özel API uç noktası (ör. https://api-eu.mixpanel.com) veya proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'Özel kütüphane URL\'si',
            'helper' => 'Mixpanel JavaScript kütüphanesi için özel URL (proxy kurulumları için).',
        ],
        'debug' => [
            'label' => 'Hata ayıklama modu',
            'helper' => 'Tarayıcı konsolunda hata ayıklama günlüğünü etkinleştirin.',
        ],
        'autocapture' => [
            'label' => 'Otomatik yakalama',
            'helper' => 'Tıklamaları, girişleri, sayfa görüntülemelerini ve diğer etkileşimleri otomatik olarak yakalayın.',
        ],
        'track_pageview' => [
            'label' => 'Sayfa görüntülemelerini izle',
            'helper' => 'Sayfa görüntülemelerinin nasıl izleneceği.',
            'options' => [
                'true' => 'Etkin',
                'false' => 'Devre dışı',
                'full-url' => 'Tam URL',
                'url-with-path-and-query-string' => 'Yol ve sorgu dizesiyle URL',
                'url-with-path' => 'Yol ile URL',
            ],
        ],
        'persistence' => [
            'label' => 'Kalıcılık',
            'helper' => 'Mixpanel verileri için depolama yöntemi.',
            'options' => [
                'cookie' => 'Çerez',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Çerez süresi (gün)',
            'helper' => 'Mixpanel çerezinin süresi dolmadan önceki gün sayısı.',
        ],
        'secure_cookie' => [
            'label' => 'Güvenli çerez',
            'helper' => 'Çerezleri yalnızca HTTPS üzerinden iletin.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Alt alan adları arası çerez',
            'helper' => 'Çerezleri alt alan adları arasında koruyun.',
        ],
        'ip' => [
            'label' => 'IP konum belirleme',
            'helper' => 'Konum verileri için kullanıcının IP adresini kullanın.',
        ],
        'property_blacklist' => [
            'label' => 'Özellik kara listesi',
            'helper' => 'İzlemeden hariç tutulacak özelliklerin virgülle ayrılmış listesi.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Varsayılan olarak devre dışı',
            'helper' => 'İzlemeyi varsayılan olarak devre dışı bırakın (GDPR uyumluluğu). Kullanıcıların açıkça onay vermesi gerekir.',
        ],
        'stop_utm_persistence' => [
            'label' => 'UTM kalıcılığını durdur',
            'helper' => 'UTM parametrelerinin oturumlar arasında otomatik saklanmasını devre dışı bırakın.',
        ],
        'record_sessions_percent' => [
            'label' => 'Oturum kaydı (%)',
            'helper' => 'Kaydedilecek oturumların yüzdesi (0-100). Devre dışı bırakmak için 0 yapın.',
        ],
        'record_heatmap_data' => [
            'label' => 'Isı haritası verilerini kaydet',
            'helper' => 'Tıklama ve kaydırma izleme için ısı haritası veri toplamayı etkinleştirin.',
        ],
    ],
];
