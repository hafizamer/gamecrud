    @props(['game'])
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">
            <img class="hidden w-48 mr-6 md:block" src={{ asset('images/no-image.png') }} alt="" />
            <div>
                <h3 class="text-2xl">
                    <a href="/game/{{ $game->id }}">{{ $game['title'] }}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{ $game['publisher'] }}</div>
                
                <div class="text-lg mt-4">
                    {{ $game['desc'] }}
                </div>
            </div>
        </div>
    </div>
  