<li class="nav-item">
    <a {{ $attributes->merge(['class' => 'nav-link', 'href' => $link]) }}>
        @if ($icon != null)<i class="nav-icon {{ $icon }}"></i>@endif
        @if ($title != null) <span>{{ $title }}</span>@endif
    </a>
</li>
