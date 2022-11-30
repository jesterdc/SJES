@vite('resources/css/app.css')



<section class=" mt-14 mb-14 py-10 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl mb-24">
        <div class="grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 lg:gap-x-24">
            <div class="flex">
                <img class="w-full max-w-md mx-auto" src="{{ asset('images/check-list.png') }}" alt="" />
            </div>

            <div class="mt-10 text-center lg:text-left">
                <h2 class="text-3xl font-logo-text text-blue-900 sm:text-4xl lg:text-5xl">Request Status</h2>

            

                <div class="mx-auto flex flex-col lg:flex-row mt-7"> 
                    <div class="w-full pr-4">
                        <div class="mb-4 lg:mb-0">
                            <label for="first_name" class="font-title-text">Transaction Number</label>
                            <input type="text" class="text-center text-blue-900 font-nav-text w-full py-3 mb-1
                            bg-blue-100 rounded-lg border-white text-sm md:text-lg" value="{{ request()->number }}"disabled>
                        </div>
                    </div>
                    <div class="w-full pr-4">
                        <div class="mb-4 lg:mb-0">
                            <label for="first_name" class="font-title-text">Pin</label>
                            <input type="text" class="text-center text-blue-900 font-nav-text w-full py-3 px-5 mb-1
                            bg-blue-100 rounded-lg border-white text-sm md:text-lg" value="{{ request()->pin }}" disabled>
                        </div>
                    </div>   
                </div>

                <p class="text-xl mt-6 md:mb-10 font-paragraph-text text-black"><b class="text-blue-900">{{ request()->name }}</b>{{ __(', Thank you for your patience!') }}</p>
                <p class="text-xl font-paragraph-text text-black"> {{ __('Your request is currently:') }}</p>

                <div class="w-full pr-4">
                    <div class="mb-4 lg:mb-0">
                        <input type="text" class="text-center text-blue-900 font-nav-text w-full py-3 px-5 mb-1
                        bg-blue-100 rounded-lg border-0 text-sm md:text-lg" value="{{ request()->status }}" disabled>
                    </div>
                </div> 
                
                 <a href="{{ route('index') }}"><button type="submit" class=" font-nav-text mt-8 inline-flex items-center justify-center px-8 py-4 
                     text-white transition-all duration-200 text-xl
                    bg-blue-900 rounded-lg hover:bg-blue-500 focus:bg-blue-200 focus:text-blue-900">{{ __('Back to home') }}</button></a>
            </div>
        </div>
    </div>
</section>

