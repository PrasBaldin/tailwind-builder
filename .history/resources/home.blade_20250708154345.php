<section class="bg-gray-900/50 text-white items-center">
    <div id="heroSection" class="container flex flex-col md:flex-row">
        <div class="md:w-1/2 mb-6 md:mb-0 ">
            <div class="flex items-center h-full">
                <div class="pt-10 pb-20">
                    <h1 class="lg:text-6xl md:text-4xl text-4xl uppercase font-bold leading-tight">
                        test
                    </h1>
                    <p class="mt-4 tracking-widest">
                        {{ __('home.subheadline') }}
                    </p>
                    <div class="mt-6">
                        <div class="inline-block">
                            <a href="{{ url(app()->getLocale() . '/contact') }}" class="btn button-primary hover:scale-105 transition-transform duration-300">
                                {{ __('contact.button') }}
                            </a>
                        </div>
                        <div class="inline-block">
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
