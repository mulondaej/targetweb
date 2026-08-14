{{-- @props(['highlight' => false]) --}}

<div @class(['card'])>
    {{ $slot }} 
    <a href="{{ $attributes->get('href') }}" class="btn">More details</a>
</div>

