<?php

return [
    'navigation_group' => 'सेटिंग्स',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Mixpanel Analytics सेटिंग्स',
    'sections' => [
        'project_configuration' => [
            'heading' => 'प्रोजेक्ट कॉन्फ़िगरेशन',
            'description' => 'अपने Mixpanel प्रोजेक्ट से कनेक्शन कॉन्फ़िगर करें।',
        ],
        'tracking_debug' => [
            'heading' => 'ट्रैकिंग और डीबग',
            'description' => 'ट्रैकिंग व्यवहार और डीबग लॉगिंग नियंत्रित करें।',
        ],
        'storage_cookies' => [
            'heading' => 'स्टोरेज और कुकीज़',
            'description' => 'डेटा परसिस्टेंस और कुकी सेटिंग्स कॉन्फ़िगर करें।',
        ],
        'privacy_geolocation' => [
            'heading' => 'गोपनीयता और भौगोलिक स्थान',
            'description' => 'गोपनीयता सेटिंग्स और भौगोलिक स्थान ट्रैकिंग नियंत्रित करें।',
        ],
        'advanced_features' => [
            'heading' => 'उन्नत सुविधाएँ',
            'description' => 'सत्र रिकॉर्डिंग और हीटमैप संग्रह कॉन्फ़िगर करें।',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'प्रोजेक्ट टोकन',
            'helper' => 'आपका Mixpanel प्रोजेक्ट टोकन (ट्रैकिंग के काम करने के लिए आवश्यक)।',
        ],
        'api_host' => [
            'label' => 'API होस्ट',
            'helper' => 'डेटा रेज़िडेंसी के लिए कस्टम API एंडपॉइंट (जैसे https://api-eu.mixpanel.com) या प्रॉक्सी।',
        ],
        'custom_lib_url' => [
            'label' => 'कस्टम लाइब्रेरी URL',
            'helper' => 'Mixpanel JavaScript लाइब्रेरी के लिए कस्टम URL (प्रॉक्सी सेटअप के लिए)।',
        ],
        'debug' => [
            'label' => 'डीबग मोड',
            'helper' => 'ब्राउज़र कंसोल में डीबग लॉगिंग सक्षम करें।',
        ],
        'autocapture' => [
            'label' => 'ऑटोकैप्चर',
            'helper' => 'क्लिक, इनपुट, पेज व्यू और अन्य इंटरैक्शन को स्वचालित रूप से कैप्चर करें।',
        ],
        'track_pageview' => [
            'label' => 'पेज व्यू ट्रैक करें',
            'helper' => 'पेज व्यू कैसे ट्रैक किए जाने चाहिए।',
            'options' => [
                'true' => 'सक्षम',
                'false' => 'अक्षम',
                'full-url' => 'पूरा URL',
                'url-with-path-and-query-string' => 'पथ और क्वेरी स्ट्रिंग के साथ URL',
                'url-with-path' => 'पथ के साथ URL',
            ],
        ],
        'persistence' => [
            'label' => 'परसिस्टेंस',
            'helper' => 'Mixpanel डेटा के लिए स्टोरेज विधि।',
            'options' => [
                'cookie' => 'कुकी',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'कुकी समाप्ति (दिन)',
            'helper' => 'Mixpanel कुकी की समाप्ति से पहले दिनों की संख्या।',
        ],
        'secure_cookie' => [
            'label' => 'सुरक्षित कुकी',
            'helper' => 'कुकीज़ केवल HTTPS पर भेजें।',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'क्रॉस सबडोमेन कुकी',
            'helper' => 'सबडोमेन के बीच कुकीज़ बनाए रखें।',
        ],
        'ip' => [
            'label' => 'IP भौगोलिक स्थान',
            'helper' => 'भौगोलिक स्थान डेटा के लिए उपयोगकर्ता के IP पते का उपयोग करें।',
        ],
        'property_blacklist' => [
            'label' => 'प्रॉपर्टी ब्लैकलिस्ट',
            'helper' => 'ट्रैकिंग से बाहर रखने के लिए प्रॉपर्टी की कॉमा से अलग सूची।',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'डिफ़ॉल्ट रूप से ऑप्ट आउट',
            'helper' => 'डिफ़ॉल्ट रूप से ट्रैकिंग अक्षम करें (GDPR अनुपालन)। उपयोगकर्ताओं को स्पष्ट रूप से ऑप्ट इन करना होगा।',
        ],
        'stop_utm_persistence' => [
            'label' => 'UTM परसिस्टेंस रोकें',
            'helper' => 'सत्रों के बीच UTM पैरामीटर के स्वचालित संरक्षण को अक्षम करें।',
        ],
        'record_sessions_percent' => [
            'label' => 'सत्र रिकॉर्डिंग (%)',
            'helper' => 'रिकॉर्ड किए जाने वाले सत्रों का प्रतिशत (0-100)। अक्षम करने के लिए 0 सेट करें।',
        ],
        'record_heatmap_data' => [
            'label' => 'हीटमैप डेटा रिकॉर्ड करें',
            'helper' => 'क्लिक और स्क्रॉल ट्रैकिंग के लिए हीटमैप डेटा संग्रह सक्षम करें।',
        ],
    ],
];
