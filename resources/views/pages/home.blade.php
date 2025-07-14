@extends('layouts/app')
@section('content')
    <section class="relative pb-10 pt-[4rem] md:pt-[16rem] lg:pt-[15rem] xl:pt-[13rem]">
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
    </section>

    {{-- Section Services --}}
    {{-- JASA --}}
    @php
        // Dummy untuk data services
        $services = [
            [
                'icon' => 'components.icons.services.construction',
                'title' => __('construction.content.1.title'),
                'desc' => __('construction.content.1.desc'),
            ],
            [
                'icon' => 'components.icons.services.renovation',
                'title' => __('construction.content.2.title'),
                'desc' => __('construction.content.2.desc'),
            ],
            [
                'icon' => 'components.icons.services.design',
                'title' => __('construction.content.3.title'),
                'desc' => __('construction.content.3.desc'),
            ],
            [
                'icon' => 'components.icons.services.consultation',
                'title' => __('construction.content.4.title'),
                'desc' => __('construction.content.4.desc'),
            ],
            [
                'icon' => 'components.icons.services.waterproofing',
                'title' => __('construction.content.5.title'),
                'desc' => __('construction.content.5.desc'),
            ],
            [
                'icon' => 'components.icons.services.electrical',
                'title' => __('construction.content.6.title'),
                'desc' => __('construction.content.6.desc'),
            ],
        ];
    @endphp

    {{-- 
    Sesuaikan key-value loop ketika sudah menggunakan database
    @include('components.icons.' . $item->icon)
    {{ $item->title }}
    {{ $item->desc }}
 --}}

    <section class="w-full flex flex-col lg:flex-row">
        {{-- Left side (services cards) --}}
        <div class="w-full lg:w-3/5 bg-cover relative" style="background-image: url('{{ asset('img/services-bg.webp') }}')">
            <div class="z-[1] absolute inset-0 bg-sky-100/40 dark:bg-gray-800/90 transition duration-500 ease-in-out"></div>
            <div class="z-[2] relative left-container m-auto">
                <div class="py-20">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 z-[2]">
                        @foreach ($services as $index => $item)
                            <div class="h-full service-card">
                                <div class="mb-4 flex justify-center text-sky-500 dark:text-sky-300">
                                    @include($item['icon'])
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2 text-center">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 text-center">
                                    {{ $item['desc'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Right side (description) --}}
        <div class="w-full lg:w-2/5 bg-theme-primary text-theme">
            <div class="right-container m-auto">
                <div class="py-20">
                    <h4 class="mb-3 text-sky-500 font-semibold tracking-[.25em] uppercase animate-fade-in-down ">
                        {{ __('ourServices') }}
                    </h4>
                    <h3 class="mb-4 text-4xl font-bold ">
                        {{ __('construction.title') }}
                    </h3>
                    <p class="py-2 my-2 ">
                        {{ __('construction.moreDesc.1') }}
                    </p>
                    <p class="py-2 my-2 ">
                        {{ __('construction.moreDesc.2') }}
                    </p>
                    <p class="py-2 my-2 ">
                        {{ __('construction.moreDesc.3') }}
                    </p>
                    <div class="py-2 my-2 ">
                        <a href="{{ url('/services/construction') }}">
                            <button class="btn btn-primary-border">
                                {{ __('viewDetail') }}
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PENGADAAN --}}
    @php
        $procurements = [['title' => __('procurement.content.1.title'), 'img' => 'img/proc-office.webp'], ['title' => __('procurement.content.2.title'), 'img' => 'img/proc-medical.webp'], ['title' => __('procurement.content.3.title'), 'img' => 'img/proc-cleaning.webp'], ['title' => __('procurement.content.4.title'), 'img' => 'img/proc-electronic.webp'], ['title' => __('procurement.content.5.title'), 'img' => 'img/proc-apparel.webp'], ['title' => __('procurement.content.6.title'), 'img' => 'img/proc-souvenir.webp']];
    @endphp

    <section class="bg-theme-secondary text-theme py-20 lg:py-[8rem]">
        <div class="container">
            <div class="w-full flex flex-col lg:flex-row gap-6">
                {{-- Left Text Section --}}
                <div class="w-full lg:w-1/4 space-y-4">
                    <h4 class="mb-3 text-sky-500 font-semibold tracking-[.25em] uppercase animate-fade-in-down ">
                        {{ __('ourServices') }}
                    </h4>
                    <h3 class="text-4xl font-bold ">
                        {{ __('procurement.title') }}
                    </h3>
                    <p class="pr-5 text-lg text-gray-600 dark:text-gray-300 ">
                        {{ __('procurement.moreDesc.1') }}
                    </p>
                    <p class="pr-5 text-lg text-gray-600 dark:text-gray-300 ">
                        {{ __('procurement.moreDesc.2') }}
                    </p>
                    <a href="{{ url('/services/procurement') }}">
                        <button class="btn btn-primary-border my-4 ">
                            {{ __('procurement.viewDetail') }}
                        </button>
                    </a>
                </div>

                {{-- Right Grid Section --}}
                <div class="w-full lg:w-3/4">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        @foreach ($procurements as $index => $item)
                            <div class="proc-card group">
                                <img src="{{ asset($item['img']) }}" alt="Procurement image" width="1000" height="1000" class="bg-cover z-[1] transform transition duration-500 scale-[1.01] group-hover:scale-[1.05]" loading="lazy">
                                <div class="proc-card-overlay p-20 md:p-5 h-full">
                                    <div class="p-5 border-2 border-sky-500 h-full relative">
                                        <div class="absolute inset-0 bg-theme-secondary opacity-80"></div>
                                        <div class="relative z-[1] flex flex-col justify-center h-full">
                                            <h4 class="font-semibold text-lg mt-3">
                                                {{ $item['title'] }}
                                            </h4>
                                            <a href="https://katalog.inaproc.id/mulse-citra-nusa" target="_blank">
                                                <button class="btn btn-primary mt-4 inline-block">
                                                    {{ __('procurement.viewDetail') }}
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 
    |
    | GALLERY SECTION
    |
    --}}
    @php
        $galleryItems = [
            [
                'img' => 'img/gallery-1-1.jpg',
                'category' => 'Renovasi & Perbaikan',
                'title' => 'Pekerjaan Renovasi Interior Kantor',
            ],
            [
                'img' => 'img/gallery-16-1.jpg',
                'category' => 'Renovasi & Perbaikan',
                'title' => 'Pembersihan Dinding ACP Gedung',
            ],
            [
                'img' => 'img/gallery-10-0.jpg',
                'category' => 'Konstruksi',
                'title' => 'Pekerjaan Pembangunan Klinik di Area Kantor',
            ],
            [
                'img' => 'img/gallery-9-1.jpg',
                'category' => 'Electrical Engineering',
                'title' => 'Pekerjaan Pemasangan Lampu Sorot',
            ],
            [
                'img' => 'img/gallery-15-1.jpg',
                'category' => 'Waterproofing',
                'title' => 'Pekerjaan Coating Balkon Gedung',
            ],
            [
                'img' => 'img/gallery-7-1.jpg',
                'category' => 'Konstruksi',
                'title' => 'Pekerjaan Pembuatan Pos Satpam',
            ],
        ];
    @endphp

    <section>
        <div class="bg-theme-primary py-20 flex justify-center text-center">
            <div class="w-full mb-20 pb-20">
                <h4 class="mb-3 text-sky-500 font-semibold tracking-[.25em] uppercase">
                    {{ __('Gallery.recentWork.title') }}
                </h4>
                <h3 class="w-full text-gray-700 dark:text-gray-100 text-3xl md:text-4xl font-bold">
                    {{ __('Gallery.recentWork.subtitle') }}
                </h3>
            </div>
        </div>

        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 relative top-[-150px]">
                @foreach ($galleryItems as $item)
                    <div class="shadow-md overflow-hidden group relative cursor-pointer">
                        <img src="{{ asset($item['img']) }}" alt="{{ $item['title'] }}" width="1000" height="1000" class="transform transition-transform duration-500 group-hover:scale-[1.05]" loading="lazy" />
                        <div class="overlay absolute inset-0">
                            <div class="text-gray-100 transition duration-500 opacity-0 group-hover:opacity-100 h-full">
                                <div class="h-full relative">
                                    <div class="absolute inset-0 bg-black transition duration-500 opacity-0 group-hover:opacity-50 z-0"></div>
                                    <div class="flex flex-col justify-end h-full w-full p-6 relative z-[2]">
                                        <p class="uppercase tracking-[.05em] mb-2 text-sky-500">
                                            {{ $item['category'] }}
                                        </p>
                                        <h3 class="text-xl lg:text-2xl font-semibold text-gray-100">
                                            {{ $item['title'] }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 
    |
    | CLIENTS & PARTNERS
    |
    --}}
    @php
        $clients = ['img/client-1.png', 'img/client-2.png', 'img/client-3.png', 'img/client-4.png', 'img/client-5.png', 'img/client-6.png'];
    @endphp

    <section class="bg-theme-primary py-20">
        <div class="container text-center">
            <h4 class="mb-3 text-sky-500 font-semibold tracking-[.25em] uppercase">
                {{ __('About.clientPartner.title') }}
            </h4>
            <h3 class="w-full text-gray-700 dark:text-gray-100 text-3xl md:text-4xl font-bold">
                {{ __('About.clientPartner.subtitle') }}
            </h3>

            <div class="py-8">
                <div class="grid grid-cols-2 lg:grid-cols-6 gap-4 items-center">
                    @foreach ($clients as $logo)
                        <div class="flex justify-center">
                            <img src="{{ asset($logo) }}" alt="Client & Partner" width="200" height="100" loading="lazy" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{--
    |
    | CONTACT
    |
    --}}
    <section class="bg-theme-secondary text-theme py-16">
        <div class="container">
            {{-- Judul --}}
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h4 class="mb-3 text-sky-500 font-semibold tracking-[.25em] uppercase">
                    {{ __('Contact.title') }}
                </h4>
                <h3 class="text-3xl md:text-4xl font-bold">
                    {{ __('Contact.subtitle') }}
                </h3>
            </div>

            {{-- Form & Informasi --}}
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Form --}}
                <div class="p-8 bg-gray-200 dark:bg-gray-600 rounded">
                    <h3 class="text-xl font-semibold mb-6">
                        {{ __('Contact.message.title') }}
                    </h3>

                    {{-- Alert Message --}}
                    @if (session('success'))
                        <div class="mb-4 rounded bg-green-500 p-4 text-white">
                            {{ session('success') }}
                        </div>
                    @elseif(session('error'))
                        <div class="mb-4 rounded bg-red-500 p-4 text-white">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="#" class="space-y-5">
                        @csrf

                        {{-- Name --}}
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium">
                                {{ __('Contact.message.name') }}
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full p-3 rounded bg-gray-300 dark:bg-gray-500 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-sky-500 transition duration-500 ease-in-out" required />
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium">
                                {{ __('Contact.message.email') }}
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full p-3 rounded bg-gray-300 dark:bg-gray-500 border @error('email') border-red-500 focus:ring-red-500 @else border-gray-300 focus:ring-sky-500 @enderror dark:border-gray-600 focus:outline-none focus:ring-2 transition duration-500 ease-in-out" required />
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Subject --}}
                        <div>
                            <label for="subject" class="block mb-2 text-sm font-medium">
                                {{ __('Contact.message.subject') }}
                            </label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" class="w-full p-3 rounded bg-gray-300 dark:bg-gray-500 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-sky-500 transition duration-500 ease-in-out" required />
                            @error('subject')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium">
                                {{ __('Contact.message.messages') }}
                            </label>
                            <textarea id="message" name="message" rows="5" required class="w-full p-3 rounded bg-gray-300 dark:bg-gray-500 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-sky-500 transition duration-500 ease-in-out">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Contact.message.submit') }}
                        </button>
                    </form>
                </div>

                {{-- Info Kontak --}}
                <div class="p-8">
                    <h3 class="text-xl font-semibold mb-6">
                        {{ __('Contact.contactInfo.title') }}
                    </h3>

                    <ul class="space-y-6">
                        <li>
                            <h4 class="text-sm uppercase font-bold mb-1">
                                {{ __('Contact.contactInfo.location') }}
                            </h4>
                            <p class="dark:text-gray-400 text-gray-700 transition duration-500 ease-in-out">
                                Jl. SMA 14 No. 47 B Kel. Cililitan,<br>
                                Kec. Keramat Jati, Jakarta Timur<br>
                                Indonesia
                            </p>
                        </li>

                        <li>
                            <h4 class="text-sm uppercase font-bold mb-1">
                                {{ __('Contact.contactInfo.email') }}
                            </h4>
                            <a href="mailto:info@mulse.id" target="_blank" class="dark:text-gray-400 text-gray-700 hover:text-sky-500 dark:hover:text-sky-500 transition duration-500 ease-in-out">
                                info@mulse.id
                            </a>
                        </li>

                        <li>
                            <h4 class="text-sm uppercase font-bold mb-1">
                                {{ __('Contact.contactInfo.call') }}
                            </h4>
                            <a href="tel:+622122049859" target="_blank" class="dark:text-gray-400 text-gray-700 hover:text-sky-500 dark:hover:text-sky-500 transition duration-500 ease-in-out">
                                Phone: (+62) 21 2204 9859
                            </a>
                            <br>
                            <a href="https://api.whatsapp.com/send?phone=6285260062002&text=Hallo%20Mulse!%20saya%20membutuhkan%20bantuan%20terkait%20layanan%20di%20mulse.id" target="_blank" class="dark:text-gray-400 text-gray-700 hover:text-sky-500 dark:hover:text-sky-500 transition duration-500 ease-in-out">
                                WA: (+62) 852 6006 2002
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
