<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }}</title>
        <link rel="shortcut icon" href="{{ asset('images/sjes_logo.png') }}" type="image/x-icon">
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="h-screen">

    <nav class="p-3 rounded border-gray-200">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/sjes_logo.png') }}" class="mr-1 h-10 sm:h-16" alt="SJES Logo">
            <span class="self-center text-lg md:text-xl font-logo-text whitespace-nowrap text-blue-900">San Juan Elementary School</span>
        </a>
        <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex justify-center items-center ml-3 text-blue-900 rounded-lg md:hidden hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-900 " aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="text-center flex flex-col p-5 mt-4 bg-red-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent">
            <li>
                <a href="{{ route('about') }}" class="font-nav-text text-lg block py-2 pr-4 pl-3
                text-blue-900 rounded hover:bg-blue-500 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-500 md:p-0">About</a>
            </li>
            <li>
                <a href="{{ route('contact.show') }}" class="font-nav-text text-lg block py-2 pr-4 pl-3
                text-blue-900 rounded hover:bg-blue-500 hover:text-white  md:hover:bg-transparent md:border-0
                md:hover:text-blue-500 md:p-0">Contact</a>
            </li>
            @guest
            <li>
                <a href="{{ route('register') }}" class="font-nav-text text-lg block py-2 pr-4 pl-3
                text-blue-900 rounded hover:bg-blue-500 hover:text-white  md:hover:bg-transparent md:border-0
                md:hover:text-blue-500 md:p-0">Register</a>
            </li>
            <li>
                <a href="{{ route('login') }}" class="font-nav-text text-lg block py-2 pr-4 pl-3
                text-blue-900 rounded hover:bg-blue-500 hover:text-white  md:hover:bg-transparent md:border-0
                md:hover:text-blue-500 md:p-0">Login</a>
            </li>
            @endguest

            @auth
            <li>
                <p href="" class="font-nav-text text-lg block py-2 pr-4 pl-3
                text-blue-900 rounded hover:bg-blue-500 hover:text-white  md:hover:bg-transparent md:border-0
                md:hover:text-blue-500 md:p-0">{{ auth()->user()->name }}</p>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post" class="">
                    @csrf
                    <a class="font-nav-text text-lg block py-2 pr-4 pl-3
                    text-blue-900 rounded hover:bg-blue-500 hover:text-white  md:hover:bg-transparent md:border-0
                    md:hover:text-blue-500 md:p-0"><button class=""type="submit">Logout</button> </a>
                    
                </form>
            </li>
            @endauth
        
            </ul>
        </div>
        
        </div>
  </nav>


    @yield('content')


   
<footer class="static w-full bottom-0 p-4 bg-transparent sm:p-6">
    
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/sjes_logo.png') }}" class="mr-1 h-10" alt="SJES Logo">
                <span class="self-center text-blue-900 text-2xl font-logo-text"><abbr class="decoration-transparent" title="San Juan Elementary School">SJES</abbr></span>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-1">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Legal</h2>
                <ul class="text-blue-900">
                    <li class="mb-4">
                        <button class="block text-blue-900 hover:underline" type="button" data-modal-toggle="defaultModal">
                            Terms of Service
                          </button>
                    </li>
                    <li>
                        <button class="block text-blue-900 hover:underline" type="button" data-modal-toggle="medium-modal">
                            Privacy Policy
                            </button>
                    </li>
                </ul>

                <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex justify-between items-start p-4 rounded-t border-b">
                                <h3 class="text-2xl font-logo-text text-blue-900 ">
                                    Terms of Service
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="defaultModal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="font-paragraph-text text-base leading-relaxed text-gray-800">
                                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                                </p>
                                <p class="font-paragraph-text text-base leading-relaxed text-gray-800">
                                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                <div id="medium-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex justify-between items-center p-5 rounded-t border-b">
                                <h3 class="text-2xl font-logo-text text-blue-900">
                                    Privacy Policy
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="medium-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span> 
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="font-paragraph-text text-base leading-relaxed text-gray-800">
                                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                                </p>
                                <p class="font-paragraph-text text-base leading-relaxed text-gray-800">
                                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

          </div>
            </div>
        </div>
    </div>
    <hr class="my-6 border-blue-900 sm:mx-auto lg:my-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-blue-900 sm:text-center">© 2022 <a href="{{ route('home') }}" class="hover:underline">SJES™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="https://www.facebook.com/profile.php?id=100057631862429" target="blank" class=" text-blue-900 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="https://www.instagram.com/explore/locations/328727374/san-juan-elementary-school/" target="blank" class=" text-blue-900 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="#" class=" text-blue-900 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                <span class="sr-only">Twitter page</span>
            </a>
        </div>
    </div>
</footer>


    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>   
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>   
    </body>
    
</html>
 