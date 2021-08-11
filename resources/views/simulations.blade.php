<x-guest-layout title="Simulations">
    <section>
        <div class="w-full bg-center text-white bg-cover min-h-[350px] pt-24 pb-8 " style="background-image: url('/img/header-bg.png');">
            <div class="container max-w-7xl mx-auto flex px-4 md:px-16 py-12 flex-col items-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Simulation Catalog</h1>
                <p class="leading-relaxed">
                    <a href="{{route('home')}}">Home</a>
                    <i class="fa text-xs fa-chevron-right"></i>
                    Simulations
                </p>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="px-4 md:px-6 py-24 mx-auto">
            @foreach($simulation_groups as $key => $simulations)
                <div class="py-4">
                    <div class="w-full text-center">
                        <x-title color="dark">{{$key}}</x-title>
                    </div>
                    <div class="flex flex-wrap">
                    @forelse($simulations as $simulation)
                        <div class="p-3 md:w-1/3 sm:w-1/2">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ $simulation->banner_url }}" alt="blog">
                                <div class="p-6">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-orange-500 mb-1 uppercase">{{$simulation->category->name}}</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-2">{{$simulation->title}}</h1>
                                    <p class="leading-relaxed mb-2">{{$simulation->summary}}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="leading-relaxed">Coming Soon</p>
                    @endforelse
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-guest-layout>