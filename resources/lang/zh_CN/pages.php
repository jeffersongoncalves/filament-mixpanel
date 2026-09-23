<?php

return [
    'navigation_group' => '设置',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Mixpanel Analytics 设置',
    'sections' => [
        'project_configuration' => [
            'heading' => '项目配置',
            'description' => '配置与你的 Mixpanel 项目的连接。',
        ],
        'tracking_debug' => [
            'heading' => '跟踪与调试',
            'description' => '控制跟踪行为和调试日志。',
        ],
        'storage_cookies' => [
            'heading' => '存储与 Cookie',
            'description' => '配置数据持久化和 Cookie 设置。',
        ],
        'privacy_geolocation' => [
            'heading' => '隐私与地理位置',
            'description' => '控制隐私设置和地理位置跟踪。',
        ],
        'advanced_features' => [
            'heading' => '高级功能',
            'description' => '配置会话录制和热图收集。',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => '项目令牌',
            'helper' => '你的 Mixpanel 项目令牌（跟踪功能必需）。',
        ],
        'api_host' => [
            'label' => 'API 主机',
            'helper' => '用于数据驻留的自定义 API 端点（例如 https://api-eu.mixpanel.com）或代理。',
        ],
        'custom_lib_url' => [
            'label' => '自定义库 URL',
            'helper' => 'Mixpanel JavaScript 库的自定义 URL（用于代理设置）。',
        ],
        'debug' => [
            'label' => '调试模式',
            'helper' => '在浏览器控制台中启用调试日志。',
        ],
        'autocapture' => [
            'label' => '自动捕获',
            'helper' => '自动捕获点击、输入、页面浏览和其他交互。',
        ],
        'track_pageview' => [
            'label' => '跟踪页面浏览',
            'helper' => '页面浏览的跟踪方式。',
            'options' => [
                'true' => '已启用',
                'false' => '已禁用',
                'full-url' => '完整 URL',
                'url-with-path-and-query-string' => '包含路径和查询字符串的 URL',
                'url-with-path' => '包含路径的 URL',
            ],
        ],
        'persistence' => [
            'label' => '持久化',
            'helper' => 'Mixpanel 数据的存储方式。',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Cookie 有效期（天）',
            'helper' => 'Mixpanel Cookie 过期前的天数。',
        ],
        'secure_cookie' => [
            'label' => '安全 Cookie',
            'helper' => '仅通过 HTTPS 传输 Cookie。',
        ],
        'cross_subdomain_cookie' => [
            'label' => '跨子域 Cookie',
            'helper' => '在子域之间保留 Cookie。',
        ],
        'ip' => [
            'label' => 'IP 地理定位',
            'helper' => '使用用户的 IP 地址获取地理位置数据。',
        ],
        'property_blacklist' => [
            'label' => '属性黑名单',
            'helper' => '以逗号分隔的、需从跟踪中排除的属性列表。',
        ],
        'opt_out_tracking_by_default' => [
            'label' => '默认退出跟踪',
            'helper' => '默认禁用跟踪（符合 GDPR）。用户必须明确选择加入。',
        ],
        'stop_utm_persistence' => [
            'label' => '停止 UTM 持久化',
            'helper' => '禁用跨会话自动保留 UTM 参数。',
        ],
        'record_sessions_percent' => [
            'label' => '会话录制（%）',
            'helper' => '要录制的会话百分比（0-100）。设为 0 以禁用。',
        ],
        'record_heatmap_data' => [
            'label' => '记录热图数据',
            'helper' => '启用热图数据收集，用于点击和滚动跟踪。',
        ],
    ],
];
