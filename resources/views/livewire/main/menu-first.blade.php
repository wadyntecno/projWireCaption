<div class="{{ $div_css }}">
    <ul class="{{ $ul_css }}">
        {{ $mensagem }}
        @forelse ($menu3 as $menu)
            dsadsa
        @empty
            nenhum conteúdo
        @endforelse

        {{-- {{ dd($menu3) }} --}}
        {{-- @foreach ($menus as $mn)
        <li>{{ $mn->name }}</li>
            <li class="{{ $active_css }}"><a href="{{ $mn->guid }}" class="px-4">{{ $mn->name }}</a> | </li>
        @endforeach --}}

    </ul>
</div>
