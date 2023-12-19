<div>
    <div class="overflow-x-auto">
        <table class="divide-y divide-gray-300 w-full">
            <thead class="bg-gray-50">
                @foreach ($columns as $column)
                    <th scope="col" class="px-3 py-3.5 text-left font-semibold text-gray-900">
                        {{ $column['label'] }}
                    </th>
                @endforeach
                @if (isset($edit) && $edit)
                    <th scope="col" class="relative py-3.5 pr-4 sm:pr-6">
                        <span class="sr-only">Edit</span>
                    </th>
                @endif
                @if (isset($delete) && $delete)
                    <th scope="col" class="relative py-3.5 pr-4 sm:pr-6">
                        <span class="sr-only">Delete</span>
                    </th>
                @endif
            </thead>
            <tfoot>
            </tfoot>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($items as $item)
                    <tr class=" ">
                        @foreach ($columns as $column)
                            <td class="whitespace-nowrap px-3 py-4 text-sm tex-gray-500">
                                {{ data_get($item, $column['column']) }}
                            </td>
                        @endforeach
                        @if (isset($edit) && $edit)
                            <td class="whitespace-nowrap px-3 py-4 text-sm tex-gray-500">
                                <a href="{{ $edit != '#' ? route($edit, $item->id) : '#' }}">{{ __('Edit') }}</a>
                            </td>
                        @endif
                        @if (isset($delete) && $delete)
                            <td class="whitespace-nowrap px-3 py-4 text-sm tex-gray-500">
                                <button wire:click="destroy({{ $item->id }})"> {{ $item->id }} -
                                    {{ __('Destroy') }}
                                </button>
                            </td>
                        @endif

                    </tr>
                @empty
                    <h4>Nenhum item na listar.</h4>
                @endforelse

            </tbody>
        </table>
    </div>
    <div class="py-4">
        {{ $items->links() }}
    </div>

</div>
