@extends('layouts.app')

@section('content')
<section class="py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                <div>
                    <h1 class="mt-4 text-4xl font-bold text-blue-900 lg:mt-8 sm:text-6xl xl:text-8xl">San Juan Elementary School</h1>
                    <p class="mt-4 text-base font-title-text text-black lg:mt-8 sm:text-xl">N. Domingo cor. A. Luna Street, San Juan City</p>
                   
                </div>
                <div>
                    <img class="w-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/1/hero-img.png" alt="" />
                </div>
            </div>
        </div>
</section>


<section class="py-10 sm:py-16 lg:py-24 bg-white">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
            <div class="hidden relative sm:flex lg:mb-12">
                <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
                <div class="pl-12 pr-6">
                    <img class="relative rounded-lg opacity-90" src="{{ asset('images/about_st.jpg') }}" alt="" />
                </div>
            </div>

            <div class="2xl:pl-16">
                <h2 class="text-3xl font-logo-text leading-tight text-blue-900 sm:text-4xl lg:text-5xl lg:leading-10">Mission</h2>
                <p class="text-xl text-gray-900 mt-9">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia conse duis enim velit mollit. Exercitation veniam.</p>
                <p class="mt-6 text-xl text-gray-900">Velit officia conse duis enim velit mollit. Exercit ation veniam consequat sunt nostrud amet.</p>
            </div>


            <div class="relative sm:hidden lg:mb-12">
                <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
                <div class="pl-12 pr-6">
                    <img class="relative rounded-lg opacity-90" src="{{ asset('images/about_st.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-10 sm:py-16 lg:py-24 bg-white bg-opacity-50">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
            <div class="2xl:pl-16">
                <h2 class="text-3xl font-logo-text leading-tight text-blue-900 sm:text-4xl lg:text-5xl lg:leading-tight">Vision</h2>
                <p class="text-xl text-gray-900 mt-9">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia conse duis enim velit mollit. Exercitation veniam.</p>
                <p class="mt-6 text-xl text-gray-900">Velit officia conse duis enim velit mollit. Exercit ation veniam consequat sunt nostrud amet.</p>
            </div>

            <div class="relative lg:mb-12">
                <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
                <div class="pl-12 pr-6">
                    <img class="relative rounded-lg opacity-90" src="{{ asset('images/happy.jpg') }}" alt="" />
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-10 sm:py-16 lg:py-24 bg-white">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
            <div class="hidden relative sm:flex lg:mb-12">
                <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
                <div class="pl-12 pr-6">
                    <img class="relative rounded-lg opacity-90" src="{{ asset('images/about_st.jpg') }}" alt="" />
                </div>
            </div>

            <div class="2xl:pl-16">
                <h2 class="text-3xl font-logo-text leading-tight text-blue-900 sm:text-4xl lg:text-5xl lg:leading-10">Goals</h2>
                <p class="text-xl text-gray-900 mt-9">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia conse duis enim velit mollit. Exercitation veniam.</p>
                <p class="mt-6 text-xl text-gray-900">Velit officia conse duis enim velit mollit. Exercit ation veniam consequat sunt nostrud amet.</p>
            </div>


            <div class="relative sm:hidden lg:mb-12">
                <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
                <div class="pl-12 pr-6">
                    <img class="relative rounded-lg opacity-90" src="{{ asset('images/about_st.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-10 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">How does the website work</h2>
            <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
        </div>

        <ul class="max-w-md mx-auto mt-16 space-y-12">
            <li class="relative flex items-start">
                <div class="-ml-0.5 absolute mt-0.5 top-14 left-8 w-px border-l-4 border-dotted border-gray-300 h-full" aria-hidden="true"></div>

                <div class="relative flex items-center justify-center flex-shrink-0 w-16 h-16 bg-white rounded-full shadow">
                    <svg class="w-10 h-10 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <div class="ml-6">
                    <h3 class="text-lg font-semibold text-black">Create a free account</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>
            </li>

            <li class="relative flex items-start">
                <div class="-ml-0.5 absolute mt-0.5 top-14 left-8 w-px border-l-4 border-dotted border-gray-300 h-full" aria-hidden="true"></div>

                <div class="relative flex items-center justify-center flex-shrink-0 w-16 h-16 bg-white rounded-full shadow">
                    <svg class="w-10 h-10 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg>
                </div>
                <div class="ml-6">
                    <h3 class="text-lg font-semibold text-black">Request a Document</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>
            </li>

            <li class="relative flex items-start">
                <div class="relative flex items-center justify-center flex-shrink-0 w-16 h-16 bg-white rounded-full shadow">
                    <svg class="w-10 h-10 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="ml-6">
                    <h3 class="text-lg font-semibold text-black">Wait for the release notification</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>
            </li>
        </ul>
    </div>
</section>


<section class="py-10 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="text-center">
            <h2 class="text-3xl font-logo-text leading-tight text-black sm:text-4xl lg:text-5xl">Ready to request?</h2>

            <div class="flex flex-col items-center justify-center px-16 mt-3 md:mt-8 space-y-4 sm:space-y-0 sm:space-x-4 sm:flex-row lg:mt-10 sm:px-0">
                <a href="{{ route('login') }}" title="" class="inline-flex items-center justify-center sm:w-auto px-5 py-2 md:px-20 md:py-4 font-nav-text text-base sm:text-xl text-white transition-all duration-200 bg-blue-900 border border-transparent rounded-full hover:bg-blue-500" role="button"> Request Now </a>
            </div>
        </div>
    </div>
</section>






@endsection