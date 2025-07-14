<footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Company Info & Social Media --}}
            <div>
                <div class="flex items-center">
                    <img src="{{ $contact->logo ?? '-' }}" alt="logo">
                    <span class="ml-4 font-bold text-xl bg-gradient-to-r from-sky-400 to-sky-200 bg-clip-text text-transparent">
                        {{ $contact->site_name ?? 'Mulse' }}
                    </span>
                </div>
                <p class="text-sm">{{ __('Footer.profile') }}</p>
                <div class="flex mt-4 space-x-4">
                    <a href="{{ $contact->facebook_url ?? '#' }}" target="_blank" aria-label="Facebook" class="hover:text-sky-400 transition-colors duration-300">
                        @include('components.icons.facebook')
                    </a>
                    <a href="{{ $contact->instagram_url ?? '#' }}" target="_blank" aria-label="Instagram" class="hover:text-sky-400 transition-colors duration-300">
                        @include('components.icons.instagram')
                    </a>
                    <a href="{{ $contact->tiktok_url ?? '#' }}" target="_blank" aria-label="Tiktok" class="hover:text-sky-400 transition-colors duration-300">
                        @include('components.icons.tiktok')
                    </a>
                </div>
            </div>

            {{-- Kontak --}}
            <div>
                <h2 class="text-lg font-semibold mb-2">{{ __('menu.contact') }}</h2>
                <div class="w-12 md:w-[30%] rounded h-1 mb-4 bg-gradient-to-r from-sky-400 to-transparent"></div>
                <table class="space-y-3 text-sm">
                    <tbody>
                        <tr>
                            <td class="py-2">
                                <a href="https://goo.gl/maps/oJyAZpEak73gKhBG8" target="_blank">
                                    @include('components.icons.address')
                                </a>
                            </td>
                            <td>
                                <a href="https://goo.gl/maps/oJyAZpEak73gKhBG8" target="_blank">
                                    {{ $contact->contact_address ?? '-' }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <a href="mailto:{{ $contact->contact_email ?? '#' }}" target="_blank">
                                    @include('components.icons.email')
                                </a>
                            </td>
                            <td>
                                <a href="mailto:{{ $contact->contact_email ?? '#' }}" target="_blank">
                                    {{ $contact->contact_email ?? '-' }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <a href="https://api.whatsapp.com/send?phone=6285260062002&text=Hallo%20Mulse!%20saya%20membutuhkan%20bantuan%20terkait%20layanan%20di%20mulse.id" target="_blank">
                                    @include('components.icons.whatsapp')
                                </a>
                            </td>
                            <td>
                                <a href="https://api.whatsapp.com/send?phone=6285260062002&text=Hallo%20Mulse!%20saya%20membutuhkan%20bantuan%20terkait%20layanan%20di%20mulse.id" target="_blank">
                                    {{ $contact->contact_wa ?? '-' }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <a href="tel:{{ $contact->contact_phone ?? '#' }}" target="_blank">
                                    @include('components.icons.phone')
                                </a>
                            </td>
                            <td>
                                <a href="tel:{{ $contact->contact_phone ?? '#' }}" target="_blank">
                                    {{ $contact->contact_phone ?? '-' }}
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Navigation --}}
            @php
                $getLocale = app()->getLocale(); // Ambil locale saat ini
            @endphp
            <div>
                <h2 class="text-lg font-semibold mb-2">{{ __('Footer.menu') }}</h2>
                <div class="w-12 md:w-[30%] rounded h-1 mb-4 bg-gradient-to-r from-sky-400 to-transparent"></div>
                <div class="flex flex-col space-y-2">
                    <a href="{{ url($getLocale . '/') }}" class="hover:text-sky-400 transition-colors duration-300 flex gap-2 items-center">
                        {{ __('menu.home') }}
                    </a>

                    <a href="https://katalog.inaproc.id/mulse-citra-nusa" target="_blank" class="hover:text-sky-400 transition-colors duration-300 flex gap-2 items-center">
                        @include('components.icons.arrowRight')
                        {{ __('menu.catalog') }}
                    </a>

                    <a href="https://katalog.inaproc.id/mulse-citra-nusa" target="_blank" class="hover:text-sky-400 transition-colors duration-300 flex gap-2 items-center">
                        @include('components.icons.arrowRight')
                        {{ __('menu.inaproc') }}
                    </a>

                    <a href="{{ url($getLocale . '/gallery') }}" class="hover:text-sky-400 transition-colors duration-300 flex gap-2 items-center">
                        @include('components.icons.arrowRight')
                        {{ __('menu.gallery') }}
                    </a>

                    <a href="{{ url($getLocale . '/about') }}" class="hover:text-sky-400 transition-colors duration-300 flex gap-2 items-center">
                        @include('components.icons.arrowRight')
                        {{ __('menu.about') }}
                    </a>
                </div>
            </div>

            {{-- Layanan --}}
            <div>
                <h2 class="text-lg font-semibold mb-2">{{ __('menu.services') }}</h2>
                <div class="w-12 md:w-[30%] rounded h-1 mb-4 bg-gradient-to-r from-sky-400 to-transparent"></div>
                <div class="flex flex-col space-y-2">
                    <a href="{{ url($getLocale . '/service/construction') }}" class="hover:text-sky-400 transition-colors duration-300 flex gap-2 items-center">
                        @include('components.icons.arrowRight')
                        {{ __('menu.service.construction') }}
                    </a>
                    <a href="{{ url($getLocale . '/service/construction') }}" class="hover:text-sky-400 transition-colors duration-300 flex gap-2 items-center">
                        @include('components.icons.arrowRight')
                        {{ __('menu.service.procurement') }}
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 border-t border-gray-700 pt-6 text-center text-sm">
            &copy; {{ now()->year }}
            <a class="hover:text-sky-400 transition duration-300" href="{{ url($getLocale) }}">
                {{ $contact->site_name ?? 'Mulse' }}
            </a>. {{ __('Footer.copyright') }}
        </div>
    </div>
</footer>
