<div>
   <section class="mt-0">
        
      <div class="bg-white rounded-lg overflow-hidden">
         <div class="md:flex">

            <!-- left side nav -->
            <div class="md:w-3/12 md:mr-8 p-4 bg-slate-200 min-h-screen overflow-y-scroll">
               


               <div class="mb-1">
                  <h2 class="font-bold text-2xl">Exposition of Romans</h2>
               </div>

               <!-- Sections, Lesson & Topics -->
               @foreach(range(1,5) as $index)
                  <div x-data="{expanded:false}" class="pb-4 w-full">
                     <button
                        class="text-lg font-semibold text-slate-700 flex items-center" 
                        @click="expanded=!expanded">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6 mr-1">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="hover:text-blue-500">
                           Introduction
                        </div>
                           
                     </button>

                     <div 
                        style="display:none;"
                        x-show="expanded" x-collapse
                        transition.duration.500ms
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90" 
                        class="">
                        @foreach(range(1,4) as $index)
                           <div x-data="{expanded:false}" class="border-b-2 border-slate-300 pb-2">
                              <button class="w-full flex items-center justify-between py-1">
                                 <div class="flex items-center">
                                    <div class="pl-2 mr-2">
                                       <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                       </svg>
                                    </div>
                                    <div class="">
                                       {{ $loop->iteration }}. 
                                       <a class="font-semibold hover:text-blue-500">Background Studies</a>
                                    </div>
                                 </div>
                                 <div @click="expanded=!expanded">
                                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                 </div>
                              </button>

                              <div 
                                 style="display:none;"
                                 x-show="expanded" x-collapse
                                 transition.duration.500ms
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-90"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-90" 
                                 class="pl-2 text-base">
                                 @foreach(range(1,4) as $index)
                                    <div class="w-full py-1 flex items-center justify-between">
                                       <div class="w-11/12 mr-2 flex items-center">
                                          <div class="mr-2">
                                             <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                              </svg>
                                          </div>
                                          <div class="leading-4">
                                             <a 
                                                href=""
                                                class="hover:text-blue-500">
                                                   Title of the topic could be quite a bit longer
                                             </a>
                                          </div>
                                       </div>
                                       <div class="w-1/12 -mr-2">
                                          <input type="checkbox" class="rounded-md" />
                                       </div>
                                    </div>
                                 @endforeach
                              </div>
                           </div>
                        @endforeach
                     </div>
                  </div>
               @endforeach
               
            </div>
            <!-- end left side nav -->

            <!-- right side -->
            <div class="md:w-8/12 p-4">
               <div class="text-sm flex items-center justify-between">
                  <div class="bg-gray-200 px-3 py-1 rounded-xl hover:bg-blue-500 hover:text-white cursor-pointer transition duration-300">&larr; Previous Lesson</div>
                  <div class="bg-gray-200 px-3 py-1 rounded-xl hover:bg-blue-500 hover:text-white cursor-pointer transition duration-300">Next Lesson &rarr; </div>
               </div>

               <!-- lesson or topic content -->
               <div class="mt-3 w-full">

                  <!-- Image or Video -->
                  <div class="aspect-video overflow-hidden">
                     <div style="padding:56.25% 0 0 0;position:relative;">
                        <iframe 
                           src="https://player.vimeo.com/video/741924217?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" 
                           frameborder="0" 
                           allow="autoplay; fullscreen; picture-in-picture" 
                           style="position:absolute;top:0;left:0;width:100%;height:100%;" 
                           title="&quot;Hey, That's Not Right!&quot;">
                        </iframe>
                     </div>
                     <script src="https://player.vimeo.com/api/player.js"></script>
                  </div>

                  <!-- Audio and file downloads -->
                  
                  <!-- Text content -->
                  <div class="mt-3">
                     <h1 class="font-semibold text-2xl text-center">
                        The Need for the Gospel: The Gentiles (1:18-32)
                     </h1>

                     <h2 class="mt-2 font-semibold text-xl text-center">Introduction</h2>

                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>
                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>

                     <h2 class="mt-2 font-semibold text-xl text-center">Grounds for Judgment (1:18-23)</h2>

                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>
                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>
                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>
                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>

                     <h2 class="mt-2 font-semibold text-xl text-center">Specific Judgment (1:24-32)</h2>

                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>
                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>
                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>
                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>

                     <h2 class="mt-2 font-semibold text-xl text-center">Summary</h2>

                     <p class="px-3 py-2 leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt architecto laudantium esse dolores consectetur ipsam cumque ab, commodi maxime. Nam, fugiat. Voluptate iste porro illum in provident expedita laboriosam reprehenderit iure. Necessitatibus fugiat dicta dignissimos fugit, cumque odio laboriosam.
                     </p>

                     <h2 class="mt-2 font-semibold text-xl text-center">Questions</h2>

                     <p class="px-3 py-2 leading-6">
                         <ol class="list-disc list-outside pl-8">
                           <li>What does the term power mean? What does the term hope mean? What does the term faith mean? What does the term love mean? What does the term anchor mean?</li>
                           <li>What does the term "suppress" mean?</li>
                           <li>What does the term "suppress" mean?</li>
                           <li>What does the term "suppress" mean?</li>
                         </ol>
                     </p>

                     <h2 class="mt-2 font-semibold text-xl text-center">Discipleship Applications</h2>

                     <p class="px-3 py-2 leading-6">
                         <ol class="list-disc list-outside pl-8">
                           <li>What does the term power mean for everyone</li>
                           <li>What does the term "suppress" mean if you live like this?</li>
                           <li>What does the term "suppress" mean?</li>
                           <li>What does the term "suppress" mean if we agree that the Gentiles are in view here and not the Jews, per se?</li>
                         </ol>
                     </p>

                     <h2 class="mt-2 font-semibold text-xl text-center">Suggested Sermon Outline</h2>

                     <p class="px-3 py-2 leading-6">
                         <ol class="list-disc list-outside pl-8">
                           <li>What does the term power mean for everyone</li>
                           <li>What does the term "suppress" mean if you live like this?</li>
                           <li>What does the term "suppress" mean?</li>
                           <li>What does the term "suppress" mean if we agree that the Gentiles are in view here and not the Jews, per se?</li>
                         </ol>
                     </p>
                  </div>
               </div>
            </div>

         </div>
      </div>
        
   </section>
</div>
