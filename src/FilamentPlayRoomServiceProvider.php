<?php

namespace PlayRoom\FilamentPlayRoom;

use Illuminate\Support\ServiceProvider;

class FilamentPlayRoomServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-play-room');
    }
}
