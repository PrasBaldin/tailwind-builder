@extends('layouts/app')
@section('content')
    <section class="relative pb-10 pt-[4rem] md:pt-[16rem] lg:pt-[15rem] xl:pt-[13rem]">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/about-bg-1.webp') }}')">
            <div class="about-mask"></div>
        </div>
        <div class="container relative z-[2] pb-[3rem]">
            <div class="flex flex-col lg:flex-row items-center">
                {{-- Gambar Profil --}}
                <div class="w-full lg:w-1/2 m-4 max-h-[400px] overflow-hidden transition duration-1000 ease-in-out transform opacity-0 animate-fade-in-up">
                    <img src="{{ asset('images/about-profile.webp') }}" alt="About image" width="900" height="900" class="rounded shadow w-full" loading="lazy">
                </div>

                {{-- Deskripsi --}}
                <div class="w-full lg:w-1/2 p-4 text-gray-700 dark:text-gray-100 transition duration-500 ease-in-out">
                    <h4 class="mb-3 text-sky-500 font-semibold tracking-[.25em] uppercase animate-fade-in-down">
                        {{ __('title') }}
                    </h4>
                    <h3 class="text-3xl lg:text-4xl font-bold mb-4 lg:pr-8 animate-fade-in-up">
                        {{ __('subtitle') }}
                    </h3>
                    <p class="mb-4 animate-fade-in-up delay-[200ms]">
                        {{ __('desc.1') }}
                    </p>
                    <p class="mb-4 animate-fade-in-up delay-[250ms]">
                        {{ __('desc.2') }}
                    </p>
                    <p class="mb-4 animate-fade-in-up delay-[300ms]">
                        {{ __('desc.3') }}
                    </p>
                </div>
            </div>
        </div>

    </section>
@endsection
