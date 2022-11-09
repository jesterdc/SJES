@extends('layouts.app')


@section('content')
<div class="container m-auto justify-center text-center mt-28">
    <h1 class="text-3xl font-bold-text mx-auto text-center tracking-tight text-green-500 md:text-6xl">Online Document <i class=" text-green-600 ml-1">Request</i></h1>
    <p class="text-base m-auto font-paragraph-text text-gray-800 md:text-lg">Requesting document made easier, accessible and hassle-free.</p>
</div>

<div class="container m-auto flex justify-center space-x-5 mt-5 p-3">
    @auth
        
    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="font-nav-text transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 rounded-full text-white bg-green-900 hover:shadow-2xl hover:bg-green-200 hover:text-green-900 focus:outline-none text-lg px-4 py-2.5 
    text-center inline-flex items-center" type="button">Request Document <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="hidden z-10 w-48 text-start p-5 bg-yellow-100 rounded-2xl divide-y divide-gray-100 shadow">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
          <li>
            <a href="{{ route('student') }}" class="text-lg block py-2 px-4 rounded-xl hover:text-white hover:bg-green-900">for Student</a>
          </li>
          <li>
            <a href="{{ route('employee_form') }}" class="text-lg block py-2 px-4 rounded-xl hover:text-white hover:bg-green-900">for Employee</a>
          </li>
        </ul>
    </div>
    <div>
      <button class="sm:hidden transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 font-nav-text rounded-full text-white bg-green-200 hover:shadow-xl hover:bg-green-100 focus:outline-none text-lg px-4 py-2.5 
      text-center inline-flex items-center" type="button"><img src="{{ asset('images/track.png') }}" alt="Track Status" class="max-h-10  sm:hidden"></button>
          
          <button class="font-nav-text text-lg rounded-full hidden sm:block hover:bg-green-200 hover:border-green-200 hover:text-green-900 border-2 border-green-900 p-3 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 ...">Track Existing Request</button>
    </div>
    @endauth

    @guest
    <a href="{{ route('login') }}"><button class="font-nav-text transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 rounded-full text-white bg-green-900 hover:shadow-2xl hover:bg-green-200 hover:text-green-900 focus:outline-none text-lg px-5 py-3 
    text-center inline-flex items-center" type="button">Login to Request</button></a>
    @endguest
</div>   


<section class="py-10 mt-34 sm:py-16 lg:py-24">
    <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="grid items-center md:grid-cols-2 gap-y-10 md:gap-x-20">
            <div class="pr-12 sm:pr-0">
                <div class="relative max-w-xs mb-12">
                    <img class="object-bottom rounded-md" src="https://cdn.rareblocks.xyz/collection/celebration/images/features/4/man-eating-noodles.jpg" alt="" />

                    <img class="absolute origin-bottom-right scale-75 rounded-md -bottom-12 -right-12" src="https://cdn.rareblocks.xyz/collection/celebration/images/features/4/smiling-businessman.jpg" alt="" />
                </div>
            </div>

            <div>
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Grow business with Celebration.</h2>
                <p class="mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-10 bg-white bg-opacity-70 sm:py-16 lg:py-24">
    <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Frequently Asked Questions</h2>

        <div class="flow-root mt-12 sm:mt-16">
            <div class="divide-y divide-gray--200 -my-9">
                <div class="py-9">
                    <p class="text-xl font-semibold text-black">How to create an account?</p>
                    <p class="mt-3 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    <p class="mt-3 text-base text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="py-9">
                    <p class="text-xl font-semibold text-black">What payment method do you support?</p>
                    <p class="mt-3 text-base text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>
                </div>

                <div class="py-9">
                    <p class="text-xl font-semibold text-black">What payment method do you support?</p>
                    <p class="mt-3 text-base text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="py-9">
                    <p class="text-xl font-semibold text-black">How do you provide support?</p>
                    <p class="mt-3 text-base text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <a href="#" title="" class="text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline">support@Celebration.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="py-10 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="text-center">
            <h2 class="text-3xl font-logo-text leading-tight text-black sm:text-4xl lg:text-5xl">Ready to request?</h2>

            <div class="flex flex-col items-center justify-center px-16 mt-3 md:mt-8 space-y-4 sm:space-y-0 sm:space-x-4 sm:flex-row lg:mt-10 sm:px-0">
                <a href="{{ route('login') }}" title="" class="inline-flex items-center justify-center sm:w-auto px-5 py-2 md:px-20 md:py-4 font-nav-text text-base sm:text-xl text-white transition-all duration-200 bg-green-900 border border-transparent rounded-full hover:bg-green-500" role="button"> Request Now </a>
            </div>
        </div>
    </div>
</section>


@endsection


