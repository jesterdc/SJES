@vite('resources/css/app.css')



<section class=" mt-14 mb-14 py-10 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl mb-24">
        <div class="grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 lg:gap-x-24">
            <div class="flex">
                <img class="w-full max-w-md mx-auto" src="{{ asset('images/checked.png') }}" alt="" />
            </div>

            <div class="mt-10 text-center lg:text-left">
                <h2 class="text-3xl font-logo-text text-green-900 sm:text-4xl lg:text-5xl">Request Complete!</h2>

                <p class="text-xl mt-6 font-paragraph-text text-black"> {{ request()->name }}  {{ __(', Thank you for requesting!') }}</p>

                                <!-- The text field -->
                <input type="text" value="{{ request()->number }}" id="myInput" disabled>
                <input type="text" value="{{ request()->pin }}" id="myInput" disabled>

                <!-- The button used to copy the text -->
                <button onclick="myFunction()">Copy text</button> 



                 <p class="text-xl font-paragraph-text text-black"> {{ __('Your request has been sent and will be processed.') }}</p>

                
                 <a href="{{ route('home') }}"><button type="submit" class=" font-nav-text mt-8 inline-flex items-center justify-center px-8 py-4 
                     text-white transition-all duration-200 text-xl
                    bg-green-900 rounded-lg hover:bg-green-500 focus:bg-green-200 focus:text-green-900">{{ __('Back to home') }}</button></a>
            </div>
        </div>
    </div>
</section>


<script>
    function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
} 
</script>


