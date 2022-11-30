@extends('layouts.app')


@section('content')
<div class="flex flex-row justify-center">
      <div id="alert-additional-content-2" class="mx-2 max-w-3xl p-4 border border-blue-300 rounded-lg bg-blue-50" role="alert">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-900 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
              </svg>
          <h3 class="text-lg sm:text-xl font-nav-text text-blue-900 pl-2">Advisory</h3>
        </div>
        <div class="mt-2 mb-4 text-sm sm:text-base text-gray-900">
            <p class="font-paragraph-text">Your document request <b>PIN</b> together with the <b>Transaction Number</b> is now required for tracking. You can find the PIN on the confirmation email sent to you. 
                You can ask the assistance of the Registration Services office if you accidentally deleted the email. </p>
        </div>
        <div class="flex">
          <button type="button" class="text-blue-900 bg-transparent border border-blue-900 hover:bg-blue-900 hover:text-white focus:ring-4
           font-medium md:text-base rounded-lg text-xs px-3 py-1.5 text-center" data-dismiss-target="#alert-additional-content-2" aria-label="Close">
            Dismiss
          </button>
        </div>
      </div>
</div>
<div class="h-12 md:h-0"></div>
@livewire('track-request-form')
<div class=" h-52"></div>


@endsection