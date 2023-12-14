<nav 
    x-data="{ open: false }" 
    class="bg-white dark:bg-gray-800 dark:border-gray-700 dark:text-slate-400 sticky top-0 z-50 shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Site logo & main mega menu -->
            <div class="flex">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-5 md:-my-px md:ms-10 md:flex md:items-center">
                   
                    <livewire:users.welcome-video />

                    <!-- Good News -->
                    <div 
                        x-data="{open:false}" @mouseover="open=true" @mouseleave="open=false"
                        class="">
                        <button class="pb-4 mt-5 flex items-center">
                            <div class="text-base font-semibold">
                                Good News
                            </div>
                            <div class="">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-3 h-3 ml-1 mt-0.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </button>
                        <div 
                            style="display:none;"
                            x-show="open"
                            x-transition.duration.500 ease-in-out
                            class="border absolute text-sm bg-white shadow-2xl rounded-b-md overflow-hidden">
                            <div class="grid grid-cols-2">
                                <div class="p-4 bg-slate-200 w-[285px]">
                                    <div class="text-base font-semibold">
                                        Good News!
                                    </div>
                                    <div class="text-slate-600">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse laudantium sit cum, sequi nisi vero expedita optio suscipit nostrum harum. Laudantium quibusdam cum consequatur. Deleniti illo laudantium repudiandae a!
                                    </div>
                                    <div class=""></div>
                                </div>

                                <!-- First column -->
                                <div class="w-[285px]">
                                    
                                    <!-- 1. Good News in Brief -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                        </svg>                                          
                                          
                                        <span class="ml-2">
                                            Good News in Brief
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 2. Encountering Jesus -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                        </svg>                                          
                                          
                                        <span class="ml-2">
                                            Encountering Jesus 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    I am the way, truth and life
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 3. Common Questions -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                        </svg>
                                          
                                          
                                        <span class="ml-2">
                                            Commonly Asked Questions 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                                    
                                    <!-- 4. True Faith -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6 text-green-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                        </svg>  
                                          
                                        <span class="ml-2">
                                            True Faith 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                                    
                                    <!-- 5. Reading Scripture Gospel -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                         
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                          </svg>
                                          
                                          
                                        <span class="ml-2">
                                            Reading Scripture Together 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                                    
                                    <!-- 6. The Pain of Life -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                          </svg>
                                          
                                          
                                        <span class="ml-2">
                                            Truth, Disappointment & Pain
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                                     
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- D3D Start -->
                    <div 
                        x-data="{open:false}" @mouseover="open=true" @mouseleave="open=false"
                        class="">
                        <button class="pb-4 mt-5 flex items-center">
                            <div class="text-base font-semibold">D<span class="text-sm">3</span>D<sup><span class="text-blue-600">Start</span></sup>
                            </div>
                            <div class="">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-3 h-3 ml-1 mt-0.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </button>
                        <div 
                            style="display:none;"
                            x-show="open"
                            x-transition.duration.500 ease-in-out
                            class="-ml-64 lg:ml-0 border absolute text-sm bg-white shadow-2xl rounded-b-md overflow-hidden">
                            <div class="grid grid-cols-3">
                                <div class="p-4 bg-slate-200 w-[250px]">
                                    <div class="text-base font-semibold">
                                        D<span class="text-sm">3</span>D<sup>Start</sup>
                                    </div>
                                    <div class="text-slate-600">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse laudantium sit cum, sequi nisi vero expedita optio suscipit nostrum harum. Laudantium quibusdam cum consequatur. Deleniti illo laudantium repudiandae a!
                                    </div>
                                    <div class=""></div>
                                </div>

                                <!-- First column -->
                                <div class="w-full">
                                    
                                    <!-- 1. Trusting Christ -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                        </svg>
                                          
                                        <span class="ml-2">
                                            Trusting Christ 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 2. The Indwelling Holy Spirit -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                          
                                        <span class="ml-2">
                                            The Indwelling Holy Spirit  
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 3. Seeking God Daily -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                          
                                        <span class="ml-2">
                                            Seeking God Daily  
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                                     
                                    
                                    <!-- 4. Scripture Memory -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                          
                                        <span class="ml-2">
                                            Scripture Memory 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                                    
                                    <!-- 5. Scripture Meditation -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                          
                                        <span class="ml-2">
                                            Scripture Meditation 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                                    
                                    <!-- 6. Scripture Application -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                          
                                        <span class="ml-2">
                                            Scripture Application 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                                     
                                </div>
                                
                                <!-- Second column -->
                                <div class="pb-4"> 
                                    
                                    <!-- 1. Worshiping God Wholeheartedly -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                        </svg>
                                          
                                        <span class="ml-2">
                                            Worshiping Our Triune God 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 2. Pray without Ceasing -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            Pray without Ceasing 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                

                                    <!-- 3. Spiritual Warfare -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                           Spiritual Warfare 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                

                                    <!-- 4. Effective Fellowship -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                           Effective Fellowship 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 5. Knowing God's Will -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            Our Witness in the World 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                

                                    <!-- 6. Knowing God's Will -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            Knowing God's Will 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- D3D Resources -->
                    <div 
                        x-data="{open:false}" @mouseover="open=true" @mouseleave="open=false"
                        class="">
                        <button class="pb-4 mt-5 flex items-center">
                            <div class="text-base font-semibold">D<span class="text-sm mb-2">3</span>D<sup><span class="text-blue-600">Resources</span></sup>
                            </div>
                            <div class="">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-3 h-3 ml-1 mt-0.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </button>
                        <div 
                            style="display:none;"
                            x-show="open"
                            x-transition.duration.500 ease-in-out
                            class="-ml-[345px] lg:ml-0 border absolute text-sm bg-white shadow-2xl rounded-b-md overflow-hidden">
                            <div class="grid grid-cols-3">

                                <!-- First Column -->
                                <div class="p-4 bg-slate-200 w-[250px]">
                                    <div class="text-base font-semibold">
                                        D<span class="text-sm">3</span>D<sup>Resources</sup>
                                    </div>
                                    <div class="text-slate-600">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse laudantium sit cum, sequi nisi vero expedita optio suscipit nostrum harum. Laudantium quibusdam cum consequatur. Deleniti illo laudantium repudiandae a!
                                    </div>
                                    <div class=""></div>
                                </div>

                                
                                <!-- Second column -->
                                <div class="pb-4"> 
                                    
                                    <!-- 1. D3D Start -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            D3D<sup>Start</sup>
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 2. D3D Advance (Training) -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            D3D<sup>Advance</sup>
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 3. D3D Flourish -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            D3D<sup>Flourish</sup>
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 4. Groups -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            D3D<sup>Groups</sup> 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 5. Courses -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            Disciplesihp Courses 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                
                                    <!-- 6. Contribute -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            Contribute
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 6. Donate -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            Donate 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    Prayer &bull; Content &bull; Programming 
                                                </p>
                                        </span>
                                    </a>
                
                                </div>


                                <!-- Second column -->
                                <div class="pb-4"> 
                                    
                                    <!-- 1. Articles -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            Articles
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 2. Podcasts -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                           Podcasts
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 3. Sermons -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                        Sermons 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 4. Testimonies -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                        Testimonies 
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 5. Illustrations -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            Illustrations
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>
                
                                    <!-- 6. FAQs -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            FAQs
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    The truth will set you free
                                                </p>
                                        </span>
                                    </a>

                                    <!-- 6. Book Review -->
                                    <a 
                                        class="bg-white hover:font-semibold hover:bg-slate-100 w-full py-2 flex items-center px-2" 
                                        href="">
                                        <svg xmlns="fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        
                                        <span class="ml-2">
                                            Reviews
                                                <span class="text-xl text-white">&rarr;</span>
                                                <p class="text-xs text-gray-500">
                                                    Books &bull; Movies &bull; Events
                                                </p>
                                        </span>
                                    </a>
                
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="hidden md:flex md:items-center md:ms-6"> 

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    @auth

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>

                    @else  

                        @if(Route::has('login'))
                            <a 
                                class="text-sm mr-2 px-3 py-1 bg-blue-400 rounded-md text-white hover:bg-blue-500" 
                                href="{{ route('login')}}">
                                Login
                            </a>
                        @endif

                        @if(Route::has('register'))
                            <a 
                                class="text-sm hover:text-blue-500" 
                                href="{{ route('register') }}">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            @auth
                <div class="flex items-center px-4">
                    <div>
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}" wire:navigate :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-responsive-nav-link>
                        @endcan

                        <!-- Team Switcher -->
                        @if (Auth::user()->allTeams()->count() > 1)
                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" component="responsive-nav-link" />
                            @endforeach
                        @endif
                    @endif
                </div>
            @else  
                @if(Route::has('login'))
                    <a 
                        class="mr-2 px-3 py-1 bg-blue-400 rounded-md text-white hover:bg-blue-500" 
                        href="{{ route('login')}}">
                        Login
                    </a>
                @endif

                @if(Route::has('register'))
                    <a 
                        class="hover:text-blue-500" 
                        href="{{ route('register') }}">
                        Register
                    </a>
                @endif

            @endauth
        </div>
    </div>
</nav>
