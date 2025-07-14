<header>
    <div class="utility-bar">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="w-full flex">
                    <a href="https://www.facebook.com/profile.php?id=61550927165561&ref=ig_profile_ac" target="_blank" aria-label="Facebook" class="social-media-link hover:text-sky-400 transition-colors duration-300">
                        @include('components.icons.facebook')
                    </a>
                    <a href="https://www.instagram.com/mulse.id/" target="_blank" aria-label="Instagram" class="social-media-link hover:text-sky-400 transition-colors duration-300">
                        @include('components.icons.instagram')
                    </a>
                    <a href="https://www.tiktok.com/@mulse.group" target="_blank" aria-label="Tiktok" class="social-media-link hover:text-sky-400 transition-colors duration-300">
                        @include('components.icons.tiktok')
                    </a>
                </div>
                <div class="utility-content">
                    @include('components.toggleLanguage')
                    @include('components.toggleDarkmode')
                </div>
            </div>
        </div>
    </div>

    @php
        $getLocale = app()->getLocale(); // Ambil locale saat ini
    @endphp
    <nav class="navbar">
        <div class="container">
            <div class="flex justify-between items-center">
                <a href="{{ url($getLocale) }}" class="text-2xl font-bold text-sky-500 dark:text-gray-100 flex items-center transition duration-500 ease-in-out py-3">
                    <img src="{{ asset($contact->logo ?? 'logo.jpg') }}" alt="Brand_Image.jpg" class="w-12 mr-4">
                    {{ $contact->site_name ?? 'Mulse' }}
                </a>

                <div class="hidden lg:flex space-x-6 items-center">
                    <a href="{{ url($getLocale) }}" class="nav-link">
                        {{ __('menu.home') }}
                    </a>

                    <div x-data="{ isDropdownOpen: false }" @mouseenter="isDropdownOpen = true" @mouseleave="isDropdownOpen = false" class="relative group">
                        <a href="{{ url($getLocale . '/services') }}">
                            <button class="nav-link flex items-center">
                                {{ __('menu.services') }}
                            </button>
                        </a>

                        <div class="nav-dropdown min-w-[200px]" :class="isDropdownOpen
                            ?
                            'opacity-100 visible scale-100 translate-y-0' :
                            'opacity-0 invisible scale-95 translate-y-3'">
                            <a href="{{ url($getLocale . 'service/construction') }}" class="nav-link-dropdown">
                                {{ __('menu.service.construction') }}
                            </a>
                            <a href="{{ url($getLocale . 'service/procurement') }}" class="nav-link-dropdown">
                                {{ __('menu.service.procurement') }}
                            </a>
                        </div>
                    </div>

                    <a href="https://katalog.mulse.id" target="_blank" class="nav-link">
                        {{ __('menu.catalog') }}
                    </a>
                    <a href="{{ $contact->inaproc_url ?? '#' }}" target="_blank" class="nav-link">
                        {{ __('menu.inaproc') }}
                    </a>
                    <a href="/{{ $getLocale }}/gallery" class="nav-link">
                        {{ __('menu.gallery') }}
                    </a>
                    <a href="/{{ $getLocale }}/about" class="nav-link">
                        {{ __('menu.about') }}
                    </a>
                    <a href="/{{ $getLocale }}/contact" class="nav-link">
                        {{ __('menu.contact') }}
                    </a>
                </div>

                <div class="lg:hidden relative w-8 h-8" x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen" class="lg:hidden relative w-8 h-8">
                        <div :class="isOpen
                            ?
                            'hamburger rotate-45 top-1/2 transform -translate-y-1/2' :
                            'hamburger top-2'"></div>
                        <div :class="isOpen
                            ?
                            'hamburger opacity-0' :
                            'hamburger top-1/2 transform -translate-y-1/2'"></div>
                        <div :class="isOpen
                            ?
                            'hamburger -rotate-45 bottom-1/2 transform translate-y-1/2' :
                            'hamburger bottom-2'"></div>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div x-data="{ isOpen: false, isDropdownOpen: false }" @keydown.escape.window="isOpen = false">
        <div class="lg:hidden fixed top-18 left-0 w-full h-full bg-black/50 backdrop-blur-sm transition-opacity duration-500 ease-in-out z-[9]" :class="{ 'opacity-100 visible': isOpen, 'opacity-0 invisible': !isOpen }" @click="isOpen = false"></div>

        <!-- Sidebar Menu -->
        <div class="bg-white dark:bg-gray-800 lg:hidden fixed top-0 right-0 w-64 h-full shadow-lg transform transition-transform duration-500 ease-in-out z-10" :class="{ 'translate-x-0': isOpen, 'translate-x-full': !isOpen }">
            <div class="p-6 flex flex-col space-y-4 mt-[72px]">
                <a href="{{ url($getLocale) }}" class="nav-link-mobile" @click="isOpen = false">
                    {{ __('menu.home') }}
                </a>

                <div>
                    <button class="nav-link-mobile flex items-center w-full relative" @click="isDropdownOpen = !isDropdownOpen">
                        {{ __('menu.services') }}
                        <span class="dropdown-arrow absolute right-2" :class="{ 'rotate-45 -translate-y-1': isDropdownOpen, '-rotate-45': !isDropdownOpen }"></span>
                    </button>
                    <div class="bg-white dark:bg-gray-800 space-y-2 rounded-lg overflow-hidden transition-all duration-500 ease-in-out" :class="{ 'max-h-[500px] opacity-100 p-2 mt-2': isDropdownOpen, 'max-h-0 opacity-0 p-0 mt-0': !isDropdownOpen }">
                        <a href="{{ url($getLocale . '/service/construction') }}" class="nav-link-mobile block" @click="isOpen = false">
                            {{ __('menu.service.construction') }}
                        </a>
                        <a href="{{ url($getLocale . '/service/procurement') }}" class="nav-link-mobile block" @click="isOpen = false">
                            {{ __('menu.service.procurement') }}
                        </a>
                    </div>
                </div>

                <a href="https://katalog.mulse.id" target="_blank" class="nav-link-mobile" @click="isOpen = false">
                    {{ __('menu.catalog') }}
                </a>
                <a href="https://katalog.inaproc.id/mulse-citra-nusa" target="_blank" class="nav-link-mobile" @click="isOpen = false">
                    {{ __('menu.inaproc') }}
                </a>
                <a href="/{{ url($getLocale . '/gallery') }}" class="nav-link-mobile" @click="isOpen = false">
                    {{ __('menu.gallery') }}
                </a>
                <a href="/{{ url($getLocale . '/about') }}" class="nav-link-mobile" @click="isOpen = false">
                    {{ __('menu.about') }}
                </a>
                <a href="/{{ url($getLocale . '/contact') }}" class="nav-link-mobile" @click="isOpen = false">
                    {{ __('menu.contact') }}
                </a>

                {{-- Komponen toggle bahasa dan dark mode bisa diganti dengan komponen Blade atau Alpine --}}
                @include('components.toggleLanguage')
                @include('components.toggleDarkmode')
            </div>
        </div>
    </div>
</header>
