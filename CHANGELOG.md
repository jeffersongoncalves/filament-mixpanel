# Changelog

All notable changes to this project will be documented in this file.

## 2.1.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

## v2.0.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^4.8`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^4.8`

## v2.0.0 - 2026-02-22

### What's New

- **MixpanelPlugin** with configurable `settingsPage()` method
- **ManageMixpanelSettings** page with all 16 Mixpanel JS SDK options
- **FilamentView::registerRenderHook** for tracking script injection in ServiceProvider
- **Translation files** (English and Brazilian Portuguese)
- **Translatable navigation group** (`Settings` / `Configurações`)
- PHPStan, Pint, and GitHub Actions workflows

#### Settings Page Sections

- **Project Configuration** — Project Token, API Host, Custom Library URL
- **Tracking & Debug** — Debug Mode, Autocapture, Track Page Views
- **Storage & Cookies** — Persistence method, Cookie Expiration, Secure Cookie, Cross Subdomain
- **Privacy & Geolocation** — IP Geolocation, Property Blacklist, Opt Out by Default, UTM Persistence
- **Advanced Features** — Session Recording percentage, Heatmap Data collection

#### Requirements

- PHP 8.2+
- Filament 4.0+
- jeffersongoncalves/laravel-mixpanel ^1.0

**Full Changelog**: https://github.com/jeffersongoncalves/filament-mixpanel/commits/v2.0.0
