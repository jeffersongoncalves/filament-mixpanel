# Changelog

All notable changes to this project will be documented in this file.

## 1.2.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#22)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-mixpanel/pull/5
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-mixpanel/pull/8
* ci: standardize update-changelog workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-mixpanel/pull/10
* build(deps): bump the actions-deps group with 2 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-mixpanel/pull/17
* build(deps): update jeffersongoncalves/laravel-mixpanel requirement from ^1.0 to ^2.0 in the composer-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-mixpanel/pull/20
* feat(i18n): add translations (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-mixpanel/pull/22

**Full Changelog**: https://github.com/jeffersongoncalves/filament-mixpanel/compare/1.1.0...1.2.0

## 1.1.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

## v1.0.0 - 2026-02-22

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
- Filament 3.0+
- jeffersongoncalves/laravel-mixpanel ^1.0

**Full Changelog**: https://github.com/jeffersongoncalves/filament-mixpanel/commits/v1.0.0
