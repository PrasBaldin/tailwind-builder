<div x-data="{
    isDarkMode: localStorage.getItem('theme') === 'dark',
    toggleTheme() {
        this.isDarkMode = !this.isDarkMode;
        localStorage.setItem('theme', this.isDarkMode ? 'dark' : 'light');
        document.documentElement.classList.toggle('dark', this.isDarkMode);
    }
}" x-init="document.documentElement.classList.toggle('dark', isDarkMode)">
    {{-- Mobile --}}
    <button @click="toggleTheme" class="lg:hidden btn h-11 flex items-center" style="padding: .5rem">
        <div class="block">
            <div class="absolute flex items-center gap-2">
                <div class="toggle-dark-mode-mobile gap-2" :class="{ 'opacity-100 rotate-0': isDarkMode, 'opacity-0 rotate-90': !isDarkMode }">
                    @include('components.icons.themeLightmode')
                </div>
                <span class="text-gray-700 dark:text-gray-300" :class="{ 'opacity-100': isDarkMode, 'opacity-0': !isDarkMode }">
                    {{ __('Theme.lightMode') }}
                </span>
            </div>
            <div class="flex items-center gap-2">
                <div class="toggle-dark-mode-mobile gap-2" :class="{ 'opacity-0 -rotate-90': isDarkMode, 'opacity-100 rotate-0': !isDarkMode }">
                    @include('components.icons.themeDarkmode')
                </div>
                <span class="text-gray-700 dark:text-gray-300" :class="{ 'opacity-0': isDarkMode, 'opacity-100': !isDarkMode }">
                    {{ __('Theme.darkMode') }}
                </span>
            </div>
        </div>
    </button>

    {{-- Desktop --}}
    <button @click="toggleTheme" class="btn hidden lg:block w-8 h-8 relative overflow-hidden">
        <div class="toggle-dark-mode text-gray-700 dark:text-gray-100" :class="{ 'opacity-100 rotate-0': isDarkMode, 'opacity-0 rotate-90': !isDarkMode }">
            @include('components.icons.themeLightmode')
        </div>
        <div class="toggle-dark-mode text-gray-100 dark:text-gray-700" :class="{ 'opacity-0 -rotate-90': isDarkMode, 'opacity-100 rotate-0': !isDarkMode }">
            @include('components.icons.themeDarkmode')
        </div>
    </button>
</div>
