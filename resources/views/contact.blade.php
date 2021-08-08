<x-guest-layout>
    <section>
        <div class="w-full bg-center text-white bg-cover min-h-[350px] pt-24 pb-8 " style="background-image: url('/img/header-bg.png');">
            <div class="container max-w-7xl mx-auto flex px-4 md:px-16 py-12 flex-col items-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Contact Us</h1>
                <p class="leading-relaxed">
                    <a href="{{route('home')}}">Home</a>
                    <i class="fa text-xs fa-chevron-right"></i>
                    Contact Us
                </p>
            </div>
        </div>
    </section>
    <section class="text-ash-600 body-font relative">
        <div class="px-6 md:px-8 bg-white  py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-3/5 md:w-1/2 rounded-lg overflow-hidden sm:mr-10 flex flex-col items-center justify-end relative">
                <div class="w-full mb-4">
                    <img class="block max-h-40" src="{{ asset('img/logo-black.png') }}" alt="Foris Labs">
                </div>
                <div class="relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2">
                        <h2 class="title-font font-semibold text-ash-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">1 Obikwelu Street, Umuoba Anam, Ogidi, Anambra State, Nigeria</p>
                    </div>
                    <div class="w-full lg:w-1/2 flex flex-col mt-4 lg:mt-0">
                        <div class="pr-4">
                            <h2 class="title-font font-semibold text-ash-900 tracking-widest text-xs">EMAIL</h2>
                            <a href="mailto:helpdesk@forislabs.com" class="text-orange-500 leading-relaxed">helpdesk@forislabs.com</a>
                        </div>
                        <div class="mt-4">
                            <h2 class="title-font font-semibold text-ash-900 tracking-widest text-xs">PHONE</h2>
                            <a href="tel:+234 903 536 3645" class="text-orange-500 leading-relaxed">+234 903 536 3645</a>
                        </div>
                    </div>
                    <div class="w-1/2 mt-4">
                        <h2 class="title-font font-semibold text-ash-900 tracking-widest text-xs">FACEBOOK</h2>
                        <a href="https://facebook.com/ForisLabs" target="_blank"  class="text-orange-500 leading-relaxed">Foris Labs</a>
                    </div>
                    <div class="w-1/2 mt-4">
                        <h2 class="title-font font-semibold text-ash-900 tracking-widest text-xs">INSTAGRAM</h2>
                        <a href="https://instagram.com/ForisLabs" target="_blank"  class="text-orange-500 leading-relaxed">@forislabsafrica</a>
                    </div>
                    <div class="w-1/2 mt-4">
                        <h2 class="title-font font-semibold text-ash-900 tracking-widest text-xs">LINKEDIN</h2>
                        <a href="https:://facebook.com/ForisLabs" target="_blank"  class="text-orange-500 leading-relaxed">Foris Labs</a>
                    </div>
                    <div class="w-1/2 mt-4">
                        <h2 class="title-font font-semibold text-ash-900 tracking-widest text-xs">TWITTER</h2>
                        <a href="https://www.instagram.com/ForisLabs" target="_blank" class="text-orange-500 leading-relaxed">@forislabsafrica</a>
                    </div>
                </div>
            </div>
            <form class="lg:w-2/5 md:w-1/2  flex flex-col md:ml-auto w-full  mt-8 md:mt-0">
                <h2 class="text-ash-900 text-lg mb-1 font-bold title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-ash-600">We'd like to hear from you </p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-ash-600">Name</label>
                    <input required type="text" id="name" name="name" class="w-full bg-white rounded border border-ash-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 text-base outline-none text-ash-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-ash-600">Email</label>
                    <input required type="email" id="email" name="email" class="w-full bg-white rounded border border-ash-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 text-base outline-none text-ash-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-ash-600">Message</label>
                    <textarea required id="message" name="message" class="w-full bg-white rounded border border-ash-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 h-32 text-base outline-none text-ash-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button type="submit" class="text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded-full text-lg">Send Message</button>
                <p class="text-xs text-center text-ash-500 mt-3">Conduct experiments anywhere, anytime!!.</p>
            </form>
        </div>
    </section>
</x-guest-layout>