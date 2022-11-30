@vite('resources/css/app.css')



<section class=" mt-20 mb-20 sm:mt-0">
    <div class="grid grid-cols-1">
        <div class="flex items-center justify-center px-4 py-10sm:px-6 lg:px-8 sm:py-16 lg:py-24">
            <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                <h2 class="text-3xl font-logo-text leading-tight text-blue-900 sm:text-4xl">Password Reset</h2>
                <p class="font-paragraph-text mt-2 text-base text-gray-600">Enter your email to reset your password</p>

                @if (session('status'))
                <div class="bg-green-400 p-4 rounded-lg mb-6 mt-2 text-white text-center">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{ route('password.email') }}" method="POST" class="mt-8">
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
                            <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-paragraph-text text-white transition-all duration-200
                             bg-blue-900 border border-transparent rounded-md focus:outline-none hover:text-blue-900 hover:bg-blue-100 focus:bg-blue-300">Send Password Reset Link</button>
                        </div>
                    </div>
                </form>
                <div class="mt-2.5">
            </div>
        </div>

    </div>
</section>
{{-- <div class="container m-auto">
    <div class="flex flex-wrap justify-center m-auto">
        <div class="w-full m-auto">
            <div class="relative flex flex-col">
                <div class="text-3xl font-logo-text leading-tight text-blue-900 sm:text-4xl">{{ __('Reset Password') }}</div>

                <div class="flex-auto p-6">
                    @if (session('status'))
                        <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="flex flex-wrap  mb-3">
                            <label for="email" class="text-base font-paragraph-text text-gray-900">{{ __('Email Address') }}</label>

                            <div class="md:w-1/2 pr-4 pl-4">
                                <input id="email" type="email" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('email') bg-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap  mb-0">
                            <div class="md:w-1/2 pr-4 pl-4 md:mx-1/3">
                                <button type="submit" class="relative inline-flex items-center justify-center w-full px-4 py-4 text-base font-nav-text text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 rounded-md
                                 hover:bg-gray-100 focus:bg-gray-100 hover:text-black focus:text-black focus:outline-none">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}