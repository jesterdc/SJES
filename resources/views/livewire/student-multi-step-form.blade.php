<div class="">
    
    <form wire:submit.prevent="register">

        {{-- STEP 1 --}}

        @if ($currentStep == 1)

        
            
     
        <div class="step-one">
         
            <div class="relative flex flex-col mb-10 w-80 m-auto shadow-lg sm:w-auto sm:ml-28 sm:mr-28 bg-gray-50 rounded-lg p-10">
                <div class="mx-auto container flex justify-between">
                    <div class="text-sm sm:text-2xl text-center border-gray-300 text-green-900 font-logo-text">STEP: 1 of 4</div>
                    <div class="text-xs font-thin  py-1 sm:text-lg text-center sm:py-3 border-gray-300 text-green-900 font-logo-text">Personal Information</div>
                    <div class="hidden text-center border-gray-300 text-green-900 font-logo-text">  </div>
                    <div class="hidden text-center border-gray-300 text-green-900 font-logo-text">  </div>
                </div>
                <hr class="border-green-600 m-4">
                <div class="m-auto flex-col sm:p-6">
                    <div class="flex flex-col">
                        <div class="w-full pr-4 pl-4">
                            <div class="mb-4">
                                <label for="first_name" class="font-title-text">First Name</label>
                                <input type="text" class=" font-nav-text text-md w-full py-3 px-5 mb-1
                                bg-white rounded-lg border-white shadow-lg placeholder:text-md" placeholder="Enter your first name" wire:model="first_name">
                               <span class=" text-sm text-red-600">@error('first_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="w-full pr-4 pl-4">
                           <div class="mb-4">
                               <label for="middle_name" class="font-title-text">Middle name</label>
                               <input type="text" class="font-nav-text text-md w-full py-3 px-5 mb-1
                               bg-white rounded-lg border-white shadow-lg placeholder:text-md" placeholder="Enter your last name" wire:model="middle_name">
                               <span class="text-red-600 text-sm">@error('middle_name'){{ $message }}@enderror</span>
                           </div>
                       </div>
                       <div class="w-full pr-4 pl-4">
                        <div class="mb-4">
                            <label for="last_name" class="font-title-text">Last name</label>
                            <input type="text" class=" font-nav-text text-md w-full py-3 px-5 mb-1
                            bg-white rounded-lg border-white shadow-lg placeholder:text-md" placeholder="Enter your last name" wire:model="last_name">
                            <span class="text-red-600 text-sm">@error('last_name'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    </div>
                    <div class="flex ">
                        <div class="w-full pr-4 pl-4">
                            <div class="mb-4" >
                                <label for="gender" class="font-title-text">Gender</label>
                                <select class=" text-gray-800 font-nav-text text-md w-full py-3 px-5 mb-1
                                bg-white rounded-lg border-white shadow-lg placeholder:text-md" wire:model="gender">
                                       <option value="" selected>Select gender</option>
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                       <option value="no_response">Prefer not to respond</option>
                                </select>
                                <span class="text-red-600 text-sm">@error('gender'){{ $message }}@enderror</span>
                            </div>
                        </div>
        
                    </div>
        
                </div>


                <div class="flex justify-between w-auto mx-6 sm:w-96 sm:m-auto">

                    @if($currentStep == 1)
                     <div></div>
                    @endif
        
                     
                     @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                         <button type="button" class="px-4 text-sm font-nav-text rounded-full py-2 sm:px-8  sm:text-lg  bg-green-900 text-white hover:bg-green-500" wire:click="increaseStep()">Next</button>
                     @endif
                     
                         
                        
                  </div>
         


            </div>
        </div>
        @endif

        {{-- STEP 2 --}}

        @if ($currentStep == 2)
            
       
        <div class="step-two">
            <div class="relative flex flex-col mb-10 w-80 m-auto shadow-lg sm:w-auto sm:ml-28 sm:mr-28 bg-gray-50 rounded-lg p-10">
                <div class="mx-auto container flex justify-between">
                    <div class="text-sm sm:text-2xl text-center border-gray-300 text-green-900 font-logo-text">STEP: 2 of 4</div>
                    <div class="text-xs font-thin  py-1 sm:text-lg text-center sm:py-3 border-gray-300 text-green-900 font-logo-text">Contact Details</div>
                    <div class="hidden text-center border-gray-300 text-green-900 font-logo-text">  </div>
                    <div class="hidden text-center border-gray-300 text-green-900 font-logo-text">  </div>
                </div>
                <hr class="border-green-600 m-4">
                <div class="m-auto flex-col sm:p-6">
                    <div class="flex flex-col">
                        <div class="w-full pr-4 pl-4">
                            <div class="mb-4">
                                <label for="email" class="font-title-text">Email Address</label>
                                <input type="email" class="font-nav-text text-md w-full py-3 px-5 mb-1
                                bg-white rounded-lg border-white shadow-lg placeholder:text-md" placeholder="Enter email address" wire:model="email">
                                <span class="text-red-600 text-sm">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="w-full pr-4 pl-4">
                           <div class="mb-4">
                               <label for="contact" class="font-title-text">Contact</label>
                               <input type="text" class="font-nav-text text-md w-full py-3 px-5 mb-1
                               bg-white rounded-lg border-white shadow-lg placeholder:text-md" placeholder="Enter phone number" wire:model="contact">
                               <span class="text-red-600 text-sm">@error('contact'){{ $message }}@enderror</span>
                           </div>
                       </div>
                    </div>
                    <div class="flex">
                        <div class="w-full pr-4 pl-4">
                            <div class="mb-4">
                                <label for="address" class="font-title-text">Address</label>
                                <input type="text" class="font-nav-text text-md w-full py-3 px-5 mb-1
                                bg-white rounded-lg border-white shadow-lg placeholder:text-md" placeholder="Enter address" wire:model="address">
                                <span class="text-red-600 text-sm">@error('address'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex justify-between w-auto mx-6 sm:w-96 sm:m-auto">

                    @if($currentStep == 1)
                     <div></div>
                    @endif
          
                     @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                         <button type="button" class="px-4 text-sm font-nav-text rounded-full py-2 sm:px-8 sm:text-lg bg-yellow-700 text-white hover:bg-yellow-400" wire:click="decreaseStep()">Back</button>
                     @endif
                     
                     @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                         <button type="button" class="px-4 text-sm font-nav-text rounded-full py-2 sm:px-8  sm:text-lg  bg-green-900 text-white hover:bg-green-500" wire:click="increaseStep()">Next</button>
                     @endif
                     
            
                         
                        
                  </div>


            </div>
        </div>

        @endif
        {{-- STEP 3 --}}

        @if ($currentStep == 3)
            
    
        <div class="step-three">
            <div class="relative flex flex-col mb-10 w-80 m-auto shadow-lg sm:w-auto sm:ml-28 sm:mr-28 bg-gray-50 rounded-lg p-10">
                <div class="mx-auto container flex justify-between">
                    <div class="text-sm sm:text-2xl text-center border-gray-300 text-green-900 font-logo-text">STEP: 3 of 4</div>
                    <div class="text-xs font-thin  py-1 sm:text-lg text-center sm:py-3 border-gray-300 text-green-900 font-logo-text">Contact Details</div>
                    <div class="hidden text-center border-gray-300 text-green-900 font-logo-text">  </div>
                    <div class="hidden text-center border-gray-300 text-green-900 font-logo-text">  </div>
                </div>
                <hr class="border-green-600 m-4">
                    <div class="m-auto flex-col sm:p-6">
                            <div class="w-full pr-4 pl-4">
                                <div class="mb-4">
                                    <label for="lrn" class="font-title-text">Learner Reference Number (LRN)</label>
                                    <input type="text" class="font-nav-text text-md w-full py-3 px-5 mb-1
                                    bg-white rounded-lg border-white shadow-lg placeholder:text-sm sm:placeholder:text-lg" placeholder="Enter your LRN" wire:model="lrn">
                                    <span class="text-red-600 text-sm">@error('lrn'){{ $message }}@enderror</span>
                                </div>
                            </div>
                    </div>

                    

                    <div class="flex justify-between w-auto mx-6 sm:w-96 sm:m-auto">

                        @if($currentStep == 1)
                         <div></div>
                        @endif
              
                         @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                             <button type="button" class="px-4 text-sm font-nav-text rounded-full py-2 sm:px-8 sm:text-lg bg-yellow-700 text-white hover:bg-yellow-400" wire:click="decreaseStep()">Back</button>
                         @endif
                         
                         @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                             <button type="button" class="px-4 text-sm font-nav-text rounded-full py-2 sm:px-8  sm:text-lg  bg-green-900 text-white hover:bg-green-500" wire:click="increaseStep()">Next</button>
                         @endif
                         
                    
                            
                      </div>


            </div>
        </div>
        @endif

        {{-- STEP 4 --}}
        @if ($currentStep == 4)
            
    
        <div class="step-four">
            <div class="relative flex flex-col mb-10 w-80 m-auto shadow-lg sm:w-auto sm:ml-28 sm:mr-28 bg-gray-50 rounded-lg p-10">
                    <div class="mx-auto container flex justify-between">
                        <div class="text-sm sm:text-2xl text-center border-gray-300 text-green-900 font-logo-text">STEP: 4 of 4</div>
                        <div class="text-xs font-thin  py-1 sm:text-lg text-center sm:py-3 border-gray-300 text-green-900 font-logo-text">Request Details</div>
                        <div class="hidden text-center border-gray-300 text-green-900 font-logo-text">  </div>
                        <div class="hidden text-center border-gray-300 text-green-900 font-logo-text">  </div>
                    </div>
                    <hr class="border-green-600 m-4">
                <div class="m-auto flex-col sm:p-6">
                    <div class="w-full pr-4 pl-4">
                        <div class="mb-4">
                            <label for="birthday" class="font-title-text">Birthday</label>
                            <input type="date" class="font-nav-text text-md w-full py-3 px-5 mb-1
                            bg-white rounded-lg border-white shadow-lg placeholder:text-md" placeholder="Enter your birthday" wire:model="birthday">
                            <span class="text-red-600 text-sm">@error('birthday'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="terms" class="font-nav-text text-sm w-full py-3 mb-1 sm:text-lg">
                            <input type="checkbox" class="mr-2 bg-white rounded-lg border-white shadow-lg"  id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                        </label>
                        <span class="text-red-600 text-sm">@error('terms'){{ $message }}@enderror</span>
                    </div>
                </div>


                <div class="flex justify-between w-auto mx-6 sm:w-96 sm:m-auto">

                    @if($currentStep == 1)
                     <div></div>
                    @endif
          
                     @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                         <button type="button" class="px-4 text-sm font-nav-text rounded-full py-2 sm:px-8 sm:text-lg bg-yellow-700 text-white hover:bg-yellow-400" wire:click="decreaseStep()">Back</button>
                     @endif
                     
                     @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                         <button type="button" class="px-4 text-sm font-nav-text rounded-full py-2 sm:px-8  sm:text-lg  bg-green-900 text-white hover:bg-green-500" wire:click="increaseStep()">Next</button>
                     @endif
                     
                     @if ($currentStep == 4)
                          <button type="submit" class="px-4 text-sm font-nav-text rounded-full py-2 sm:px-8  sm:text-lg  bg-sky-600 text-white hover:bg-sky-400">Submit</button>
                     @endif
                         
                        
                  </div>


            </div>

            
        </div>

        @endif
    

  

        


    </form>


</div>