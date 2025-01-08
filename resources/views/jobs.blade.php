<x-layout>
    <header class="w-[90%]">
        <div class=" w-full flex items-center justify-between gap-4 m-4">
            <!-- search option -->
            <div class=" w-[30%] relative space-y-2" >
                <label for="Search" class="sr-only"> Search </label>
                <input
                    type="text"
                    id="Search"
                    placeholder="Search jobs..."
                    class="w-full rounded-md border-gray-200 py-2.5 px-5 shadow-sm sm:text-sm border"
                />
                <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                    <button type="button" class="text-gray-600 hover:text-gray-700">
                    <span class="sr-only">Search</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-4"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                        />
                    </svg>
                    </button>
                </span>
            </div>
             <!-- filter option -->
            <div class=w-[18%] space-y-2">
                <details
                    class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
                >
                    <summary
                    class="flex cursor-pointer items-center justify-between gap-2 bg-white p-2 text-gray-900 transition"
                    >
                    <span class="text-sm font-medium"> Filter Job </span>

                    <span class="transition group-open:-rotate-180">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-4"
                        >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                    </summary>

                    <div class="border-t border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                        <span class="text-sm text-gray-700"> 0 Selected </span>

                        <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                        Reset
                        </button>
                    </header>

                    <ul class="space-y-1 border-t border-gray-200 p-4">
                        <li>
                        <label for="FilterInStock" class="inline-flex items-center gap-2">
                            <input type="checkbox" id="FilterInStock" class="size-5 rounded border-gray-300" />
                            <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                        </label>
                        </li>

                        <li>
                        <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                            <input type="checkbox" id="FilterPreOrder" class="size-5 rounded border-gray-300" />

                            <span class="text-sm font-medium text-gray-700"> New  </span>
                        </label>
                        </li>

                        <li>
                        <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                            <input type="checkbox" id="FilterOutOfStock" class="size-5 rounded border-gray-300" />

                            <span class="text-sm font-medium text-gray-700"> pulper </span>
                        </label>
                        </li>
                    </ul>
                    </div>
                </details>
            </div>
        </div>            
    </header>
            <!-- header text start -->
         <!-- ====== Page Title Section Start -->
         <section class="dark:bg-dark bg-white py-[30px]">
        <div class="mx-auto px-4 sm:container">
            <div
                class="border-stroke items-center justify-between border-b md:flex"
                >
                <div class="mb-6 w-full">
                    <h2 class="text-dark mb-2 text-2xl font-semibold">
                    Your Favorite Items
                    </h2>
                    <p class="text-body-color text-sm font-medium">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                    ultrices lectus sem.
                    </p>
                </div> 
                <p>..</p>
            </div>
        </div>
        </section>
        <!-- ====== Page Title Section End -->
        <!-- header text end -->
    <main>
        <!-- card start -->
        <div class=" w-full flex  bg-white mb-8 rounded overflow-hidden">
            <div class="relative overflow-hidden lg:w-1/3">
                <a href="#">
                <div class="inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10"></div>
                    <img class="max-w-full h-auto" src="https://plus.unsplash.com/premium_photo-1661714188599-e132395b5bf8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="alt title">
                </a>
            </div>
            <div class="p-6 lg:w-2/3">
                <div class="mb-2">
                    <h3 class="text-lg lg:text-2xl leading-normal mb-4 font-semibold text-gray-800"><a href="#" class="hover:text-indigo-700">New web design layout trends in 2021</a></h3>
                    <div class="text-gray-500">
                        <svg class="bi bi-calendar me-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg><span>04 May 2020</span>
                </div>
            </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam odit possimus.</p>
            </div>
        </div>
        <!-- end card -->
        <!-- card start -->
        <div class=" w-full flex  bg-white mb-8 rounded overflow-hidden">
            <div class="relative overflow-hidden  lg:w-1/3">
                <a href="#">
                <div class="inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10"></div>
                    <img class="max-w-full h-auto" src="https://media.istockphoto.com/id/1830163120/photo/group-of-computer-programmers-talking-while-working-at-it-office.webp?s=1024x1024&w=is&k=20&c=46TtSPYzBgwbsc5XkWC6Hx5VMwaPiSR5kWLfw0_tVBQ=" alt="alt title">
                </a>
            </div>
            <div class="p-6 lg:w-2/3">
                <div class="mb-2">
                    <h3 class="text-lg lg:text-2xl leading-normal mb-4 font-semibold text-gray-800"><a href="#" class="hover:text-indigo-700">New web design layout trends in 2021</a></h3>
                    <div class="text-gray-500">
                        <svg class="bi bi-calendar me-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg><span>04 May 2020</span>
                </div>
            </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam odit possimus.</p>
            </div>
        </div>
        <!-- end card -->
        <!-- card start -->
        <div class=" w-full flex  bg-white mb-8 rounded overflow-hidden">
            <div class="relative overflow-hidden  lg:w-1/3">
                <a href="#">
                <div class="inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10"></div>
                    <img class="max-w-full h-auto" src="https://plus.unsplash.com/premium_photo-1661378625549-2e0971811d09?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="alt title">
                </a>
            </div>
            <div class="p-6 lg:w-2/3">
                <div class="mb-2">
                    <h3 class="text-lg lg:text-2xl leading-normal mb-4 font-semibold text-gray-800"><a href="#" class="hover:text-indigo-700">New web design layout trends in 2021</a></h3>
                    <div class="text-gray-500">
                        <svg class="bi bi-calendar me-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg><span>04 May 2020</span>
                </div>
            </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam odit possimus.</p>
            </div>
        </div>
        <!-- end card -->
        @foreach ($jobs as $job )
            <div class=" w-full flex  bg-white mb-8 rounded overflow-hidden">
                <div class="relative overflow-hidden  lg:w-1/3">
                    <a href="#">
                        <div class="inset-0 hover:bg-white opacity-0 transition duration-700 hover:opacity-10"></div>
                        @if($job->image)
                            <img src="{{ asset('storage/' . $job->image) }}" alt="{{ $job->title }}">
                        @else
                            <img class="max-w-full h-auto" src="https://plus.unsplash.com/premium_photo-1661378625549-2e0971811d09?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="alt title">
                        @endif
                    </a>
                </div>
                <div class="p-6 lg:w-2/3">
                    <div class="mb-2 pr-8">
                        <h3 class="text-lg lg:text-2xl leading-normal mb-4 font-semibold text-gray-800"><a href="#" class="hover:text-indigo-700">{{ $job->title }}</a></h3>
                        <div class="text-gray-500">
                            <svg class="bi bi-calendar me-2 inline-block" width=".8rem" height=".8rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                        </svg><span>{{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</span>
                    </div>
                </div>
                    <p>{{$job->short_description}}</p>
                </div>
            </div>
        @endforeach
    </main>
    
</x-layout>