<?php

namespace PlayRoom\FilamentPlayRoom;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\View\PanelsRenderHook;
use PlayRoom\LivewirePlayRoom\Concerns\ConfiguresPlayRoom;

class PlayRoomPlugin implements Plugin
{
    use ConfiguresPlayRoom;

    public static function make(): static
    {
        return tap(app(static::class), function (self $plugin): void {
            $plugin->floating()
                ->launcher([
                    'position' => 'bottom-right',
                    'panelWidth' => 'min(520px, calc(100vw - 2rem))',
                    'panelHeight' => 'min(78vh, 760px)',
                    'startOpen' => false,
                ])
                ->persistence([
                    'enabled' => true,
                    'storageKey' => 'playroom:floating-demo',
                ]);
        });
    }

    public function getId(): string
    {
        return 'playroom';
    }

    public function register(Panel $panel): void
    {
        $panel->renderHook(
            PanelsRenderHook::BODY_END,
            function (): string {
                $view = 'filament-play-room::global';

                return view($view, [
                    'playRoomOptions' => $this->playRoomOptions(),
                    'playRoomLocale' => $this->playRoomLocale,
                    'playRoomTheme' => $this->playRoomTheme,
                    'playRoomUseDefaultGames' => $this->playRoomUseDefaultGames,
                    'playRoomDefaultGamesConfig' => $this->playRoomDefaultGamesConfig(),
                    'playRoomGameRegistrars' => $this->playRoomGameRegistrars(),
                ])->render();
            },
        );
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
