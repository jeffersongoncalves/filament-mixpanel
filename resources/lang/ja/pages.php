<?php

return [
    'navigation_group' => '設定',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Mixpanel Analytics 設定',
    'sections' => [
        'project_configuration' => [
            'heading' => 'プロジェクト設定',
            'description' => 'Mixpanel プロジェクトへの接続を設定します。',
        ],
        'tracking_debug' => [
            'heading' => 'トラッキングとデバッグ',
            'description' => 'トラッキングの動作とデバッグログを制御します。',
        ],
        'storage_cookies' => [
            'heading' => 'ストレージと Cookie',
            'description' => 'データの永続化と Cookie の設定を行います。',
        ],
        'privacy_geolocation' => [
            'heading' => 'プライバシーと位置情報',
            'description' => 'プライバシー設定と位置情報のトラッキングを制御します。',
        ],
        'advanced_features' => [
            'heading' => '高度な機能',
            'description' => 'セッション録画とヒートマップ収集を設定します。',
        ],
    ],
    'fields' => [
        'project_token' => [
            'label' => 'プロジェクトトークン',
            'helper' => 'Mixpanel のプロジェクトトークン（トラッキングに必須）。',
        ],
        'api_host' => [
            'label' => 'API ホスト',
            'helper' => 'データレジデンシー用のカスタム API エンドポイント（例: https://api-eu.mixpanel.com）またはプロキシ。',
        ],
        'custom_lib_url' => [
            'label' => 'カスタムライブラリ URL',
            'helper' => 'Mixpanel JavaScript ライブラリのカスタム URL（プロキシ構成用）。',
        ],
        'debug' => [
            'label' => 'デバッグモード',
            'helper' => 'ブラウザコンソールへのデバッグログを有効にします。',
        ],
        'autocapture' => [
            'label' => '自動キャプチャ',
            'helper' => 'クリック、入力、ページビューなどの操作を自動的に記録します。',
        ],
        'track_pageview' => [
            'label' => 'ページビューをトラッキング',
            'helper' => 'ページビューのトラッキング方法。',
            'options' => [
                'true' => '有効',
                'false' => '無効',
                'full-url' => '完全な URL',
                'url-with-path-and-query-string' => 'パスとクエリ文字列付き URL',
                'url-with-path' => 'パス付き URL',
            ],
        ],
        'persistence' => [
            'label' => '永続化',
            'helper' => 'Mixpanel データの保存方法。',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Cookie の有効期限（日）',
            'helper' => 'Mixpanel の Cookie が期限切れになるまでの日数。',
        ],
        'secure_cookie' => [
            'label' => 'セキュア Cookie',
            'helper' => 'Cookie を HTTPS 経由でのみ送信します。',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'サブドメイン間 Cookie',
            'helper' => 'サブドメイン間で Cookie を保持します。',
        ],
        'ip' => [
            'label' => 'IP 位置情報',
            'helper' => 'ユーザーの IP アドレスを位置情報データに使用します。',
        ],
        'property_blacklist' => [
            'label' => 'プロパティのブラックリスト',
            'helper' => 'トラッキングから除外するプロパティのカンマ区切りリスト。',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'デフォルトでオプトアウト',
            'helper' => 'デフォルトでトラッキングを無効にします（GDPR 準拠）。ユーザーは明示的にオプトインする必要があります。',
        ],
        'stop_utm_persistence' => [
            'label' => 'UTM の保持を停止',
            'helper' => 'セッション間での UTM パラメータの自動保持を無効にします。',
        ],
        'record_sessions_percent' => [
            'label' => 'セッション録画（%）',
            'helper' => '録画するセッションの割合（0-100）。0 にすると無効になります。',
        ],
        'record_heatmap_data' => [
            'label' => 'ヒートマップデータを記録',
            'helper' => 'クリックとスクロールのトラッキング用にヒートマップデータの収集を有効にします。',
        ],
    ],
];
