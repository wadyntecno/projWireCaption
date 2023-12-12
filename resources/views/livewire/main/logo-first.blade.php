@props([
    'active_css' => '' 
])
<img src="{{ Vite::imgurl($logofirst) }}" 
alt="{{ $namefirst }}" title="{{ $namefirst }}"
        @class(["", $active_css])
>