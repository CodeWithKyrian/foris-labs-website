<x-blog-layout>
    <section class="text-ash-600 bg-ash-100 body-font pt-8">
        <div class="container px-5 lg:px-12 py-16 mx-auto">
            <x-title color="dark">Featured Posts</x-title>
            <ul class="flex flex-wrap -mx-2 overflow-hidden">
                @foreach($featured as $post)
                <li class="my-2 px-2 w-full overflow-hidden md:w-1/2">
                    <a href="/blog/{{ $post->slug }}" class="group">
                        <div class="mx-2 flex items-center justify-center relative rounded-lg overflow-hidden">
                            <img src="{{$post->image_url}}" alt="" class="group-hover:scale-110 transition-transform duration-500 w-full h-auto object-cover z-1">
                            <div class="absolute w-full h-full bg-black/60 z-10"></div>
                            <div class="absolute w-full h-full flex flex-col justify-center  z-20 text-center p-5">
                                <!-- <span class="inline-block text-white uppercase text-xs tracking-wide">Nature</span> -->
                                <h2 class="text-white font-extrabold  text-xl my-5">{{ $post->title }}</h2>
                                <span class="inline-block text-xs text-white font-sans">{{ $post->created_at->format('l, jS F, Y') }}</span>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section>
        <div class="container px-5 lg:px-12 py-16 mx-auto">
            <div class="flex flex-wrap overflow-hidden">
                <div class="w-full overflow-hidden md:w-4/6 md:pr-2 py-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($posts as $post)
                        <div class="col-span-1 @if ($loop->first) md:col-span-2 @endif overflow-hidden">
                            <img class="w-full h-auto rounded" src="{{$post->image_url}}" alt="">
                            <h2 class="text-gray-900 hover:text-orange-500 font-bold text-2xl my-4"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                            @if ($loop->first)
                                <span class="text-xs text-gray-800 font-thin block mb-5">{{ $post->created_at->format('l, jS F, Y') }}</span>
                            @endif
                            <p class="text-gray-900 font-thin tracking-wider leading-relaxed">{{ $post->summary }}</p>
                            <a href="/blog/{{ $post->slug }}" class="inline-block pt-5 text-sm font-medium tracking-wider text-orange-500 hover:text-orange-600">Read More...</a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="w-full overflow-hidden md:w-2/6 md:pl-2 py-4">
                    <x-blog-sidebar :posts="$posts"></x-blog-sidebar>
                </div>
            </div>
        </div>
    </section>
</x-blog-layout>