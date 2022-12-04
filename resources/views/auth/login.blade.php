@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="text-md font-nav-text text-white mx-auto bg-red-600 rounded-2xl py-3 px-3 md:max-w-2xl text-center mt-5 mb-5">
{{ session()->get('message') }}
</div>
@endif

<section class=" mt-20 mb-20 sm:mt-0">
    <div class="grid grid-cols-1">
        <div class="flex items-center justify-center px-4 py-10sm:px-6 lg:px-8 sm:py-16 lg:py-24">
            <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                <h2 class="text-3xl font-logo-text leading-tight text-blue-900 sm:text-4xl">Sign in to Request</h2>
                <p class="font-paragraph-text mt-2 text-base text-gray-600">Don’t have an account? <a href="{{ route('register') }}" title="" class="font-medium transition-all duration-200 text-teal-800  hover:text-orange-700 hover:underline">Register here</a></p>

                @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{ route('login') }}" method="POST" class="mt-8">
                    @csrf
                    <div class="space-y-5">
                        <div>
                            <label for="" class="text-base font-paragraph-text text-gray-900"> Email address </label>
                            <div class="mt-2.5">
                                @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="Enter email to get started"
                                    value="{{ old('email') }}"
                                    class=" @error('email') border-red-500 @enderror block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-blue-900 rounded-md
                                     bg-gray-50 focus:outline-none focus:border-blue-900"/>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="" class="text-base font-paragraph-text text-gray-900"> Password </label>
                                <a href="{{ route('password.request') }}" title="" class="text-sm font-medium hover:underline text-teal-800  hover:text-orange-700"> Forgot password? </a>
                            </div>
                            <div class="mt-2.5">
                                @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="Enter your password"
                                    class=" @error('password') border-red-500 @enderror block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-blue-900 rounded-md bg-gray-50 focus:outline-none focus:border-blue-900"
                                />
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-paragraph-text text-white transition-all duration-200
                             bg-blue-900 border border-transparent rounded-md focus:outline-none hover:text-blue-900 hover:bg-blue-100 focus:bg-blue-300">Log in</button>
                        </div>
                    </div>
                </form>

                <div class="mt-3 space-y-3">
                   <a href="{{ route('google.auth') }}"><button
                        type="button"
                        class="relative inline-flex items-center justify-center w-full px-4 py-4 text-base font-nav-text text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 rounded-md hover:bg-gray-100 focus:bg-gray-100 hover:text-black focus:text-black focus:outline-none"
                    >
                        <div class="absolute inset-y-0 left-0 p-4">
                            <svg class="w-6 h-6 text-red-600" xmlns="https://icons8.com/icon/17949/google" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z"
                                ></path>
                            </svg>
                        </div>
                        Sign in with Google
                    </button></a>

                </div>
                <div class="mt-2.5">
            </div>
        </div>

    </div>
</section>
@endsection