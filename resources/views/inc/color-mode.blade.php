<script>
    const defaultColorMode = window.localStorage.getItem('mode')
        ? window.localStorage.getItem('mode')
        : '{{ backpack_theme_config('options.defaultColorMode') ?? 'light' }}';

    setTheme(defaultColorMode);

    function switchTheme() {
        const mode = window.localStorage.getItem('mode');
        !mode || mode === 'light'
            ? setTheme('dark')
            : setTheme('light');
    }

    function setTheme(theme) {
        const body = document.getElementsByTagName('body')[0];
        const previousTheme = theme === 'light'
            ? 'dark'
            : 'light';

        const html = document.getElementsByTagName('html')[0];
        html.dataset.bsTheme = theme;

        body.classList.remove('theme-' + previousTheme);
        body.classList.add('theme-' + theme);

        window.localStorage.setItem('mode', theme);
    }
</script>