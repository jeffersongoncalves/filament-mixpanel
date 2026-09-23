<?php

return [
    'navigation_group' => 'Parametrlər',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Mixpanel Analytics parametrləri',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Layihə konfiqurasiyası',
            'description' => 'Mixpanel layihənizə bağlantını konfiqurasiya edin.',
        ],
        'tracking_debug' => [
            'heading' => 'İzləmə və sazlama',
            'description' => 'İzləmə davranışını və sazlama jurnalını idarə edin.',
        ],
        'storage_cookies' => [
            'heading' => 'Saxlama və kukilər',
            'description' => 'Məlumatların saxlanmasını və kuki parametrlərini konfiqurasiya edin.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Məxfilik və geolokasiya',
            'description' => 'Məxfilik parametrlərini və geolokasiya izləməsini idarə edin.',
        ],
        'advanced_features' => [
            'heading' => 'Qabaqcıl funksiyalar',
            'description' => 'Sessiya yazılışını və istilik xəritəsi məlumatlarının toplanmasını konfiqurasiya edin.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Layihə tokeni',
            'helper' => 'Mixpanel layihə tokeniniz (izləmənin işləməsi üçün tələb olunur).',
        ],
        'api_host' => [
            'label' => 'API hostu',
            'helper' => 'Məlumatların yerləşməsi üçün xüsusi API endpoint (məs. https://api-eu.mixpanel.com) və ya proksi.',
        ],
        'custom_lib_url' => [
            'label' => 'Xüsusi kitabxana URL-i',
            'helper' => 'Mixpanel JavaScript kitabxanası üçün xüsusi URL (proksi quraşdırmaları üçün).',
        ],
        'debug' => [
            'label' => 'Sazlama rejimi',
            'helper' => 'Brauzer konsoluna sazlama jurnalını aktiv edin.',
        ],
        'autocapture' => [
            'label' => 'Avtomatik yaxalama',
            'helper' => 'Klikləri, daxiletmələri, səhifə baxışlarını və digər qarşılıqlı əlaqələri avtomatik yaxalayın.',
        ],
        'track_pageview' => [
            'label' => 'Səhifə baxışlarını izlə',
            'helper' => 'Səhifə baxışlarının necə izlənəcəyi.',
            'options' => [
                'true' => 'Aktiv',
                'false' => 'Deaktiv',
                'full-url' => 'Tam URL',
                'url-with-path-and-query-string' => 'Yol və sorğu sətri ilə URL',
                'url-with-path' => 'Yol ilə URL',
            ],
        ],
        'persistence' => [
            'label' => 'Saxlama',
            'helper' => 'Mixpanel məlumatları üçün saxlama üsulu.',
            'options' => [
                'cookie' => 'Kuki',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Kukinin bitmə müddəti (gün)',
            'helper' => 'Mixpanel kukisinin müddəti bitənə qədər günlərin sayı.',
        ],
        'secure_cookie' => [
            'label' => 'Təhlükəsiz kuki',
            'helper' => 'Kukiləri yalnız HTTPS üzərindən ötürün.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Subdomenlərarası kuki',
            'helper' => 'Kukiləri subdomenlər arasında saxlayın.',
        ],
        'ip' => [
            'label' => 'IP geolokasiyası',
            'helper' => 'Geolokasiya məlumatları üçün istifadəçinin IP ünvanından istifadə edin.',
        ],
        'property_blacklist' => [
            'label' => 'Xüsusiyyətlərin qara siyahısı',
            'helper' => 'İzləmədən çıxarılacaq xüsusiyyətlərin vergüllə ayrılmış siyahısı.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Standart olaraq imtina',
            'helper' => 'İzləməni standart olaraq deaktiv edin (GDPR uyğunluğu). İstifadəçilər açıq şəkildə razılıq verməlidir.',
        ],
        'stop_utm_persistence' => [
            'label' => 'UTM saxlanmasını dayandır',
            'helper' => 'UTM parametrlərinin sessiyalar arasında avtomatik saxlanmasını deaktiv edin.',
        ],
        'record_sessions_percent' => [
            'label' => 'Sessiya yazılışı (%)',
            'helper' => 'Yazılacaq sessiyaların faizi (0-100). Deaktiv etmək üçün 0 təyin edin.',
        ],
        'record_heatmap_data' => [
            'label' => 'İstilik xəritəsi məlumatlarını yaz',
            'helper' => 'Klik və sürüşdürmə izləməsi üçün istilik xəritəsi məlumatlarının toplanmasını aktiv edin.',
        ],
    ],
];
