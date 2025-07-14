<div x-data="{ isBahasa: '{{ app()->getLocale() }}' === 'id' }">
    {{-- Mobile --}}
    <a href="{{ url(request()->segment(1) === 'en' ? str_replace('/en', '/id', request()->getRequestUri()) : str_replace('/id', '/en', request()->getRequestUri())) }}" class="lg:hidden btn flex items-center gap-2" @click="isBahasa = !isBahasa" style="padding: .5rem">
        <div class="flex relative">
            <div class="transition-all duration-500 transform" :class="{ 'opacity-100 scale-100': isBahasa, 'opacity-0 scale-0': !isBahasa }">
                @include('components.icons.flagID')
            </div>
            <div class="absolute transition-all duration-500 transform" :class="{ 'opacity-0 scale-0': isBahasa, 'opacity-100 scale-100': !isBahasa }">
                @include('components.icons.flagEN')
            </div>
        </div>
        <span class="text-gray-700 dark:text-gray-300">
            {{ __('Theme.changeLang') }}
        </span>
    </a>

    {{-- Desktop --}}
    <a href="{{ url(request()->segment(1) === 'en' ? str_replace('/en', '/id', request()->getRequestUri()) : str_replace('/id', '/en', request()->getRequestUri())) }}" class="btn hidden lg:block w-8 h-8 relative overflow-hidden" @click="isBahasa = !isBahasa">
        <div class="toggle-lang" :class="{ 'opacity-100 scale-100': isBahasa, 'opacity-0 scale-0': !isBahasa }">
            @include('components.icons.flagID')
        </div>
        <div class="toggle-lang" :class="{ 'opacity-0 scale-0': isBahasa, 'opacity-100 scale-100': !isBahasa }">
            @include('components.icons.flagEN')
        </div>
    </a>
</div>
