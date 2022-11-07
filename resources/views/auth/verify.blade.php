@extends('layouts.app')

@section('content')


<section class=" mt-14 mb-14 py-10 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl mb-24">
        <div class="grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 lg:gap-x-24">
            <div class="hidden lg:flex">
                <img class="w-full max-w-md mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/integration/2/services-icons.png" alt="" />
            </div>

            <div class="mt-10 text-center lg:text-left">
                <h2 class="text-3xl font-logo-text leading-tight text-green-900 sm:text-4xl lg:text-5xl">Verify your email address</h2>

                @if(session('resent'))
                <div class="bg-yellow-200 mt-5 mb-5 rounded-md" role="alert">
                    <p class="mt-6 p-5 font-paragraph-text text-lg text-center text-gray-900">{{ __('A fresh verification link has been sent to your email address.') }}</p>
                </div>
                @endif
           
        
                 <p class="mt-6 font-paragraph-text text-black"> {{ __('You are one step away. Before proceeding, please check your email for a verification link.') }}


                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <p class="mt-6 font-paragraph-text  text-black"> {{ __('If you did not receive the email') }}</p>
                    <button type="submit" class="mt-2 inline-flex items-center justify-center px-8 py-4 font-semibold text-white transition-all duration-200 bg-green-900 rounded-md hover:bg-green-500 focus:bg-green-200 focus:text-green-900">{{ __('Click here to request another') }}</button>
                </form>
    
            </div>
        </div>
    </div>
</section>

@endsection

