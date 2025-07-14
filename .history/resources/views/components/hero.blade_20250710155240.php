@php
    $slideContents = [
        [
            'image' => 'images/parallax-construction.webp',
            'title' => __('Hero.slideContent.construction.title'),
            'desc' => __('Hero.slideContent.construction.desc'),
        ],
        [
            'image' => 'images/parallax-procurement.webp',
            'title' => __('Hero.slideContent.procurement.title'),
            'desc' => __('Hero.slideContent.procurement.desc'),
        ],
    ];
@endphp

<div class="hero-wrap relative">
    {{-- Parallax Background --}}
    <div class="flex justify-center items-center">
        <div id="heroParallax" class="hero-parallax relative overflow-hidden">
            @foreach ($slideContents as $index => $slide)
                <div class="parallax-image absolute top-0 left-0 w-full h-full bg-cover bg-center transition-opacity duration-1000 ease-in-out" style="background-image: url('{{ asset($slide['image']) }}'); opacity: {{ $loop->first ? '1' : '0' }};" data-index="{{ $index }}" data-title="{{ $slide['title'] }}" data-desc="{{ $slide['desc'] }}"></div>
            @endforeach
            <div class="hero-mask absolute top-0 left-0 w-full h-full"></div>
        </div>
    </div>

    {{-- Hero Content --}}
    <div class="container">
        <div class="p-3 w-full md:w-[60vw] lg:w-[50vw] xl:w-[45vw] absolute top-[25vh] md:top-[30vh] lg:top-[35vh] max-lg:left-0 max-lg:right-0 text-gray-100 transition duration-300 ease-in-out">
            <div class="py-5 pl-2 md:pl-5 lg:pl-0">
                <h3 class="text-xl lg:text-2xl font-semibold pb-2 tracking-[.05em]">
                    {{ $contact->site_name ?? 'Mulse' }}
                </h3>
                <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold pb-5" id="heroTitle">
                    {{ $slideContents[0]['title'] }}
                </h1>
                <p class="md:text-xl font-medium" id="heroDesc">
                    {{ $slideContents[0]['desc'] }}
                </p>
                <div class="pt-5">
                    <a href="https://katalog.mulse.id" target="_blank">
                        <button class="btn btn-primary font-medium">
                            {{ __('Hero.catalog') }}
                        </button>
                    </a>
                    <a href="{{ url('/gallery') }}">
                        <button class="btn btn-secondary ml-3">
                            {{ __('Hero.gallery') }}
                        </button>
                    </a>
                </div>
            </div>
        </div>

        {{-- Navigation Dots --}}
        <div class="relative">
            <div class="absolute bottom-[20vh] right-0 md:bottom-[50vh] md:right-0 flex md:flex-col space-x-2 md:space-x-0">
                @foreach ($slideContents as $index => $slide)
                    <button class="w-3 h-3 rounded-full transition duration-500 ease-in-out my-1 {{ $loop->first ? 'bg-sky-500' : 'bg-gray-300' }}" onclick="showSlide({{ $index }})"></button>
                @endforeach
            </div>
        </div>
    </div>
</div>
