<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="flex h-screen overflow-hidden" x-data="{ open: false }">
        <div class="lg:w-64 h-screen">
            <div class="fixed inset-0 bg-ash-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200 opacity-0 pointer-events-none" aria-hidden="true"></div>
            <div id="sidebar" :class="{'translate-x-0': open, '-translate-x-64': !open }" class="absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 flex-shrink-0 bg-ash-800 p-4 transition-transform duration-200 ease-in-out">
                <div class="flex justify-between mb-10 pr-3 sm:px-2">
                    <button @click="open = false" class="lg:hidden text-ash-500 hover:text-ash-400" aria-controls="sidebar" aria-expanded="false" style="outline: currentcolor none medium;">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                        </svg>
                    </button>
                    <a aria-current="page" class="block active" href="/" style="outline: currentcolor none medium;">
                        <x-application-logo theme="light"  class="w-24"></x-application-logo>
                    </a>
                </div>
                <div>
                    <h3 class="text-xs uppercase text-ash-500 font-semibold pl-3">Pages</h3>
                    <ul class="mt-3">
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-ash-900"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 hover:text-ash-200 active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"><svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                        <path class="fill-current text-ash-400 text-orange-500" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                                        <path class="fill-current text-ash-600 text-orange-600" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                                        <path class="fill-current text-ash-400 text-orange-200" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
                                    </svg><span class="text-sm font-medium">Dashboard</span></div>
                            </a></li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"><svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                        <path class="fill-current text-ash-400 false" d="M7 0l6 7H8v10H6V7H1z"></path>
                                        <path class="fill-current text-ash-600 false" d="M18 7v10h5l-6 7-6-7h5V7z"></path>
                                    </svg><span class="text-sm font-medium">Customers</span></div>
                            </a></li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-grow"><svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                            <path class="fill-current text-ash-400 false" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                            <path class="fill-current text-ash-700 false" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                            <path class="fill-current text-ash-600 false" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                        </svg><span class="text-sm font-medium">Orders</span></div>
                                    <div class="flex flex-shrink-0 ml-2"><span class="inline-flex items-center justify-center h-5 text-xs font-medium text-white bg-orange-500 px-2 rounded-sm">4</span></div>
                                </div>
                            </a></li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"><svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                        <path class="fill-current text-ash-600 false" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z"></path>
                                        <path class="fill-current text-ash-400 false" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                                    </svg><span class="text-sm font-medium">Campaigns</span></div>
                            </a></li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-grow"><svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                            <path class="fill-current text-ash-600 false" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                            <path class="fill-current text-ash-400 false" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                        </svg><span class="text-sm font-medium">Team</span></div>
                                    <div class="flex flex-shrink-0 ml-2"><svg class="w-3 h-3 flex-shrink-0 ml-1 fill-current text-ash-400 false" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg></div>
                                </div>
                            </a>
                            <ul class="pl-9 mt-1 hidden">
                                <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 false active" href="/" style="outline: currentcolor none medium;"><span class="text-sm font-medium">Team - Tabs</span></a></li>
                                <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150&quot; false active" href="/" style="outline: currentcolor none medium;"><span class="text-sm font-medium">Team - Tiles</span></a></li>
                            </ul>
                        </li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"><svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                        <path class="fill-current text-ash-600 false" d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z"></path>
                                        <path class="fill-current text-ash-400 false" d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z"></path>
                                    </svg><span class="text-sm font-medium">Messages</span></div>
                            </a></li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"><svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                        <path class="fill-current text-ash-600 false" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                        <path class="fill-current text-ash-600 false" d="M1 1h22v23H1z"></path>
                                        <path class="fill-current text-ash-400 false" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
                                    </svg><span class="text-sm font-medium">Tasks</span></div>
                            </a></li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"><svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                        <circle class="fill-current text-ash-400 false" cx="18.5" cy="5.5" r="4.5"></circle>
                                        <circle class="fill-current text-ash-600 false" cx="5.5" cy="5.5" r="4.5"></circle>
                                        <circle class="fill-current text-ash-600 false" cx="18.5" cy="18.5" r="4.5"></circle>
                                        <circle class="fill-current text-ash-400 false" cx="5.5" cy="18.5" r="4.5"></circle>
                                    </svg><span class="text-sm font-medium">Applications</span></div>
                            </a></li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a aria-current="page" class="block text-ash-200 hover:text-white transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"><svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                        <path class="fill-current text-ash-600 false" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                                        <path class="fill-current text-ash-400 false" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                                        <path class="fill-current text-ash-600 false" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                                        <path class="fill-current text-ash-400 false" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                                    </svg><span class="text-sm font-medium">Settings</span></div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <header class="sticky top-0 bg-white border-b border-ash-200 z-30">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 -mb-px">
                        <div class="flex">
                            <button @click="open = !open" class="text-ash-500 hover:text-ash-600 lg:hidden" aria-controls="sidebar" aria-expanded="false" style="outline: currentcolor none medium;">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4" y="5" width="16" height="2"></rect>
                                        <rect x="4" y="11" width="16" height="2"></rect>
                                        <rect x="4" y="17" width="16" height="2"></rect>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <div>
                                <button class="w-8 h-8 flex items-center justify-center bg-ash-100 hover:bg-ash-200 transition duration-150 rounded-full ml-3 false" aria-controls="search-modal" style="outline: currentcolor none medium;">
                                    <span class="sr-only">Search</span>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current text-ash-500" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                            <path class="fill-current text-ash-400" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                    </svg>
                                </button>
                                <div class="fixed inset-0 bg-ash-900 bg-opacity-30 z-50 transition-opacity" aria-hidden="true" style="display: none;"></div>
                                <div id="search-modal" class="fixed inset-0 z-50 overflow-hidden flex items-start top-20 mb-4 justify-center transform px-4 sm:px-6" role="dialog" aria-modal="true" style="display: none;">
                                    <div class="bg-white overflow-auto max-w-2xl w-full max-h-full rounded shadow-lg">
                                        <form class="border-b border-ash-200">
                                            <div class="relative"><label for="modal-search" class="sr-only">Search</label><input id="modal-search" class="w-full border-0 focus:ring-transparent placeholder-ash-400 appearance-none py-3 pl-10 pr-4" type="search" placeholder="Search Anything…" style="outline: currentcolor none medium;"><button class="absolute inset-0 right-auto group" type="submit" aria-label="Search" style="outline: currentcolor none medium;"><svg class="w-4 h-4 flex-shrink-0 fill-current text-ash-400 group-hover:text-ash-500 ml-4 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                                    </svg></button></div>
                                        </form>
                                        <div class="py-4 px-2">
                                            <div class="mb-3 last:mb-0">
                                                <div class="text-xs font-semibold text-ash-400 uppercase px-2 mb-2">Recent searches</div>
                                                <ul class="text-sm">
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Form Builder - 23 hours on-demand video</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Access Mosaic on mobile and TV</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Product Update - Q4 2021</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Master Digital Marketing Strategy course</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Dedicated forms for products</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Product Update - Q4 2021</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="mb-3 last:mb-0">
                                                <div class="text-xs font-semibold text-ash-400 uppercase px-2 mb-2">Recent pages</div>
                                                <ul class="text-sm">
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg><span><span class="font-medium text-ash-800 group-hover:text-white">Messages</span> - Conversation / … / Mike Mills</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg><span><span class="font-medium text-ash-800 group-hover:text-white">Messages</span> - Conversation / … / Eva Patrick</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="w-px h-6 bg-ash-200 mx-3">
                            <div class="relative inline-flex"><button class="inline-flex justify-center items-center group" aria-haspopup="true" aria-expanded="false" style="outline: currentcolor none medium;"><img class="w-8 h-8 rounded-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAIAAAAlC+aJAAAD/ElEQVR4Ae2axXorRxCFq+by3VyT2NkENTecrC4zMz5A3sIw3mUXfoLQNsywCTOzMSiIhWZ7ZrpSU25NmGFGX/p8UneV8Pzq023E63edg3aWBVHIABgAA2AADIABMAAGwAAYAANw9VU39HTbbQzgurNbNvdv2zKQ6LHbEqBYfAsBerrz27b0b98mGO0FUG+MLi42AJFrdr9je//OHYPJhN1Om7hQehuImCEYAZOJ/M4dA7t2DqaSdnsAFEtvE0+BeQwmaVLJ/O5dA3v2CEbMASqVjzxvQawHEAKCXLJSCXvvnoF9+5x0yo4vgFJe+dv3CMQ4sAQkkCwIYipx2b59gwcOCEYMAeQselPME0tAQNTaGNJzqA4eHDx4yMmk7dgBlMvvKd+TJcBl51oUVrpIJ/OHDg0ePuxkMnaMAFxvfrL6MZBsgnA/i3QlM2kezKTzR444R486WcGIGkBUKLzV8qgllUzCxQPKLuFeWuJFOHp08NhxJ5u1owcold5CvY918kH6oAmF4UCo78dcxj5xwuFLLmdHCTC/0KjVRmUF9L5FSZNuxDFJp4VIROHj2f3Jk0OnTju9ghEBAKtQfDtcAVG4CsGgG11ryp88PpfdyAxnzg719m6MAqDwpvgKP2nkWawShkAo+QlZfunxuWz+7Fnn7PmhC/4Yxkr4h6SIFmZ5EPlKEciVS1KuxyVXvk++y6PyPd/3lL64ynU9Hj3X95Y8d8lnGG/F1wsrp8H6DwHSqesBqJVsZCJEUhRwoGUBIykgkHv0GMzyYFkTIrmbrX+zsPJFz/oKRP8dQCp5HeiDkidFSodFWEhnXbWSREIgt+IyE+IifDFjPb+04ssINvHaNR2dnRcF7nTukaVDjhZpKtAi7Tx8+IL/RWXprpq6dwm/d/+frkA6dR0p0oenUmISpBNJQlQAoS+Ss4Bj1p2oTD87701AqIgArkcLKYi5nJhIIsGAAAmxFSENB7OL46Xa07NL4yCKEmDVynXdnbYEwyImQFRilIH0kW9ZchgBWgA+TM+PFSaf4BFE0QMkE1ezRUAdaH2qy74Ux0ra4NqcHv2q9PjU7Gi8vp1OZ663GACAlAq//xEICb5lcd+YHvlo5PaPxu7Q7uMDYFkrE91XinVAxiC9AgIRDI2p4Xc+vvm9T29tzIzAzxV5hHq6L1+1ar18/CTBRzn1iYHqzeHRiYfqzc8gVOwA5ADFIOcKEclXgMCqNYdHxh6sNbT1WANkUtcSkYW4nKdK7dOR0Qeq9U9BFHeAjo6LV6/pANFk9dOR4ftD620BIN/AIVYqnwyP3F+taevtBLB69fpXXrmxItajkvl/IQNgAAyAATAABsAAGAADYAD+vwDfAQSHHlNp5b1mAAAAAElFTkSuQmCC" alt="User" width="32" height="32">
                                    <div class="flex items-center truncate"><span class="truncate ml-2 text-sm font-medium group-hover:text-ash-800">{{ auth()->user()->name }}</span><svg class="w-3 h-3 flex-shrink-0 ml-1 fill-current text-ash-400" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg></div>
                                </button>
                                <div class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white border border-ash-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
                                    <div>
                                        <div class="pt-0.5 pb-2 px-3 mb-1 border-b border-ash-200">
                                            <div class="font-medium text-ash-800">{{ auth()->user()->name }}</div>
                                            <div class="text-xs text-ash-500 italic">Administrator</div>
                                        </div>
                                        <ul>
                                            <li><a class="font-medium text-sm text-orange-500 hover:text-orange-600 flex items-center py-1 px-3" href="/" style="outline: currentcolor none medium;">Settings</a></li>
                                            <li><a class="font-medium text-sm text-orange-500 hover:text-orange-600 flex items-center py-1 px-3" href="/" style="outline: currentcolor none medium;">Sign Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                    <div class="relative bg-ash-200 p-4 sm:p-6 rounded-sm overflow-hidden mb-8">
                        <div class="absolute right-0 top-0 -mt-4 mr-16 pointer-events-none hidden xl:block" aria-hidden="true">
                            <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                                    <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                                        <stop stop-color="#D4D4D8" offset="0%"></stop>
                                        <stop stop-color="#71717A" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                                        <stop stop-color="#3F3F46" offset="0%"></stop>
                                        <stop stop-color="#52525B" stop-opacity="0" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="rotate(64 36.592 105.604)">
                                        <mask id="welcome-d" fill="#fff">
                                            <use xlink:href="#welcome-a"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                                    </g>
                                    <g transform="rotate(-51 91.324 -105.372)">
                                        <mask id="welcome-f" fill="#fff">
                                            <use xlink:href="#welcome-e"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                    <g transform="rotate(44 61.546 392.623)">
                                        <mask id="welcome-h" fill="#fff">
                                            <use xlink:href="#welcome-g"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="relative">
                            <h1 class="text-2xl md:text-3xl text-ash-800 font-bold mb-1">Good afternoon, {{ auth()->user()->name }} 👋</h1>
                            <p>Here is what’s happening with your projects today:</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-6">
                        <div class="flex flex-col col-span-full sm:col-span-6 md:col-span-4 bg-white shadow-md rounded-sm border border-ash-200">
                            <div class="px-5 pt-5">
                                <header class="flex justify-between items-start mb-2">
                                    <h2 class="text-lg font-semibold text-ash-800 mb-2">Income</h2>
                                    <div class="relative inline-flex"><button class="text-ash-400 hover:text-ash-500 rounded-full false" aria-haspopup="true" aria-expanded="false" style="outline: currentcolor none medium;"><span class="sr-only">Menu</span><svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg></button>
                                        <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-ash-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
                                            <ul>
                                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 1</a></li>
                                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 2</a></li>
                                                <li><a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <div class="text-xs font-semibold text-ash-400 uppercase mb-1">PRE-ORDERS</div>
                                <div class="flex items-start mb-3">
                                    <div class="text-3xl font-bold text-ash-800 mr-2">$24,780</div>
                                    <div class="text-sm font-semibold text-white px-1.5 bg-orange-500 rounded-full">+49%</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col col-span-full sm:col-span-6 md:col-span-4 bg-white shadow-md rounded-sm border border-ash-200">
                            <div class="px-5 pt-5">
                                <header class="flex justify-between items-start mb-2">
                                    <h2 class="text-lg font-semibold text-ash-800 mb-2">Expenses</h2>
                                    <div class="relative inline-flex">
                                        <button class="text-ash-400 hover:text-ash-500 rounded-full false" aria-haspopup="true" aria-expanded="false" style="outline: currentcolor none medium;">
                                            <span class="sr-only">Menu</span>
                                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                        <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-ash-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
                                            <ul>
                                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 1</a></li>
                                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 2</a></li>
                                                <li><a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <div class="text-xs font-semibold text-ash-400 uppercase mb-1">Funding</div>
                                <div class="flex items-start mb-3">
                                    <div class="text-3xl font-bold text-ash-800 mr-2">$2,780</div>
                                    <div class="text-sm font-semibold text-white px-1.5 bg-orange-500 rounded-full">+49%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-ash-200">
                            <header class="px-5 py-4 border-b border-ash-100">
                                <h2 class="font-semibold text-ash-800">Customers</h2>
                            </header>
                            <div class="p-3">
                                <div class="overflow-x-auto">
                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-ash-400 bg-ash-50">
                                            <tr>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">Name</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">Email</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">Spent</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">Country</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-ash-100">
                                            <tr>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAAEBQYHAwIAAf/aAAgBAQAAAADXvX0/Es7sE7sGvwtTTG7B28JIvOdJ0nPaY5jNZYg3RJx6U/5D5013Dp4g6oWHlBNoIjgdPRLRWTIXOae/mKSrI4T8yQymrw5j7AimfX//xAAXAQADAQAAAAAAAAAAAAAAAAAAAQID/9oACgICEAMQAAAAYgYmRqiLuG1ARtebzUu0wIaphFk//8QALBAAAgEEAQIGAgICAwAAAAAAAQIDAAQFESEGEgcTIjFBURRhUnEyoRCB0f/aAAgBAQABPwD/AJ6k6rxnT1ru6uFErD0RryzVZ+Kjmby4sUzJ9tLomsZ4s4y6uPKvbSa1H8we8CluorqyFxayrLE67R0OwRVuKTZ9I/kCaEkf8xU+RWKXsGiKyfUUFhYTXMpGkUms1c3GUv5MhdsWnkPpT3CL8CklPmhFJeT4WMbNHpjKZXFvfx2U0V5Dye5decv/ALXQvV9xhrp7K6L/AIzHUkTe6H7FWxDIrIQVI2D91JcJEjxknuY0gQw7HI177q5kgRyASa6ruBMYLZSewku/9CstkxJI8UB49mcfP6rw86bgt8fHfSxhriTnZHtSAqmipFeI+BiFqmbtodTQHUxQf5JXQ18b/pu2LHbRkxGsowEzDu1tPf69zuom3bbI0de1ZCdhO21CgV1pmzJO8FudcdruK6UxQzPUVtbONxBu56vRDiccAtpcyxgaVLYHf+qxf5Ut0lzBaXlqHAby5pGPG9c7NdbyZFoJLYwzPB5bFgj9oavCS6L4S6jbkpIOKy+3u3hXhmVUDf3xUl7PDCD5yHj6rIXtzM0xkkIZt/8AQrM+qQsB6fv7roO+tosvFGFZJ+dt8GrTJxoRHIQQRV1kbG0ILSRwxkEs7cCnymOuQ0vejQkepiOBXhhewvms1BbKWgkmMkbD2C7NdUvJD58sQYuE2Avv7AD/AG1PhrUqoE++329VZmQiG7ZTyWVN/QNXDfls6shOh6OKxUb2OVg7u6ORjxsVhrqO/tu2TQnj4ZaurfKwdxtWhlgb4MXcyV4gZK7ssRBYTTFrq7DEqFCiOKvCa4Fv1T5JJCzW7VnFkWUuhG2OuaSUg1e9O29/cPIs0kYk/wA4wNgmpPDi+JHlSL2k7UMNFatPCe5mlWS8vgg2D6E9QrMdGZCzYXOMlMjJ7dh7XFWt71FHZSrL5S3KbCCaMqSfjeqzVvmJOoBcZ3kzcB15VV+hXhnhy3Ukt+0ifj2ymOH7es1IUVWUjlz6vo8cChJxWFxssLpc3Cab3jj+f7NQgxgdwUMfgUqGQbOz+hxUtvo8W6n991Za0l7JJFRT2Hvb71V9iYc7HHZSyNGjSBmK/IHxUSpjboNbWxW3WTyvLRBwvyay0SrjGljY+W8/eF19irW5a1nSdApZDsBhsVYzq1jFdsD3SKCoP3VsTIxY81HJunAZeDU8fq79bHsR9ioYfxs95O+EcgUZEtr8rIB2Oe4Vm1LYtVjAIMg/Wq//xAAbEQACAgMBAAAAAAAAAAAAAAAAEQECEBIxQf/aAAgBAgEBPwBm0DjN+FRlMWPBlSRCNRoZGZ4I/8QAHREAAgIDAQEBAAAAAAAAAAAAAAECERASMQNBUf/aAAgBAwEBPwBRb4atCTxR5dJu2JE0RaoifSif5hM2Y5uiK2JqmLPn0l0//9k=" alt="Alex Shatov" width="40" height="40"></div>
                                                        <div class="font-medium text-ash-800">Alex Shatov</div>
                                                    </div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left">alexshatov@gmail.com</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left font-medium text-green-500">$2,890.66</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-lg text-center">🇺🇸</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAGBwMEBQIBCP/aAAgBAQAAAABr6vecprLSvUuLVNBDRwYNXjPE0vUob5U9uKsCpV9qJlOCegIqMW1x93tifGERtH2Kn02c2cTEVwDikTKPNWfHWi25NWKR4mrl+VYJe5tX/8QAFwEBAQEBAAAAAAAAAAAAAAAAAgEAA//aAAoCAhADEAAAALtikbDYg+nJQMqxjTIJgLn07cZZttv/xAAyEAABAwMCBQIEBAcAAAAAAAABAgMEAAURBiESEzFBUQciFCRhcSMyQ4EzQnKRodHx/9oACAEBAAE/AIqelJOwoVeb/atPQ/i7tOaitdis7qPgDqau/r/DD7jNus5eY6Bx9zhJrSmt9HaglhmTFFvmvH9TdCj/AFVDsVvQchlFG2Qj7Qyn+1Xy0Q3bS6gspPtpLfCRig62kbqFXW+QrPaZVwkugNR2y4aLi9YTn9QamK3T0jxUnCGkeBUphhExRabRyuLZJGdqtmndIX62MtuxnbfcE9JEdWM/cHY16c3u4224ztI3WSH3ogC4jp/Uapj8oJ61PQXIbg+lFPtNXeHIPOcTcHG/AHarpPu1znm2yZrz0YvgLBOxSner1MWgEEvNsg7IG1B9Ko4dOVY3zVh1S81wR34Lb7A3SsbOIpT3D6i6XnsgnnHklQ6qT/wmmlgJFOuFaVp7YpKc7VIsMJ9C1OjiKhvk16hswLK9bokNltvmIedUpA+wqdPZlS8uJSgDHGat8uxhp5pboAeRwha+ys1arcw5cij4tHLSSnIJG3mtNWwTdW2JAd5jUFt6QSf2AplJ80kZChTb2+K1BqeVAmLjoTkYzXqBdJ04Q57jJDbPE1nGMhVWduHOujy5XMUweoQkFQP70/YrUXOfCmIWpPuDbjK0K/xkUxLUuc88SpKQc77HNejjL01d0u7oVyglEVg9j3XTVNfmWKSFA5FXdrN5W4W+L2Cr9DYu1nfjPpDTfXi8EdDSFLts5xCwoHpkUm7SGkqU3JVxEYHY1GZflvoabSpaiegr06n2636Wi2ptQS4wMOnys7k1HcSvdKgRTX8VX2p1wpkpx0NaqbMSIqSw0688vACG05JrX89dss7cR10JlSN1sA5UhH1q4hudFadCRxcA3oxSCKsEJUdfOJAUdt60HDdfuMgqJ+HCMLUfPagufbnUlt0Fs9OKm75ISkq4EFWPNTghhlLpO/anp63AcqNeoOmH59vbkwWlvLaUS6gZUtef5qhIU2lbCgfw1Y3FG13K5P8AyUV9wdBy0GrJpG9Ij4nPR0k9G+HiUPuascQWuGGBjOcqPk0w62+zy3cKSdiFVcrVPiLLsErfY68APvT/ALq/S/neQDshIoKpTh7U8hvdRQ2VeSgZolR+30prCaLxFMzuAjJqNcQdirav/8QAHhEBAAICAQUAAAAAAAAAAAAAAQARAhAgEiEiMVH/2gAIAQIBAT8A1fB0ayag2QIfNJZKo7TFD3M/JsnVny//xAAcEQEAAgMAAwAAAAAAAAAAAAABAAIQERIgIVH/2gAIAQMBAT8AxzhwRjgNy1eYscDpg9PuJ8lXRqFavl//2Q==" alt="Philip Harbach" width="40" height="40"></div>
                                                        <div class="font-medium text-ash-800">Philip Harbach</div>
                                                    </div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left">philip.h@gmail.com</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left font-medium text-green-500">$2,767.04</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-lg text-center">🇩🇪</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,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" alt="Mirko Fisuk" width="40" height="40"></div>
                                                        <div class="font-medium text-ash-800">Mirko Fisuk</div>
                                                    </div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left">mirkofisuk@gmail.com</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left font-medium text-green-500">$2,996.00</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-lg text-center">🇫🇷</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQEGAgMHAP/aAAgBAQAAAADqnpHDN3RGcDVmrubxuifVZY9qVsebMfctLTV7qzNtnq49Zk6/oumwEY8OapjujL3raeUnUC/WutP7AvAHVmwNmVsOwD3qVB//xAAUAQEAAAAAAAAAAAAAAAAAAAAA/9oACgICEAMQAAAAAAAAAAAAP//EADIQAAIBAwIFAgMGBwAAAAAAAAECAwAEEQUSBiEiMVETQRAykRQgI2FxwVJTcoKSoeH/2gAIAQEAAT8ArHwuryGzQmRhnGcUNXYjcbZinkGra6huo90TZxyIPcVij2+5f3i2Vq0pwW7KPJrUbc6ikUiOXlkByc1KvE+iFnt4BPAnSisSdq1w5xZFq1y0QQwalEu54iuA4qC4SeMMv08fd4tu4oomDliETkq+TXD12JbQTFh6I6UYnkRU11CYwPUU1c21vBxVZXkO1Xk3I+335Vp10BGg37mxgnzioZN6g/Dc38tq3nGdhriK+F/qeqWMpIjmBjU+CBV/o1zqHDlumjzxRbYwNjxhtwxWmcO6zpelXlxPPtMcZdI89z+1aW+rpxdaNqZdkJYrh+kZU1pY32/L58nAqxu5M7GRRjy9K7kfKv8Al8J2K2khXJIViKtWWfiFxcAKg5nJ7VdXd1psCxWcfT2XHM4/IVqmuy29k9pb3lvIJ1xKLkFHBPetMmj1HXLZT1RWqh3dfI7GraOP8G4i5B8OQPPvS3G3UX9gWyKglygPwYZgYec1xVutLjUsDHqyrGD4BzWma3cQ6VZ3M8ZmzErN5z2NcUcRaHeRM8cLJP7gE9X6iuB0fYjzR7RdozL+1WS+nZov8DEfUVeNiWKQf0tWnzb4hzoZocovrXEulDWLwxjlGZQz474FabpipGbaRcxou3+2tW4clbVZ4HQDY31FcM2SNpdsjEhrZxgj9RUyoFkKkhSPbyKjWSW7mE2FT51ZT2NacxiIjY9QozKq7j2/UVd35ZRGvJT9TT20RQdA75p7cI+9MgitX01J7yCUjk4CvVrafYrL0o+r3yPIP/a1HUXs7BpEQu0RQlR7qe9PcwPbOIG7Q70P5Ubz7LEkzNkKcHB9jVjGLLT9xBWR+bGo5mmeM5+YZo/J37UwTp3YyewJ71d3tpFdW9pJKBNNyjTaeqkkjQMpYZx1Ant4Na20TWfqwtkzKEBA3A9yD/urC2ubdLhJjuVYeR8FhkipIBeaHKjH5lXB8Gv/xAAUEQEAAAAAAAAAAAAAAAAAAABA/9oACAECAQE/AE//xAAUEQEAAAAAAAAAAAAAAAAAAABA/9oACAEDAQE/AE//2Q==" alt="Olga Semklo" width="40" height="40"></div>
                                                        <div class="font-medium text-ash-800">Olga Semklo</div>
                                                    </div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left">olga.s@cool.design</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left font-medium text-green-500">$1,220.66</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-lg text-center">🇮🇹</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,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" alt="Burak Long" width="40" height="40"></div>
                                                        <div class="font-medium text-ash-800">Burak Long</div>
                                                    </div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left">longburak@gmail.com</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left font-medium text-green-500">$1,890.66</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-lg text-center">🇬🇧</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-ash-200">
                            <header class="px-5 py-4 border-b border-ash-100">
                                <h2 class="font-semibold text-ash-800">Recent Activity</h2>
                            </header>
                            <div class="p-3">
                                <div>
                                    <header class="text-xs uppercase text-ash-400 bg-ash-50 rounded-sm font-semibold p-2">Today</header>
                                    <ul class="my-1">
                                        <li class="flex px-2">
                                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-orange-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-orange-50" viewBox="0 0 36 36">
                                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                                </svg></div>
                                            <div class="flex-grow flex items-center border-b border-ash-100 text-sm py-2">
                                                <div class="flex-grow flex justify-between">
                                                    <div class="self-center"><a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">Nick Mark</a> mentioned <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">Sara Smith</a> in a new post</div>
                                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex px-2">
                                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-red-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36">
                                                    <path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path>
                                                </svg></div>
                                            <div class="flex-grow flex items-center border-b border-ash-100 text-sm py-2">
                                                <div class="flex-grow flex justify-between">
                                                    <div class="self-center">The post <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">Post Name</a> was removed by <a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">Nick Mark</a></div>
                                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex px-2">
                                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-green-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-green-50" viewBox="0 0 36 36">
                                                    <path d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z"></path>
                                                </svg></div>
                                            <div class="flex-grow flex items-center text-sm py-2">
                                                <div class="flex-grow flex justify-between">
                                                    <div class="self-center"><a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">Patrick Sullivan</a> published a new <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">post</a></div>
                                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <header class="text-xs uppercase text-ash-400 bg-ash-50 rounded-sm font-semibold p-2">Yesterday</header>
                                    <ul class="my-1">
                                        <li class="flex px-2">
                                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-light-blue-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-light-blue-50" viewBox="0 0 36 36">
                                                    <path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path>
                                                </svg></div>
                                            <div class="flex-grow flex items-center border-b border-ash-100 text-sm py-2">
                                                <div class="flex-grow flex justify-between">
                                                    <div class="self-center"><a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">240+</a> users have subscribed to <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">Newsletter #1</a></div>
                                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex px-2">
                                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-orange-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-orange-50" viewBox="0 0 36 36">
                                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                                </svg></div>
                                            <div class="flex-grow flex items-center text-sm py-2">
                                                <div class="flex-grow flex justify-between">
                                                    <div class="self-center">The post <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">Post Name</a> was suspended by <a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">Nick Mark</a></div>
                                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div class="fixed bottom-0 right-0 w-full md:bottom-8 md:right-12 md:w-auto z-60">
                <div class="bg-ash-800 text-ash-50 text-sm p-3 md:rounded shadow-lg flex justify-between">
                    <div>👉 <a class="hover:underline" href="https://github.com/cruip/tailwind-dashboard-template" target="_blank" rel="noreferrer" style="outline: currentcolor none medium;">Download Mosaic Lite on GitHub</a></div><button class="text-ash-500 hover:text-ash-400 ml-5" style="outline: currentcolor none medium;"><span class="sr-only">Close</span><svg class="w-4 h-4 flex-shrink-0 fill-current" viewBox="0 0 16 16">
                            <path d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z"></path>
                        </svg></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>