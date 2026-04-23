@livewire(\PlayRoom\LivewirePlayRoom\LivewirePlayRoom::class, [
    'playRoomLocale' => $playRoomLocale ?? 'en',
    'playRoomTheme' => $playRoomTheme ?? 'light',
    'playRoomOptions' => $playRoomOptions ?? [],
    'playRoomWrapperClass' => '',
    'playRoomContainerClass' => '',
    'playRoomUseDefaultGames' => $playRoomUseDefaultGames ?? true,
    'playRoomDefaultGamesConfig' => $playRoomDefaultGamesConfig ?? [],
    'playRoomGameRegistrars' => $playRoomGameRegistrars ?? [],
], key('filament-play-room-global'))
