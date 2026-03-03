## Filament Mixpanel

Filament plugin for Mixpanel analytics — tracking script injection and Settings Page to manage Mixpanel configuration directly from your Filament panel.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-mixpanel
</code-snippet>
@endverbatim

After installing, publish and run the settings migration:

@verbatim
<code-snippet name="Publish and run settings migrations" lang="bash">
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=mixpanel-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Mixpanel\MixpanelPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            MixpanelPlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Disable the settings page (tracking script only)" lang="php">
MixpanelPlugin::make()
    ->settingsPage(false),
</code-snippet>
@endverbatim

### Features
- Automatic Mixpanel tracking script injection via `PanelsRenderHook::HEAD_START`
- Settings Page for managing Mixpanel configuration (Project Token, API Host, Custom Library URL)
- Tracking & Debug settings (Debug Mode, Autocapture, Track Page Views)
- Storage & Cookies settings (Persistence method, Cookie Expiration, Secure Cookie, Cross Subdomain)
- Privacy & Geolocation settings (IP Geolocation, Property Blacklist, Opt Out by Default, UTM Persistence)
- Advanced Features (Session Recording percentage, Heatmap Data collection)
- Uses `spatie/laravel-settings` for persistent configuration
- Depends on `jeffersongoncalves/laravel-mixpanel` for core Mixpanel integration

### Architecture
- **Namespace**: `JeffersonGoncalves\Filament\Mixpanel`
- **Plugin class**: `MixpanelPlugin` implements `Filament\Contracts\Plugin`
- **Service Provider**: `MixpanelServiceProvider` extends `PackageServiceProvider`
- **Settings Page**: `Pages\ManageMixpanelSettings` extends `Filament\Pages\SettingsPage`
- **Settings Model**: `JeffersonGoncalves\Mixpanel\Settings\MixpanelSettings` (from laravel-mixpanel)

### Best Practices
- Always run the settings migration after installation
- Use `settingsPage(false)` when you only need script injection without the admin UI
- Configure the Project Token via the Settings Page, not via environment variables
- The tracking script is injected at `HEAD_START` for all panel pages automatically
