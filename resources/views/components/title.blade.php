@props(['color'])

@php
$classes = ($color == 'light')
            ? 
            "sm:text-3xl text-2xl font-medium relative inline-block title-font text-gray-200 mb-12
             before:absolute before:h-[1px] before:bg-ash-100 before:w-3/5 before:-top-2 before:left-[-15%]
             after:absolute after:h-[1px] after:bg-ash-100 after:w-3/5 after:-bottom-2 after:right-[-15%]"
            :
            "sm:text-3xl text-2xl font-medium relative inline-block title-font text-gray-900 mb-12
             before:absolute before:h-[1px] before:bg-ash-800 before:w-3/5 before:-top-2 before:left-[-15%]
             after:absolute after:h-[1px] after:bg-ash-800 after:w-3/5 after:-bottom-2 after:right-[-15%]";
@endphp
<div class="text-center">
    <h1 {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </h1>
</div>