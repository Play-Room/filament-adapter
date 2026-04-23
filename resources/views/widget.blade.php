<x-filament-widgets::widget>
    <x-filament::section>
        @livewire(\PlayRoom\LivewirePlayRoom\LivewirePlayRoom::class, [
            'playRoomLocale' => $this->playRoomLocale,
            'playRoomTheme' => $this->playRoomTheme,
            'playRoomOptions' => $this->playRoomOptions(),
            'playRoomWrapperClass' => 'h-[42rem] overflow-hidden rounded-lg border',
            'playRoomContainerClass' => 'h-full w-full',
            'playRoomUseDefaultGames' => $this->playRoomUseDefaultGames,
            'playRoomDefaultGamesConfig' => $this->playRoomDefaultGamesConfig(),
            'playRoomGameRegistrars' => $this->playRoomGameRegistrars(),
        ], key('filament-play-room-' . $this->getId()))
    </x-filament::section>
</x-filament-widgets::widget>
