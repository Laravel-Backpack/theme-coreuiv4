<li {{ $attributes->merge(['class' => 'nav-title mt-0']) }}>
    @if ($icon != null)<i class="nav-icon {{ $icon }}"></i>@endif
    @if ($title!=null) <span>{{ $title }}</span>@endif
</li>
