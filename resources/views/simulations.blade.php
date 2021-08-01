<x-guest-layout>
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
            <div class="w-full text-center">
                <x-title color="dark">Chemistry</x-title>
            </div>
            <div class="flex flex-wrap">
                <div class="p-3 md:w-1/3 sm:w-1/2">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-orange-500 mb-1">ANALYTICAL CHEMISTRY</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Acid Concentration</h1>
                            <p class="leading-relaxed mb-3">Determination of an acid's concentration by titration of acid against a base with known concentration</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 md:w-1/3 sm:w-1/2">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/721x401" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-orange-500 mb-1">ANALYTICAL CHEMISTRY</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Water Crystallization</h1>
                            <p class="leading-relaxed mb-3">etermination of number of particles of water crustallization in a viable salt of known quantity.</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 md:w-1/3 sm:w-1/2">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/722x402" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-orange-500 mb-1">ANALYTICAL CHEMISTRY</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Water Hardness</h1>
                            <p class="leading-relaxed mb-3">Determination of Water Hardness by Complexometric Titration using a process beknown to all eternity..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full text-center py-8">
                <x-title color="dark">Physics</x-title>
                <p class="leading-relaxed mb-6">Coming Soon</p>
            </div>
            <div class="w-full text-center py-8">
                <x-title color="dark">Biology</x-title>
                <p class="leading-relaxed mb-6">Coming Soon</p>
            </div>
        </div>
    </section>
</x-guest-layout>