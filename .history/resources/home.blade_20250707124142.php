@extends('layouts.app')
@section('content')
    <section class="bg-gray-900/50 text-white items-center">
        <!-- Background Image -->
        <div class="absolute inset-0 h-full bg-[url('/images/bg-1.jpg')] bg-cover bg-center z-[-2] max-h-[589px]"></div>
        <!-- Overlay Gradient -->
        <div class="absolute inset-0 h-full bg-gradient-to-br from-gray-900/100 to-transparent z-[-1] max-h-[589px]"></div>

        <div id="heroSection" class="container flex flex-col md:flex-row">
            <div class="md:w-1/2 mb-6 md:mb-0 ">
                <div class="flex items-center h-full">
                    <div class="pt-10 pb-20">
                        <h1 class="lg:text-6xl md:text-4xl text-4xl uppercase font-bold leading-tight" @aos('fade-up', 200, '#heroSection')>
                            {{ $contact->site_name ? $contact->site_name : 'PT. Harta Gemilang Aselindo' }}
                        </h1>
                        <p class="mt-4 tracking-widest" @aos('fade-up', 300, '#heroSection')>
                            {{ __('home.subheadline') }}
                        </p>
                        <div class="mt-6">
                            <div class="inline-block" @aos('fade-up', 400, '#heroSection')>
                                <a href="{{ url(app()->getLocale() . '/contact') }}" class="btn button-primary hover:scale-105 transition-transform duration-300">
                                    {{ __('contact.button') }}
                                </a>
                            </div>
                            <div class="inline-block" @aos('fade-up', 500, '#heroSection')>
                                <a href="https://katalog.inaproc.id/harta-gemilang-aselindo" target="_blank" class="btn button-secondary bg-transparent hover:bg-white/80 text-white hover:text-green-700 border-2 border-white hover:border-green-700 ml-4 hover:scale-105 transition-transform duration-300">
                                    {{ __('contact.view_eCatalog') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="pb-20 pt-5 lg:pt-20 bg-gray-100">
        <div class="container">
            <div id="serviceHeader" class="flex flex-col md:flex-row gap-4 justify-between items-center py-10 mb-10">
                <div class="w-full md:w-1/2">
                    <h2 class="uppercase tracking-widest text-green-700" @aos('fade-up', 200, '#serviceHeader', 200)>
                        {{ __('service.title') }}
                    </h2>
                    <p class="text-6xl mt-4 text-gray-900 font-bold" @aos('fade-up', 300, '#serviceHeader', 200)>
                        {{ __('service.subtitle') }}
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <p class="mb-10 text-gray-700" @aos('fade-up', 400, '#serviceHeader', 200)>
                        {{ __('service.description') }}
                    </p>
                    <div class="inline-block" @aos('fade-up', 500, '#serviceHeader', 200)>
                        <a href="{{ route('services', ['lang' => app()->getLocale()]) }}" class="btn button-secondary inline-flex items-center gap-2 hover:scale-105 transition-transform duration-300">
                            <span>{{ __('service.learn_more') }}</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @php
                $count = count($services);
                if ($count >= 4) {
                    $gridCols = 4;
                    $gridClass = 'grid-cols-4';
                } elseif ($count === 3) {
                    $gridCols = 3;
                    $gridClass = 'grid-cols-3';
                } elseif ($count === 2) {
                    $gridCols = 2;
                    $gridClass = 'grid-cols-2';
                } else {
                    $gridCols = 1;
                    $gridClass = 'grid-cols-1';
                }

                $baseDelay = 100;
                $delay = 0;
            @endphp
            <div class="grid grid-cols-1 md:{{ $gridClass }} gap-8">
                @foreach ($services as $index => $service)
                    @php
                        $lang = App::getLocale();
                        $caption = $service->translations->where('column_name', 'service_name')->where('language', $lang)->first();
                        $delay = ($index % $gridCols) * $baseDelay;
                    @endphp
                    <a href="{{ route('service.show', ['lang' => $lang, 'slug' => $service->slug]) }}" class="group relative block rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300" @aos('fade-up', $delay)>
                        <img src="{{ asset($service->image ? $service->image : 'image.jpg') }}" alt="{{ $caption->translated_text ? $caption->translated_text : 'Untitled' }}" class="w-full h-[350px] object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-transparent to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-semibold text-white drop-shadow-[0_1px_4px_rgba(0,0,0,1)]">
                                {{ $caption->translated_text ? $caption->translated_text : 'Untitled' }}
                            </h3>
                            <p class="mt-2 text-white hidden drop-shadow-[0_1px_4px_rgba(0,0,0,1)] group-hover:block transition-all duration-300">
                                {{ $service->service_desc ? $service->service_desc->translated_text : 'Null' }}
                            </p>
                        </div>
                        <span class="absolute top-4 right-4 bg-green-700 text-white px-3 py-1 rounded-full text-xs font-bold shadow">
                            {{ $index + 1 }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-10 bg-gray-100">
        <div class="container">
            <div id="aboutHeader" class="w-full md:w-3/4">
                <h2 class="uppercase tracking-widest text-green-700" @aos('fade-up', 200, '#aboutHeader', 200)>
                    {{ __('about.title') }}
                </h2>
                <p class="text-2xl md:text-4xl mt-4 font-bold" @aos('fade-up', 300, '#aboutHeader', 200)>
                    {{ __('about.subtitle') }}
                </p>
            </div>
            <div class="flex flex-col md:flex-row gap-20 justify-start mt-4 md:mt-10">
                <div id="aboutContent" class="w-full md:w-1/2">
                    <p class="mb-4" @aos('fade-up', 400, '#aboutContent')>
                        {{ __('about.description.1') }}
                    </p>
                    <p class="mb-4" @aos('fade-up', 500, '#aboutContent')>
                        {{ __('about.description.2') }}
                    </p>
                    <div class="inline-block" @aos('fade-up', 600, '#aboutContent')>
                        <a href="{{ route('about', ['lang' => app()->getLocale()]) }}" class="btn button-secondary hover:scale-105 transition-transform duration-300">
                            {{ __('about.learn_more') }}
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-1/2" @aos('fade-down', 300)>
                    <img src="{{ asset('images/about.jpg') }}" alt="about.jpg" class="w-[500px] h-[450px] md:relative md:top-[-20px] lg:top-[-50px] object-cover rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-br from-green-900 to-green-700 text-white py-20">
        <div class="container mx-auto py-10">
            <h1 class="text-center text-2xl md:text-4xl font-bold mb-8" @aos('fade-up', 200)>
                {{ __('about.benefits.title') }}
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 rounded-lg">
                    <div class="mb-4" @aos('fade-up', 400)>
                        <i class="fas fa-check-circle text-4xl"></i>
                    </div>
                    <h2 class="text-2xl lg:text-4xl font-semibold mb-4" @aos('fade-up', 500)>
                        {{ __('about.benefits.reliability_title') }}
                    </h2>
                    <p class="pb-4" @aos('fade-up', 600)>
                        {{ __('about.benefits.reliability_desc') }}
                    </p>
                </div>
                <div class="p-6 rounded-lg">
                    <div class="mb-4" @aos('fade-up', 800)>
                        <i class="fas fa-lightbulb text-4xl"></i>
                    </div>
                    <h2 class="text-2xl lg:text-4xl font-semibold mb-4" @aos('fade-up', 900)>
                        {{ __('about.benefits.innovation_title') }}
                    </h2>
                    <p class="pb-4" @aos('fade-up', 1000)>
                        {{ __('about.benefits.innovation_desc') }}
                    </p>
                </div>
                <div class="p-6 rounded-lg">
                    <div class="mb-4" @aos('fade-up', 1200)>
                        <i class="fas fa-user-tie text-4xl"></i>
                    </div>
                    <h2 class="text-2xl lg:text-4xl font-semibold mb-4" @aos('fade-up', 1300)>
                        {{ __('about.benefits.professional_title') }}
                    </h2>
                    <p class="pb-4" @aos('fade-up', 1400)>
                        {{ __('about.benefits.professional_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-20 bg-white relative">
        <div class="container mx-auto">
            <div id="portfolioHeader" class="flex flex-col md:flex-row gap-4 justify-between items-center py-10 mb-10">
                <div class="w-full md:w-1/2">
                    <h2 class="uppercase tracking-widest text-green-700" @aos('fade-up', 200, '#portfolioHeader', 200)>
                        {{ __('portfolio.title') }}
                    </h2>
                    <p class="text-6xl mt-4 text-gray-900 font-bold" @aos('fade-up', 300, '#portfolioHeader', 200)>
                        {{ __('portfolio.subtitle') }}
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <p class="mb-10" @aos('fade-up', 400, '#portfolioHeader', 200)>
                        {{ __('portfolio.description') }}
                    </p>
                    <div class="inline-block" @aos('fade-up', 500, '#portfolioHeader', 200)>
                        <a href="{{ route('portfolio', ['lang' => app()->getLocale()]) }}" class="btn button-secondary hover:scale-105 transition-transform duration-300">
                            {{ __('portfolio.view_all') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @php
                    $baseDelay = 100;
                    $gridCols = 3;
                    $delay = 0;
                @endphp
                @foreach ($portfolios as $index => $portfolio)
                    @php
                        $lang = App::getLocale();
                        $caption = $portfolio->project_name ? $portfolio->project_name->translated_text : null;
                        $delay = ($index % $gridCols) * $baseDelay;
                    @endphp
                    <div id="portfolio{{ $index }}" class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer" @aos('fade-up', $delay)>
                        <a href="{{ route('portfolio.show', ['lang' => app()->getLocale(), 'slug' => $portfolio->slug]) }}" class="block">
                            <img src="{{ asset($portfolio->image_1) }}" alt="{{ $caption }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75">

                            <!-- Hover overlay on desktop -->
                            <div class="absolute inset-0 hidden md:flex p-4 items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/40">
                                <span class="text-white text-xl font-semibold tracking-wide">
                                    {{ $caption }}
                                </span>
                            </div>

                            <!-- Project name for mobile view -->
                            <div class="md:hidden absolute bottom-2 right-3 bg-black/60 px-2 py-1 rounded text-white text-sm font-medium">
                                {{ $caption }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Decorative shapes -->
        <div class="hidden xl:!block absolute top-20 left-[40px] w-32 h-32 bg-green-800/60 rounded-full z-10" @aos('fade-up', 100)></div>
        <div class="hidden xl:!block absolute top-10 left-10 w-20 h-20 bg-green-600/40 rounded-full z-10" @aos('fade-down', 100)></div>
        <div class="hidden xl:!block absolute bottom-20 right-[40px] w-40 h-40 bg-green-900/60 rounded-full z-10" @aos('fade-down', 100)></div>
        <div class="hidden xl:!block absolute bottom-10 right-10 w-24 h-24 bg-green-700/40 rounded-full z-10" @aos('fade-up', 100)></div>
    </section>
@endsection
