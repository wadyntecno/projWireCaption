<div x-data="{ visible: false }" >
    <div class="flex flex-col justify-between lg:relative">
        <div class="relative flex flex-row items-center">
            <x-text-input wire:model.debounce.500ms='"{{ $searchable }}' @click="visible = !visible"
                class="block mt-1 w-full pr-8 cursor-pointer " type="text" />
            <div class="w-4 h-4 text-gray-500 absolute right-3 mt-2 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                    stroke="currentColor" class="w-4 h-4 text-gray-500 transition "
                    :class="{ 'transform rotate-180': visible }">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
        </div>
        <div
        {{-- @mouseleave="visible = false" --}}
        x-show="visible" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="trasnform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transition opacity-100 scale-100"
            x-transition:leave-end="transition opacity-0 scale-95"
            class="flex flex-col lg:absolute top-0 lg:top-[46px] left-0 w-full 
            h-screen lg:h-auto lg:max-h-[150px] overflow-y-auto lg:rounded-lg
            lg:border ls:border-gray-300 lg:shadow-lg px-2 py-4 bg-white
            ">
            <div class="flex absolute right-6 sm:hidden flex-col w-full mb-4 mr-2 z-10">
                <div class="flex flex-row justify-end">
                    <button class="p-2 rounded-full transform active:scale-90 hover:shadow-lg"
                    @click="visible = false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex flex-col divide-y divide-gray-200 divide-dotted">
                @forelse ($items as $item)
                    <button wire:loading.remove wire:target='{{ $searchable }}'
                        @click="
                    $wire.set('{{ $model }}', '{{ data_get($item, $value) }}')
                    $wire.set('{{ $searchable }}', '{{ data_get($item, $key) }}')
                    visible = false;
                "
                        class="flex flex-row justify-start w-full py-4 transform active:opacity-40 hover:opacity-80">
                        {{ data_get($item, $key) }}
                    </button>
                @empty
                    <button disabled="true"
                        class="flex flex-row justify-start w-full py-4 
                transform active:opacity-40 hover:opacity-80">
                        Nenhum Item
                    </button>
                @endforelse
                {{-- @if ($items->count() === 0)
                    <button disabled="true" class="flex flex-row justify-start w-full py-4 
                    transform active:opacity-40 hover:opacity-80">
                        Nenhum Item
                    </button>
                @endif

                @foreach ($items as $item)
                <button 
                    wire:loading.remove wire:target='{{ $searchable }}'
                    @click="
                        $wire.set('{{ $model }}', '{{ data_get($item, $value) }}')
                        $wire.set('{{ $searchable }}', '{{ data_get($item, $key) }}')
                        visible = false;
                    " class="flex flex-row justify-start w-full py-4 transform active:opacity-40 hover:opacity-80">
                    {{ data_get($item, $key) }}
                </button>
                @endforeach --}}

            </div>
        </div>

    </div>
</div>
