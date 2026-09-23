<?php

return [
    'navigation_group' => 'الإعدادات',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'إعدادات Mixpanel Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'إعدادات المشروع',
            'description' => 'اضبط الاتصال بمشروع Mixpanel الخاص بك.',
        ],
        'tracking_debug' => [
            'heading' => 'التتبع والتصحيح',
            'description' => 'تحكم في سلوك التتبع وسجلات التصحيح.',
        ],
        'storage_cookies' => [
            'heading' => 'التخزين وملفات تعريف الارتباط',
            'description' => 'اضبط استمرارية البيانات وإعدادات ملفات تعريف الارتباط.',
        ],
        'privacy_geolocation' => [
            'heading' => 'الخصوصية والموقع الجغرافي',
            'description' => 'تحكم في إعدادات الخصوصية وتتبع الموقع الجغرافي.',
        ],
        'advanced_features' => [
            'heading' => 'ميزات متقدمة',
            'description' => 'اضبط تسجيل الجلسات وجمع بيانات الخرائط الحرارية.',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'رمز المشروع',
            'helper' => 'رمز مشروع Mixpanel الخاص بك (مطلوب لعمل التتبع).',
        ],
        'api_host' => [
            'label' => 'مضيف API',
            'helper' => 'نقطة نهاية API مخصصة لإقامة البيانات (مثل https://api-eu.mixpanel.com) أو وكيل.',
        ],
        'custom_lib_url' => [
            'label' => 'رابط مكتبة مخصص',
            'helper' => 'رابط مخصص لمكتبة JavaScript الخاصة بـ Mixpanel (لإعدادات الوكيل).',
        ],
        'debug' => [
            'label' => 'وضع التصحيح',
            'helper' => 'تفعيل سجلات التصحيح في وحدة تحكم المتصفح.',
        ],
        'autocapture' => [
            'label' => 'الالتقاط التلقائي',
            'helper' => 'التقاط النقرات والمدخلات ومشاهدات الصفحات والتفاعلات الأخرى تلقائيًا.',
        ],
        'track_pageview' => [
            'label' => 'تتبع مشاهدات الصفحات',
            'helper' => 'كيفية تتبع مشاهدات الصفحات.',
            'options' => [
                'true' => 'مفعّل',
                'false' => 'معطّل',
                'full-url' => 'الرابط الكامل',
                'url-with-path-and-query-string' => 'الرابط مع المسار وسلسلة الاستعلام',
                'url-with-path' => 'الرابط مع المسار',
            ],
        ],
        'persistence' => [
            'label' => 'الاستمرارية',
            'helper' => 'طريقة تخزين بيانات Mixpanel.',
            'options' => [
                'cookie' => 'ملف تعريف الارتباط',
                'localStorage' => 'التخزين المحلي',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'انتهاء ملف تعريف الارتباط (أيام)',
            'helper' => 'عدد الأيام قبل انتهاء صلاحية ملف تعريف الارتباط الخاص بـ Mixpanel.',
        ],
        'secure_cookie' => [
            'label' => 'ملف تعريف ارتباط آمن',
            'helper' => 'إرسال ملفات تعريف الارتباط عبر HTTPS فقط.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'ملف تعريف ارتباط عبر النطاقات الفرعية',
            'helper' => 'الاحتفاظ بملفات تعريف الارتباط عبر النطاقات الفرعية.',
        ],
        'ip' => [
            'label' => 'الموقع الجغرافي عبر IP',
            'helper' => 'استخدام عنوان IP للمستخدم لبيانات الموقع الجغرافي.',
        ],
        'property_blacklist' => [
            'label' => 'قائمة الخصائص المحظورة',
            'helper' => 'قائمة خصائص مفصولة بفواصل لاستبعادها من التتبع.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'إلغاء الاشتراك افتراضيًا',
            'helper' => 'تعطيل التتبع افتراضيًا (للامتثال لـ GDPR). يجب على المستخدمين الاشتراك صراحةً.',
        ],
        'stop_utm_persistence' => [
            'label' => 'إيقاف استمرارية UTM',
            'helper' => 'تعطيل الاحتفاظ التلقائي بمعاملات UTM عبر الجلسات.',
        ],
        'record_sessions_percent' => [
            'label' => 'تسجيل الجلسات (%)',
            'helper' => 'نسبة الجلسات المراد تسجيلها (0-100). اضبطها على 0 للتعطيل.',
        ],
        'record_heatmap_data' => [
            'label' => 'تسجيل بيانات الخرائط الحرارية',
            'helper' => 'تفعيل جمع بيانات الخرائط الحرارية لتتبع النقرات والتمرير.',
        ],
    ],
];
