<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>
  <meta name="description" content="Foris Labs is a virtual 3d Laboratory designed to eliminate the -probem if">
  <meta name="keywords" content="foris labs laboratory 3d virtual offline">
  <!-- Website Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">


</head>

<body x-data>
  @include('layouts.guest.navigation')
  <div class="text-ash-900 font-sans antialiased">
    {{ $slot }}
    <section class="text-ash-400 bg-ash-800 body-font">
      <div class="container mx-auto flex flex-wrap items-center px-5 py-16">
        <div class="pr-0 md:w-1/2 md:pr-16 lg:w-3/5 lg:pr-0">
          <h1 class="title-font text-3xl font-medium text-white">Join our waitlist now?</h1>
          <p class="mt-4 leading-relaxed">Be the first to be notified about Foris Labs once we launch</p>
        </div>
        <form action="{{ route('join-waitlist') }}" method="POST"
          class="bg-ash-700 mt-10 flex w-full flex-col rounded-lg bg-opacity-50 p-8 md:ml-auto md:mt-0 md:w-1/2 lg:w-2/6">

          @csrf
          <h2 class="title-font mb-5 text-lg font-medium text-white">Enter Details</h2>
          <div class="relative mb-4">
            <label for="full-name" class="text-ash-400 text-sm leading-7">Full Name</label>
            <input type="text" required  name="name"
              class="bg-ash-600 border-ash-600 text-ash-100 w-full rounded border bg-opacity-20 py-1 px-3 text-base leading-8 outline-none transition-colors duration-200 ease-in-out focus:border-orange-200 focus:bg-transparent focus:ring-1 focus:ring-orange-600">
          </div>
          <div class="relative mb-4">
            <label for="full-name" class="text-ash-400 text-sm leading-7">I am a</label>
            <select name="type" required
              class="bg-ash-600 border-ash-600 text-ash-100 w-full rounded border bg-opacity-20 py-1 px-3 text-base leading-8 outline-none transition-colors duration-200 ease-in-out focus:border-orange-200 focus:bg-transparent focus:ring-1 focus:ring-orange-600">
                <option value="student">Student</option>
                <option value="parent">Parent/Guardian</option>
                <option value="teacher">Teacher/Instructor</option>
                <option value="school-admin">School Administrator</option>
            </select>
          </div>
          <div class="relative mb-4">
            <label for="email" class="text-ash-400 text-sm leading-7">Email</label>
            <input type="email" required id="email" name="email"
              class="bg-ash-600 border-ash-600 text-ash-100 w-full rounded border bg-opacity-20 py-1 px-3 text-base leading-8 outline-none transition-colors duration-200 ease-in-out focus:border-orange-200 focus:bg-transparent focus:ring-1 focus:ring-orange-600">
          </div>
          <button
            class="rounded border-0 bg-orange-500 py-2 px-8 text-lg text-white hover:bg-orange-600 focus:outline-none">Join
            WaitList</button>
          <p class="mt-3 text-xs">By submitting this form, you have agreed to receive notifications from Foris Labs about the launch.</p>
        </form>
      </div>
    </section>
    @include('layouts.guest.footer')
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
</body>

</html>
