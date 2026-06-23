<?php

namespace JeffersonGoncalves\Filament\Mixpanel;

use JeffersonGoncalves\Filament\Mixpanel\Pages\ManageMixpanelSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class MixpanelPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-mixpanel';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageMixpanelSettings::class;
    }
}
