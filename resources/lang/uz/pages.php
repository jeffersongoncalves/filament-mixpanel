<?php

return [
    'navigation_group' => 'Sozlamalar',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Mixpanel Analytics sozlamalari',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Loyiha konfiguratsiyasi',
            'description' => 'Mixpanel loyihangizga ulanishni sozlang.',
        ],
        'tracking_debug' => [
            'heading' => 'Kuzatuv va disk raskadrovka',
            'description' => 'Kuzatuv xatti-harakati va disk raskadrovka jurnalini boshqaring.',
        ],
        'storage_cookies' => [
            'heading' => 'Saqlash va cookie-fayllar',
            'description' => 'Maʼlumotlarni saqlash va cookie sozlamalarini sozlang.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Maxfiylik va geolokatsiya',
            'description' => 'Maxfiylik sozlamalari va geolokatsiya kuzatuvini boshqaring.',
        ],
        'advanced_features' => [
            'heading' => 'Kengaytirilgan imkoniyatlar',
            'description' => 'Seanslarni yozib olish va issiqlik xaritasi yigʻishni sozlang.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'Loyiha tokeni',
            'helper' => 'Mixpanel loyiha tokeningiz (kuzatuv ishlashi uchun zarur).',
        ],
        'api_host' => [
            'label' => 'API xosti',
            'helper' => 'Maʼlumotlar joylashuvi uchun maxsus API endpoint (masalan, https://api-eu.mixpanel.com) yoki proksi.',
        ],
        'custom_lib_url' => [
            'label' => 'Maxsus kutubxona URL',
            'helper' => 'Mixpanel JavaScript kutubxonasi uchun maxsus URL (proksi sozlamalari uchun).',
        ],
        'debug' => [
            'label' => 'Disk raskadrovka rejimi',
            'helper' => 'Brauzer konsolida disk raskadrovka jurnalini yoqish.',
        ],
        'autocapture' => [
            'label' => 'Avtomatik yozib olish',
            'helper' => 'Bosishlar, kiritishlar, sahifa koʻrishlari va boshqa oʻzaro taʼsirlarni avtomatik yozib olish.',
        ],
        'track_pageview' => [
            'label' => 'Sahifa koʻrishlarini kuzatish',
            'helper' => 'Sahifa koʻrishlari qanday kuzatilishi.',
            'options' => [
                'true' => 'Yoqilgan',
                'false' => 'Oʻchirilgan',
                'full-url' => 'Toʻliq URL',
                'url-with-path-and-query-string' => 'Yoʻl va soʻrov satri bilan URL',
                'url-with-path' => 'Yoʻl bilan URL',
            ],
        ],
        'persistence' => [
            'label' => 'Saqlash',
            'helper' => 'Mixpanel maʼlumotlarini saqlash usuli.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Cookie muddati (kun)',
            'helper' => 'Mixpanel cookie muddati tugashigacha boʻlgan kunlar soni.',
        ],
        'secure_cookie' => [
            'label' => 'Xavfsiz cookie',
            'helper' => 'Cookie-fayllarni faqat HTTPS orqali uzatish.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Subdomenlararo cookie',
            'helper' => 'Cookie-fayllarni subdomenlar boʻylab saqlash.',
        ],
        'ip' => [
            'label' => 'IP geolokatsiyasi',
            'helper' => 'Geolokatsiya maʼlumotlari uchun foydalanuvchining IP manzilidan foydalanish.',
        ],
        'property_blacklist' => [
            'label' => 'Xususiyatlar qora roʻyxati',
            'helper' => 'Kuzatuvdan chiqarib tashlanadigan xususiyatlarning vergul bilan ajratilgan roʻyxati.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Standart boʻyicha rad etish',
            'helper' => 'Kuzatuvni standart boʻyicha oʻchirish (GDPR muvofiqligi). Foydalanuvchilar aniq rozilik berishi kerak.',
        ],
        'stop_utm_persistence' => [
            'label' => 'UTM saqlashni toʻxtatish',
            'helper' => 'UTM parametrlarini seanslar boʻylab avtomatik saqlashni oʻchirish.',
        ],
        'record_sessions_percent' => [
            'label' => 'Seanslarni yozib olish (%)',
            'helper' => 'Yozib olinadigan seanslar foizi (0-100). Oʻchirish uchun 0 qiling.',
        ],
        'record_heatmap_data' => [
            'label' => 'Issiqlik xaritasi maʼlumotlarini yozish',
            'helper' => 'Bosish va aylantirishni kuzatish uchun issiqlik xaritasi maʼlumotlarini yigʻishni yoqish.',
        ],
    ],
];
