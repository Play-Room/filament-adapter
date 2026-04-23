<?php

namespace PlayRoom\FilamentPlayRoom;

use Filament\Widgets\Widget;
use PlayRoom\LivewirePlayRoom\Concerns\ConfiguresPlayRoom;

class PlayRoomWidget extends Widget
{
    use ConfiguresPlayRoom;

    protected string $view = 'filament-play-room::widget';

    public static function canView(): bool
    {
        return true;
    }
}
