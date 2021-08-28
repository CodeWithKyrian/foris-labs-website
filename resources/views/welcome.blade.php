<x-guest-layout title="3d Virtual Laboratory">
    <section>
        <div class="w-full bg-center text-white bg-cover h-screen flex items-center " style="background-image: url('/img/header-bg.png');">
            <div class="container max-w-7xl mx-auto flex px-4 md:px-16 py-12 md:flex-row flex-col items-center">
                <div class="md:w-3/5 lg:pr-12 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Africa's first offline virtual 3d laboratory
                    </h1>
                    <p class="mb-8 leading-relaxed">Promoting science engagement and intergenerational learning by providing the most up-to-date, curriculum based, and personalized laboratory platform for people of all ages.</p>
                    <div class="flex justify-center">
                        <a href="{{route('pricing')}}#plans" class="inline-flex items-center bg-orange-500 border-0 py-3 px-8 focus:outline-none hover:bg-white hover:text-black rounded-full text-md">
                            <i class="fab fa-windows px-2 text-3xl"></i>
                            <span>Try Now</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:block lg:max-w-lg md:w-2/5 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="{{asset('img/science.svg')}}">
                </div>
            </div>
        </div>
    </section>
    <section class="text-ash-600">
        <div class="container px-5 lg:px-12 py-16 mx-auto">
            <x-title color="dark">Who we are</x-title>
            <div class="flex md:flex-row flex-col items-center">
                <div class="lg:max-w-sm lg:w-full md:w-2/5 w-5/6 mb-10 md:mb-0">
                    <img class="object-cover object-center" alt="hero" src="{{asset('/img/labb.jpg')}}">
                </div>
                <div class="lg:flex-grow md:w-3/5 lg:pl-16 md:pl-10 flex flex-col md:items-start md:text-left items-center text-center leading-7 space-y-2">
                    {!! settings('intro_paragraph') !!}
                </div>
            </div>
        </div>
    </section>
    <section class="text-ash-100 bg-ash-800">
        <div class="container px-5 xl:px-16 py-16 mx-auto">
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex md:flex-col items-center border-b md:border-r md:border-b-0">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full border border-ash-200 text-ash-200 mb-4 flex-shrink-0">
                        <svg viewBox="0 0 512 512" class="w-10 h-10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="m510.98 250.98c-43.569-102.44-143.66-168.63-254.98-168.63s-211.41 66.191-254.98 168.63c-1.364 3.206-1.364 6.827 0 10.033 43.568 102.45 143.65 168.65 254.98 168.65 111.33 0 211.41-66.198 254.98-168.65 1.364-3.206 1.364-6.827 0-10.033zm-254.98 153.05c-99.194 0-188.56-57.922-229.19-148.03 40.635-90.098 130-148.01 229.19-148.01 99.193 0 188.56 57.916 229.19 148.01-40.634 90.107-130 148.03-229.19 148.03z" />
                            <path d="m256 157.82c-54.134 0-98.174 44.041-98.174 98.174s44.041 98.174 98.174 98.174 98.174-44.04 98.174-98.174-44.041-98.174-98.174-98.174zm0 170.72c-39.998 0-72.54-32.542-72.54-72.54s32.542-72.54 72.54-72.54 72.54 32.542 72.54 72.54-32.542 72.54-72.54 72.54z" />
                            <path d="m256 203.88c-28.739 0-52.123 23.382-52.123 52.123 0 7.078 5.737 12.817 12.817 12.817s12.817-5.739 12.817-12.817c0-14.606 11.882-26.489 26.489-26.489 7.08 0 12.817-5.739 12.817-12.817 0-7.08-5.739-12.817-12.817-12.817z" />
                        </svg>
                    </div>
                    <div class="flex-grow pl-6 md:pl-0 md:text-center">
                        <h2 class="text-ash-100 text-lg md:text-xl title-font font-medium mb-2">Our Vision</h2>
                        <p class="leading-relaxed text-sm md:text-base">{{ settings('vision') }}</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-row-reverse md:flex-col items-center border-b md:border-r md:border-b-0">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full border border-ash-200 text-ash-200 mb-4 flex-shrink-0">
                        <svg viewBox="0 0 390 390" class="w-10 h-10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="m380.81 195 8.419-25.258c2.619-7.859-1.628-16.354-9.487-18.974-7.858-2.619-16.354 1.628-18.974 9.487l-6.581 19.744h-24.878c-7.603-83.978-78.386-150-164.31-150-90.981 0-165 74.019-165 165s74.019 165 165 165c85.925 0 156.71-66.022 164.31-150h24.878l6.581 19.744c2.096 6.286 7.947 10.26 14.228 10.26 1.572 0 3.172-0.249 4.746-0.773 7.858-2.62 12.105-11.115 9.486-18.974l-8.418-25.256zm-215.81 135c-74.439 0-135-60.56-135-135s60.561-135 135-135c69.369 0 126.68 52.595 134.16 120h-30.238c-7.301-50.816-51.119-90-103.92-90-57.896 0-105 47.103-105 105s47.104 105 105 105c52.805 0 96.623-39.184 103.92-90h30.238c-7.486 67.405-64.793 120-134.16 120zm42.42-150c-6.192-17.458-22.865-30-42.42-30-24.813 0-45 20.187-45 45s20.188 45 45 45c19.555 0 36.228-12.542 42.42-30h31.07c-6.968 34.192-37.271 60-73.49 60-41.355 0-75-33.645-75-75s33.645-75 75-75c36.219 0 66.522 25.808 73.49 60h-31.07z" />
                        </svg>
                    </div>
                    <div class="flex-grow pr-6 md:pr-0 text-right md:text-center">
                        <h2 class="text-ash-100 text-lg md:text-xl title-font font-medium mb-2">Our Mission</h2>
                        <p class="leading-relaxed text-sm md:text-base">{{ settings('mission') }}</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex md:flex-col items-center">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full border border-ash-200 text-ash-200 mb-4 flex-shrink-0">
                        <svg fill="none" class="w-10 h-10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6 md:pl-0 md:text-center">
                        <h2 class="text-ash-100 text-lg md:text-xl title-font font-medium mb-2">Our Results</h2>
                        <p class="leading-relaxed text-sm md:text-base">Orange bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="absolute z-[-1] w-full bg-center text-ash-600 bg-cover bg-fixed h-full flex items-center" style="background-image: url('/img/bg-part.png');">
        </div>
        <div class="container px-5 xl:px-16 py-16 mx-auto">
            <div class="flex md:flex-row flex-col items-center">
                <div class="w-full md:w-1/2">
                    <img class="object-cover object-center rounded" alt="hero" src="{{asset('img/macbook.png')}}">
                </div>
                <div class="w-full md:w-1/2 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-8 font-medium">
                        <strong class="text-black">The smartest</strong>
                        choice for all
                        <strong class="text-black">colleges</strong>
                    </h1>
                    <ul class="text-left list-inside list-disc mb-4">
                        @foreach(json_decode(settings('features')) as $feature)
                        <li class="py-2 flex"><i class="fa fa-long-arrow-alt-right text-sm pr-6"></i>{{$feature}}</li>
                        @endforeach
                    </ul>
                    <div class="flex justify-center md:justify-start w-full py-2">
                        <a href="{{route('pricing')}}#plans" class="inline-flex items-center text-white bg-orange-500 transition-colors duration-500 border-0 py-3 px-8 focus:outline-none hover:bg-ash-800 hover:text-ash-100 rounded-full text-md">
                            <span>Pre-order Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-5 py-12 mx-auto text-center">
            <x-title color="dark">Our Partners</x-title>
            <div class="flex">
                <div class="swiper-container min-h-[6rem]" id="container-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="object-cover object-center transition duration-500 grayscale hover:filter-none hover:scale-110" alt="image" src="{{asset('img/brands/google.png')}}">
                        </div>
                        <div class="swiper-slide">
                            <img class="object-cover object-center transition duration-500 grayscale hover:filter-none hover:scale-110" alt="image" src="{{asset('img/brands/injini.png')}}">
                        </div>
                        <div class="swiper-slide">
                            <img class="object-cover object-center transition duration-500 grayscale hover:filter-none hover:scale-110" alt="image" src="{{asset('img/brands/samsung.png')}}">
                        </div>
                        <div class="swiper-slide">
                            <img class="object-cover object-center transition duration-500 grayscale hover:filter-none hover:scale-110" alt="image" src="{{asset('img/brands/stanford.png')}}">
                        </div>
                        <div class="swiper-slide">
                            <img class="object-cover object-center transition duration-500 grayscale hover:filter-none hover:scale-110" alt="image" src="{{asset('img/brands/stemnovo.png')}}">
                        </div>
                    </div>
                    <div class="swiper-pagination" id="pagination-1"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-ash-600 body-font">
        <div class="container px-5 py-12 mx-auto text-center">
            <x-title color="dark">Metrics</x-title>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full cursor-pointer">
                    <div class="border-2 hover:bg-orange-500 hover:border-orange-500 hover:text-white text-ash-700 border-ash-500 bg-transparent px-4 py-6 rounded-lg">
                        <svg class="w-12 h-12 mb-3 inline-block" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M8 17l4 4 4-4m-4-5v9"></path>
                            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                        </svg>
                        <h2 class="title-font font-bold text-3xl">2.7K</h2>
                        <p class="leading-relaxed">Downloads</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full cursor-pointer">
                    <div class="border-2 hover:bg-orange-500 hover:border-orange-500 hover:text-white text-ash-700 border-ash-500 bg-transparent px-4 py-6 rounded-lg">
                        <svg class="w-12 h-12 mb-3 inline-block" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                        </svg>
                        <h2 class="title-font font-bold text-3xl">1.2K</h2>
                        <p class="leading-relaxed">Users</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full cursor-pointer">
                    <div class="border-2 hover:bg-orange-500 hover:border-orange-500 hover:text-white text-ash-700 border-ash-500 bg-transparent px-4 py-6 rounded-lg">
                        <svg class="w-12 h-12 mb-3 inline-block" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                            <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                        </svg>
                        <h2 class="title-font font-bold text-3xl">74</h2>
                        <p class="leading-relaxed">Simulations</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full cursor-pointer">
                    <div class="border-2 hover:bg-orange-500 hover:border-orange-500 hover:text-white text-ash-700 border-ash-500 bg-transparent px-4 py-6 rounded-lg">
                        <svg class="w-12 h-12 mb-3 inline-block" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <h2 class="title-font font-bold text-3xl">3</h2>
                        <p class="leading-relaxed">Laboratories</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-ash-800 border-b border-b-ash-700">
        <div class="container px-5 py-16 mx-auto">
            <x-title color="light">Milestones</x-title>
            <div class="flex flex-col mx-auto p-2 text-orange-50">
                <x-timeline-item title="Lorem ipsum" active>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Vitae, facilis.
                </x-timeline-item>
                <x-timeline-item title="Lorem ipsum">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Vitae, facilis.
                </x-timeline-item>
                <x-timeline-item title="Lorem ipsum">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Vitae, facilis.
                </x-timeline-item>
                <x-timeline-item title="Lorem ipsum" last>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Vitae, facilis.
                </x-timeline-item>
            </div>
        </div>
    </section>
    <section class="text-ash-300 bg-ash-800 body-font">
        <div class="container px-5 py-16 mx-auto text-center">
            <x-title color="light">Testimonials</x-title>
            <p class="mb-8">Don't take our word for it. Here's what others think about Foris Labs</p>
            <div class="swiper-container h-full min-h-[380px]" id="container-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide p-4">
                        <div class="bg-ash-700 p-8 rounded">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-orange-500 mb-4" viewBox="0 0 975.036 975.036">
                                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                </svg>
                                <div class="flex">
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                </div>
                            </div>
                            <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-white">Holden Caulfield</span>
                                    <span class="text-ash-200 text-sm">UI DEVELOPER</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide p-4">
                        <div class="bg-ash-700 p-8 rounded">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-orange-500 mb-4" viewBox="0 0 975.036 975.036">
                                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                </svg>
                                <div class="flex">
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-ash-500"></i>
                                </div>
                            </div>
                            <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-white">Alper Kamu</span>
                                    <span class="text-ash-200 text-sm">DESIGNER</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide p-4">
                        <div class="bg-ash-700 p-8 rounded">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-orange-500 mb-4" viewBox="0 0 975.036 975.036">
                                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                </svg>
                                <div class="flex">
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-ash-500"></i>
                                </div>
                            </div>
                            <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-white">Holden Caulfield</span>
                                    <span class="text-ash-200 text-sm">UI DEVELOPER</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide p-4">
                        <div class="bg-ash-700 p-8 rounded">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-orange-500 mb-4" viewBox="0 0 975.036 975.036">
                                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                </svg>
                                <div class="flex">
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                </div>
                            </div>
                            <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-white">Alper Kamu</span>
                                    <span class="text-ash-200 text-sm">DESIGNER</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="pagination-2"></div>
            </div>
        </div>
    </section>
    <section class="text-ash-600 bg-ash-100 body-font">
        <div class="container px-5 py-24 mx-auto text-center">
            <x-title color="dark">Meet Our Team</x-title>
            <div class="flex flex-wrap justify-around">
                @foreach($members as $member)
                <div class="w-full md:w-1/2 lg:w-1/3 p-3">
                    <div class="mt-8 text-center rounded-lg shadow-md overflow-hidden">
                        <div class="relative team-image">
                            <img class="w-full h-80 object-cover object-center" src="{{asset($member->profile_img)}}" alt="Team">
                            <div class="absolute top-0 w-full h-80 bg-black/20"></div>
                            <div class="absolute inset-x-0 bottom-4 flex justify-center">
                                <ul class="flex relative px-6 py-4 z-10 bg-white/25 text-white text-md hover:bg-orange-500 rounded-full">
                                    <li class="px-4 hover:scale-125 transition-transform duration-300">
                                        <a href="{{$member->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="px-4 hover:scale-125 transition-transform duration-300">
                                        <a href="https://twitter.com/{{$member->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="px-4 hover:scale-125 transition-transform duration-300">
                                        <a href="{{$member->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="px-4 hover:scale-125 transition-transform duration-300">
                                        <a href="{{$member->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-8">
                            <h5 class="mb-1 text-xl font-bold text-ash-900 capitalize">{{$member->name}}</h5>
                            <p>{{$member->position}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>

<script type="module">
    import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'

    const swiper = new Swiper('#container-1', {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 10,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '#pagination-1',
            bulletActiveClass: '!bg-orange-500 !opacity-100'
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            // when window width is >= 920px
            920: {
                slidesPerView: 5,
                spaceBetween: 50
            }
        }
    })

    const swiper2 = new Swiper('#container-2', {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
            delay: 6000,
        },
        pagination: {
            el: '#pagination-2',
            bulletActiveClass: '!bg-orange-500 !opacity-100'
        },
        breakpoints: {
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 40
            }
        }
    })
</script>