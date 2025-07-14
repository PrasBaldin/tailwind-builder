@extends('layouts.app')
@section('content')
    <section class="mt-[72px] lg:mt-[112px]">
        <div class="banner">
            <div class="banner-mask"></div>
            <div class="container z-[1] relative">
                <div class="banner-content">
                    <h4 class="text-3xl font-bold text-theme transform translate-x-[-18px]">
                        <span class="text-transparent select-none">.</span>
                        {{ __('Banner.typewriterText') }}
                    </h4>
                    <ul class="breadcrumbs">
                        <li>
                            <a href="{{ url('/') }}" class="text-theme">
                                {{ __('Banner.home') }}
                            </a>
                        </li>
                        <li class="text-theme">
                            /
                        </li>
                        <li>
                            <a href="{{ url('/about') }}" class="text-sky-500 hover:text-sky-600 transition duration-500 ease-in-out">
                                {{ __('Banner.about') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/about-bg-1.webp') }}')">
            <div class="about-mask"></div>
        </div>
        <div class="container relative z-[2] pb-[3rem]">
            <div class="flex flex-col lg:flex-row items-center">
                {{-- Gambar Profil --}}
                <div class="w-full lg:w-1/2 m-4 max-h-[400px] overflow-hidden transition duration-1000 ease-in-out transform opacity-0">
                    <img src="{{ asset('images/about-profile.webp') }}" alt="About image" width="900" height="900" class="rounded shadow w-full" loading="lazy">
                </div>

                {{-- Deskripsi --}}
                <div class="w-full lg:w-1/2 p-4 text-theme">
                    <h4 class="mb-3 text-sky-500 font-semibold tracking-[.25em] uppercase animate-fade-in-down">
                        {{ __('title') }}
                    </h4>
                    <h3 class="text-3xl lg:text-4xl font-bold mb-4 lg:pr-8">
                        {{ __('subtitle') }}
                    </h3>
                    <p class="mb-4 ">
                        {{ __('desc.1') }}
                    </p>
                    <p class="mb-4 ">
                        {{ __('desc.2') }}
                    </p>
                    <p class="mb-4 ">
                        {{ __('desc.3') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="pt-1 lg:pt-4 pb-20 bg-gradient-to-b from-white to-gray-200 dark:from-gray-900 dark:to-gray-800 z-[2]">
            <div class="container mx-auto px-4">
                <h4 class="mb-10 text-xl text-sky-500 font-bold tracking-[.25em] uppercase relative inline-block text-center w-full">
                    {{ __('About.visiMisi.title') }}
                </h4>

                <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                    {{-- Card Visi --}}
                    <div class="flex-1 h-full p-8 z-[2] card-vision-theme">
                        <h3 class="text-2xl font-semibold text-theme mb-4">
                            {{ __('About.visiMisi.vision.title') }}
                        </h3>
                        <p class="">
                            {{ __('About.visiMisi.vision.desc') }}
                        </p>
                    </div>

                    {{-- Card Misi --}}
                    <div class="flex-1 h-full  p-8 z-[2] card-mission-theme">
                        <h3 class="text-2xl font-semibold text-theme mb-4">
                            {{ __('About.visiMisi.mission.title') }}
                        </h3>
                        <ul class="list-disc list-inside">
                            <li>{{ __('About.visiMisi.mission.desc.1') }}</li>
                            <li>{{ __('About.visiMisi.mission.desc.2') }}</li>
                            <li>{{ __('About.visiMisi.mission.desc.3') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Client & Partner --}}
    {{-- @include('components.client-partner') --}}
@endsection
