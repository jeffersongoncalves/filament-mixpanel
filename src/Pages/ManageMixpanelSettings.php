<?php

namespace JeffersonGoncalves\Filament\Mixpanel\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Mixpanel\Settings\MixpanelSettings;

class ManageMixpanelSettings extends SettingsPage
{
    protected static string $settings = MixpanelSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';

    public static function getNavigationGroup(): ?string
    {
        return __('filament-mixpanel::pages.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-mixpanel::pages.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-mixpanel::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-mixpanel::pages.sections.project_configuration.heading'))
                    ->description(__('filament-mixpanel::pages.sections.project_configuration.description'))
                    ->schema([
                        TextInput::make('project_token')
                            ->label(__('filament-mixpanel::pages.fields.project_token.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.project_token.helper'))
                            ->nullable(),

                        TextInput::make('api_host')
                            ->label(__('filament-mixpanel::pages.fields.api_host.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.api_host.helper'))
                            ->url()
                            ->nullable(),

                        TextInput::make('custom_lib_url')
                            ->label(__('filament-mixpanel::pages.fields.custom_lib_url.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.custom_lib_url.helper'))
                            ->url()
                            ->nullable(),
                    ])->columns(2),

                Section::make(__('filament-mixpanel::pages.sections.tracking_debug.heading'))
                    ->description(__('filament-mixpanel::pages.sections.tracking_debug.description'))
                    ->schema([
                        Toggle::make('debug')
                            ->label(__('filament-mixpanel::pages.fields.debug.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.debug.helper')),

                        Toggle::make('autocapture')
                            ->label(__('filament-mixpanel::pages.fields.autocapture.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.autocapture.helper')),

                        Select::make('track_pageview')
                            ->label(__('filament-mixpanel::pages.fields.track_pageview.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.track_pageview.helper'))
                            ->options([
                                'true' => __('filament-mixpanel::pages.fields.track_pageview.options.true'),
                                'false' => __('filament-mixpanel::pages.fields.track_pageview.options.false'),
                                'full-url' => __('filament-mixpanel::pages.fields.track_pageview.options.full-url'),
                                'url-with-path-and-query-string' => __('filament-mixpanel::pages.fields.track_pageview.options.url-with-path-and-query-string'),
                                'url-with-path' => __('filament-mixpanel::pages.fields.track_pageview.options.url-with-path'),
                            ])
                            ->required(),
                    ])->columns(2),

                Section::make(__('filament-mixpanel::pages.sections.storage_cookies.heading'))
                    ->description(__('filament-mixpanel::pages.sections.storage_cookies.description'))
                    ->schema([
                        Select::make('persistence')
                            ->label(__('filament-mixpanel::pages.fields.persistence.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.persistence.helper'))
                            ->options([
                                'cookie' => __('filament-mixpanel::pages.fields.persistence.options.cookie'),
                                'localStorage' => __('filament-mixpanel::pages.fields.persistence.options.localStorage'),
                            ])
                            ->required(),

                        TextInput::make('cookie_expiration')
                            ->label(__('filament-mixpanel::pages.fields.cookie_expiration.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.cookie_expiration.helper'))
                            ->numeric()
                            ->minValue(0)
                            ->required(),

                        Toggle::make('secure_cookie')
                            ->label(__('filament-mixpanel::pages.fields.secure_cookie.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.secure_cookie.helper')),

                        Toggle::make('cross_subdomain_cookie')
                            ->label(__('filament-mixpanel::pages.fields.cross_subdomain_cookie.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.cross_subdomain_cookie.helper')),
                    ])->columns(2),

                Section::make(__('filament-mixpanel::pages.sections.privacy_geolocation.heading'))
                    ->description(__('filament-mixpanel::pages.sections.privacy_geolocation.description'))
                    ->schema([
                        Toggle::make('ip')
                            ->label(__('filament-mixpanel::pages.fields.ip.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.ip.helper')),

                        TextInput::make('property_blacklist')
                            ->label(__('filament-mixpanel::pages.fields.property_blacklist.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.property_blacklist.helper'))
                            ->nullable(),

                        Toggle::make('opt_out_tracking_by_default')
                            ->label(__('filament-mixpanel::pages.fields.opt_out_tracking_by_default.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.opt_out_tracking_by_default.helper')),

                        Toggle::make('stop_utm_persistence')
                            ->label(__('filament-mixpanel::pages.fields.stop_utm_persistence.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.stop_utm_persistence.helper')),
                    ])->columns(2),

                Section::make(__('filament-mixpanel::pages.sections.advanced_features.heading'))
                    ->description(__('filament-mixpanel::pages.sections.advanced_features.description'))
                    ->schema([
                        TextInput::make('record_sessions_percent')
                            ->label(__('filament-mixpanel::pages.fields.record_sessions_percent.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.record_sessions_percent.helper'))
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->required(),

                        Toggle::make('record_heatmap_data')
                            ->label(__('filament-mixpanel::pages.fields.record_heatmap_data.label'))
                            ->helperText(__('filament-mixpanel::pages.fields.record_heatmap_data.helper')),
                    ])->columns(2),
            ]);
    }
}
