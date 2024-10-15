{{-- =================================================== --}}
{{-- ========== Top menu items (ordered left) ========== --}}
{{-- =================================================== --}}
<ul class="header-nav d-none d-lg-flex">

    @if (backpack_auth()->check())
        {{-- Topbar. Contains the left part --}}
        @include(backpack_view('inc.topbar_left_content'))
    @endif

</ul>
{{-- ========== End of top menu left items ========== --}}



{{-- ========================================================= --}}
{{-- ========= Top menu right items (ordered right) ========== --}}
{{-- ========================================================= --}}
<ul class="header-nav ms-auto @if(backpack_theme_config('html_direction') == 'rtl') mr-0 @endif">
    @if (backpack_auth()->guest())
        <li class="nav-item"><a class="nav-link" href="{{ route('backpack.auth.login') }}">{{ trans('backpack::base.login') }}</a>
        </li>
        @if (config('backpack.base.registration_open'))
            <li class="nav-item"><a class="nav-link" href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></li>
        @endif
    @else
        {{-- Topbar. Contains the right part --}}
        @include(backpack_view('inc.topbar_right_content'))
        @include(backpack_view('inc.menu_user_dropdown'))
    @endif
</ul>
{{-- ========== End of top menu right items ========== --}}
