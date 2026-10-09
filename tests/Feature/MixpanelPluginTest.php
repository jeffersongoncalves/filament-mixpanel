<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Filament\Mixpanel\MixpanelPlugin;
use JeffersonGoncalves\Filament\Mixpanel\Pages\ManageMixpanelSettings;
use JeffersonGoncalves\Mixpanel\Settings\MixpanelSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageMixpanelSettings::class)
        ->and(MixpanelPlugin::make()->getId())->toBe('filament-mixpanel');
});

it('ships translated labels', function () {
    expect(ManageMixpanelSettings::getNavigationLabel())->not->toContain('::')
        ->and((new ManageMixpanelSettings)->getTitle())->not->toContain('::');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageMixpanelSettings::class)
        ->fillForm(['project_token' => 'TESTTOKEN123'])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(MixpanelSettings::class)->refresh();
    expect($settings->project_token)->toBe('TESTTOKEN123');
});

it('injects the script into the panel once configured', function () {
    $settings = app(MixpanelSettings::class);
    $settings->project_token = 'TESTTOKEN123';
    $settings->save();

    $html = (string) FilamentView::renderHook(PanelsRenderHook::HEAD_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::HEAD_END)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_END);

    expect($html)->toContain('mixpanel.init');
});
