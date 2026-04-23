# PlayRoom Filament Adapter

Filament v5 plugin and widget package for embedding PlayRoom in a panel.

## Requirements

- PHP 8.3+
- Laravel 13+
- Filament 5+
- Livewire 4+

## Installation

Require the Filament adapter with Composer:

```bash
composer require playroom/filament-adapter:^1.0
```

Laravel package discovery will register `PlayRoom\\FilamentPlayRoom\\FilamentPlayRoomServiceProvider` automatically.

## Register The Plugin

Register the plugin in your Filament panel provider:

```php
use Filament\Panel;
use PlayRoom\FilamentPlayRoom\PlayRoomPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            PlayRoomPlugin::make(),
        ]);
}
```

The default plugin configuration mounts a floating PlayRoom launcher in the bottom-right corner of the panel.

## Use The Widget

Add the widget to a dashboard or panel widget list:

```php
use PlayRoom\FilamentPlayRoom\PlayRoomWidget;

public function getWidgets(): array
{
    return [
        PlayRoomWidget::class,
    ];
}
```

## Customization

Both `PlayRoomPlugin` and `PlayRoomWidget` use the shared configuration API from the Livewire adapter, so you can chain methods such as:

```php
PlayRoomPlugin::make()
    ->locale('en')
    ->theme('dark')
    ->floating()
    ->launcher([
        'position' => 'bottom-right',
        'panelWidth' => 'min(520px, calc(100vw - 2rem))',
        'panelHeight' => 'min(78vh, 760px)',
    ])
    ->persistence([
        'enabled' => true,
        'storageKey' => 'playroom:floating-demo',
    ]);
```

Other supported configurators include `inline()`, `browserStartMode()`, `localeOptions()`, `localeMessages()`, `showLocaleSwitcher()`, `showThemeSwitcher()`, `themeColors()`, `useDefaultGames()`, `defaultGamesConfig()`, `registerGameRegistrar()`, `option()`, and `options()`.