<li class="nav-group {{ $open ? 'show' : '' }}">
    <a {{ $attributes->merge([ 'class' => 'nav-link nav-group-toggle', 'href' => $link ?? '#' ]) }}>
        @if($icon != null)<i class="nav-icon {{ $icon }}"></i>@endif
        @if($title != null) <span>{{ $title }}</span>@endif
    </a>
    <ul class="nav-dropdown-items nav-group-items">
        {!! $slot !!}
    </ul>
</li>
