---
name: filament-mixpanel-development
description: Build and work with Filament Mixpanel plugin features, including tracking script injection, settings page management, and Mixpanel analytics configuration.
---

# Filament Mixpanel Development

## When to use this skill

Use this skill when:
- Adding Mixpanel analytics tracking to a Filament panel
- Configuring Mixpanel settings (project token, API host, tracking options)
- Customizing the Mixpanel settings page
- Disabling the settings page for script-only injection
- Extending the plugin with additional Mixpanel features
- Troubleshooting Mixpanel tracking or settings issues

## Requirements

- PHP 8.2+
- Laravel 11.0+
- Filament 5.0
- `jeffersongoncalves/laravel-mixpanel` ^1.0
- `filament/spatie-laravel-settings-plugin` ^5.0

## Installation

```bash
composer require jeffersongoncalves/filament-mixpanel
```

### Publish settings migrations

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=mixpanel-settings-migrations
php artisan migrate
```

## Configuration

### Register the Plugin

```php
use JeffersonGoncalves\Filament\Mixpanel\MixpanelPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            MixpanelPlugin::make(),
        ]);
}
```

This automatically:
- Injects the Mixpanel tracking script into the panel `<head>` via `PanelsRenderHook::HEAD_START`
- Registers the `ManageMixpanelSettings` settings page

### Disable Settings Page

```php
MixpanelPlugin::make()
    ->settingsPage(false),
```

## Architecture

### Namespace

`JeffersonGoncalves\Filament\Mixpanel`

### Key Classes

#### MixpanelPlugin

```php
namespace JeffersonGoncalves\Filament\Mixpanel;

use Filament\Contracts\Plugin;
use Filament\Panel;

class MixpanelPlugin implements Plugin
{
    protected bool $hasSettingsPage = true;

    public static function make(): static;
    public static function get(): static;
    public function getId(): string;              // returns 'filament-mixpanel'
    public function register(Panel $panel): void;
    public function boot(Panel $panel): void;
    public function settingsPage(bool $condition = true): static;
}
```

#### MixpanelServiceProvider

```php
namespace JeffersonGoncalves\Filament\Mixpanel;

use Spatie\LaravelPackageTools\PackageServiceProvider;

class MixpanelServiceProvider extends PackageServiceProvider
{
    // Registers the render hook for script injection
    // FilamentView::registerRenderHook(PanelsRenderHook::HEAD_START, fn (): View => view('mixpanel::script'));
}
```

#### ManageMixpanelSettings

```php
namespace JeffersonGoncalves\Filament\Mixpanel\Pages;

use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Mixpanel\Settings\MixpanelSettings;

class ManageMixpanelSettings extends SettingsPage
{
    protected static string $settings = MixpanelSettings::class;
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar-square';
}
```

### Settings Page Sections

The settings page (`ManageMixpanelSettings`) provides five configuration sections:

1. **Project Configuration** -- `project_token`, `api_host`, `custom_lib_url`
2. **Tracking & Debug** -- `debug` (toggle), `autocapture` (toggle), `track_pageview` (select: true/false/full-url/url-with-path-and-query-string/url-with-path)
3. **Storage & Cookies** -- `persistence` (select: cookie/localStorage), `cookie_expiration` (numeric), `secure_cookie` (toggle), `cross_subdomain_cookie` (toggle)
4. **Privacy & Geolocation** -- `ip` (toggle), `property_blacklist` (text), `opt_out_tracking_by_default` (toggle), `stop_utm_persistence` (toggle)
5. **Advanced Features** -- `record_sessions_percent` (numeric 0-100), `record_heatmap_data` (toggle)

### Dependencies

- `jeffersongoncalves/laravel-mixpanel` -- Core Mixpanel integration providing `MixpanelSettings` model and the tracking script Blade view
- `filament/spatie-laravel-settings-plugin` -- Filament integration for `spatie/laravel-settings`

## Extending the Plugin

### Custom Settings Page

To override the default settings page, create your own class extending `SettingsPage`:

```php
namespace App\Filament\Pages;

use JeffersonGoncalves\Filament\Mixpanel\Pages\ManageMixpanelSettings as BaseSettings;

class ManageMixpanelSettings extends BaseSettings
{
    // Override form() to customize fields
}
```

Then disable the default settings page and register your custom page:

```php
MixpanelPlugin::make()
    ->settingsPage(false),
```

## Troubleshooting

### Tracking script not loading
**Cause**: The `MixpanelServiceProvider` is not auto-discovered or the render hook is not firing.
**Solution**: Ensure the package is properly installed and the service provider `JeffersonGoncalves\Filament\Mixpanel\MixpanelServiceProvider` is registered in `composer.json` extra.laravel.providers.

### Settings page not appearing
**Cause**: The `settingsPage(false)` method was called, or the settings migration was not run.
**Solution**: Verify `settingsPage()` is not set to `false`. Run `php artisan vendor:publish --tag=mixpanel-settings-migrations && php artisan migrate`.

### Settings not persisting
**Cause**: The `settings` table does not exist or the settings migration was not run.
**Solution**: Publish and run the spatie/laravel-settings base migration first, then the Mixpanel-specific migration.
