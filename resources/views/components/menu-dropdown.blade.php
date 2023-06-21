<li class="nav-group">
    <a class="nav-link nav-group-toggle" href="#">
        @if($icon != null)<i class="nav-icon {{ $icon }}"></i>@endif
        @if($title != null) <span>{{ $title }}</span>@endif
    </a>
    <ul class="nav-dropdown-items nav-group-items">
        {!! $slot !!}
    </ul>
</li>
