@props([
    'active_css' => '',
])
<a href="{{ !$logourl == getenv('APP_URL') ? getenv('APP_URL') : '#' }}" target="_self" alt="{{ config('app.name') }}">
    <img src="{{ Vite::imgurl($logofirst) }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}"
        @class(['', $active_css])>
</a>