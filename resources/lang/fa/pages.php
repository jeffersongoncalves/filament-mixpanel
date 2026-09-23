<?php

return [
    'navigation_group' => 'تنظیمات',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'تنظیمات Mixpanel Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'پیکربندی پروژه',
            'description' => 'اتصال به پروژه Mixpanel خود را پیکربندی کنید.',
        ],
        'tracking_debug' => [
            'heading' => 'ردیابی و اشکال‌زدایی',
            'description' => 'رفتار ردیابی و گزارش‌گیری اشکال‌زدایی را کنترل کنید.',
        ],
        'storage_cookies' => [
            'heading' => 'ذخیره‌سازی و کوکی‌ها',
            'description' => 'ماندگاری داده‌ها و تنظیمات کوکی را پیکربندی کنید.',
        ],
        'privacy_geolocation' => [
            'heading' => 'حریم خصوصی و موقعیت جغرافیایی',
            'description' => 'تنظیمات حریم خصوصی و ردیابی موقعیت جغرافیایی را کنترل کنید.',
        ],
        'advanced_features' => [
            'heading' => 'ویژگی‌های پیشرفته',
            'description' => 'ضبط نشست و جمع‌آوری نقشه حرارتی را پیکربندی کنید.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'توکن پروژه',
            'helper' => 'توکن پروژه Mixpanel شما (برای کارکرد ردیابی لازم است).',
        ],
        'api_host' => [
            'label' => 'میزبان API',
            'helper' => 'نقطه پایانی سفارشی API برای محل نگهداری داده‌ها (مثلاً https://api-eu.mixpanel.com) یا پراکسی.',
        ],
        'custom_lib_url' => [
            'label' => 'آدرس کتابخانه سفارشی',
            'helper' => 'آدرس سفارشی برای کتابخانه JavaScript مربوط به Mixpanel (برای تنظیمات پراکسی).',
        ],
        'debug' => [
            'label' => 'حالت اشکال‌زدایی',
            'helper' => 'فعال‌سازی گزارش‌های اشکال‌زدایی در کنسول مرورگر.',
        ],
        'autocapture' => [
            'label' => 'ثبت خودکار',
            'helper' => 'ثبت خودکار کلیک‌ها، ورودی‌ها، بازدید صفحات و سایر تعاملات.',
        ],
        'track_pageview' => [
            'label' => 'ردیابی بازدید صفحات',
            'helper' => 'نحوه ردیابی بازدید صفحات.',
            'options' => [
                'true' => 'فعال',
                'false' => 'غیرفعال',
                'full-url' => 'آدرس کامل',
                'url-with-path-and-query-string' => 'آدرس با مسیر و رشته پرس‌وجو',
                'url-with-path' => 'آدرس با مسیر',
            ],
        ],
        'persistence' => [
            'label' => 'ماندگاری',
            'helper' => 'روش ذخیره‌سازی داده‌های Mixpanel.',
            'options' => [
                'cookie' => 'کوکی',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'انقضای کوکی (روز)',
            'helper' => 'تعداد روزها تا انقضای کوکی Mixpanel.',
        ],
        'secure_cookie' => [
            'label' => 'کوکی امن',
            'helper' => 'کوکی‌ها فقط از طریق HTTPS ارسال شوند.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'کوکی بین زیردامنه‌ها',
            'helper' => 'کوکی‌ها در میان زیردامنه‌ها حفظ شوند.',
        ],
        'ip' => [
            'label' => 'موقعیت جغرافیایی با IP',
            'helper' => 'از آدرس IP کاربر برای داده‌های موقعیت جغرافیایی استفاده شود.',
        ],
        'property_blacklist' => [
            'label' => 'فهرست سیاه ویژگی‌ها',
            'helper' => 'فهرست ویژگی‌های جداشده با کاما که از ردیابی حذف می‌شوند.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'غیرفعال به‌صورت پیش‌فرض',
            'helper' => 'ردیابی به‌صورت پیش‌فرض غیرفعال باشد (انطباق با GDPR). کاربران باید صراحتاً موافقت کنند.',
        ],
        'stop_utm_persistence' => [
            'label' => 'توقف ماندگاری UTM',
            'helper' => 'غیرفعال کردن نگهداری خودکار پارامترهای UTM در نشست‌ها.',
        ],
        'record_sessions_percent' => [
            'label' => 'ضبط نشست (%)',
            'helper' => 'درصد نشست‌هایی که ضبط می‌شوند (0-100). برای غیرفعال کردن 0 قرار دهید.',
        ],
        'record_heatmap_data' => [
            'label' => 'ثبت داده‌های نقشه حرارتی',
            'helper' => 'فعال‌سازی جمع‌آوری داده‌های نقشه حرارتی برای ردیابی کلیک و پیمایش.',
        ],
    ],
];
