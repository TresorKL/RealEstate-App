<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyProperty-Welcome</title>
    @vite('resources/css/app.css')
</head>


<body>

    <!--
 This example requires some changes to your config:

 ```
 // tailwind.config.js
 module.exports = {
   // ...
   plugins: [
     // ...
     require('@tailwindcss/forms'),
     require('@tailwindcss/aspect-ratio'),
   ],
 }
 ```
-->
    <div class="bg-white">
        <!--
      Mobile menu

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->


        <!-- Hero section -->
        <div class="relative h-1/2 bg-gray-900">
            <!-- Decorative image and overlay -->
            <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
                <img src="https://assets-global.website-files.com/620ec747459e13c7cf12a39e/625b10a58137b364b18df2ea_iStock-94179607.jpg"
                    alt="" class="h-full w-full object-cover object-center">
            </div>
            <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-30"></div>

            <!-- Navigation -->

            <div class="relative mx-auto flex max-w-3xl flex-col items-center px-6 py-32 text-center sm:py-64 lg:px-0">
                <h1 class="text-4xl font-bold tracking-tight text-white lg:text-6xl">New arrivals are here</h1>
                <p class="mt-4 text-xl text-white">Explore some of our favourites and find your perfect space</p>

            </div>

        </div>



        <main>
            <!--
          This example requires some changes to your config:

          ```
          // tailwind.config.js
          module.exports = {
            // ...
            plugins: [
              // ...
              require('@tailwindcss/aspect-ratio'),
            ],
          }
          ```
        -->

            <div class="flex justify-center items-center">
                <div class="w-full max-w-3xl px-8 py-12 bg-white rounded-lg shadow-md">
                    <h2 class="text-3xl font-bold mb-4 text-center">Find Your Dream Property</h2>

                    <form class="pt-10" action="/filter-properties" method="POST">
                        @csrf
                        <div class="relative flex items-center">
                            <select id="search-category" name="category"
                                class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-blue-500 focus:ring-1">
                                <option value="">All Categories</option>
                                <option value="area">Area</option>
                                <option value="washrooms">Washrooms</option>
                                <option value="bedrooms">Bedrooms</option>
                                <option value="halls">Halls</option>
                                <option value="kitchens">Kitchens</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6a1 1 0 0 0-1.414-1.414L15 10.59V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v8.59L5.586 14.586a1 1 0 0 0-1.414 1.414z" />
                                </svg>
                            </div>
                        </div>
                        <input type="text" id="search-query" name="value"
                            class="w-full mt-4 px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-blue-500 focus:ring-1"
                            placeholder="Enter Area,number of Washrooms, Bedrooms or Kitchens">
                        <div class="flex justify-between mt-4">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Search
                                Now</button>
                            <form action="/" method="GET">
                                <button type="submit"
                                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">Clear
                                    Filter</button>
                            </form>
                        </div>
                    </form>

                </div>
            </div>



            <div class="bg-white ">

                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <h2 class="sr-only">Products</h2>

                    <div
                        class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">

                        @foreach (Session::get('properties') as $property)
                            {{-- <a href="/property/{{ $property->id }}"> --}}

                            <div
                                class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">


                                <div
                                    class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                                    <img src=" {{ asset('storage/images/' . $property->media[0]->media_url) }}"
                                        alt="{{ asset('storage/images/' . $property->media[0]->media_url) }}"
                                        class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                                </div>
                                <div class="flex flex-1 flex-col space-y-2 p-4">
                                    <h3 class="text-sm font-medium text-gray-900">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Area : {{ $property->area }}
                                        </a>
                                    </h3>
                                    <p class="text-sm text-gray-500">Bed rooms: {{ $property->bedrooms }}</p>
                                    <div class="flex flex-1 flex-col justify-end">
                                        {{--                                <p class="text-sm italic text-gray-500">8 colors</p> --}}
                                        <p class="text-base font-medium text-gray-900">R{{ $property->price }}
                                        </p>
                                    </div>
                                    <div class="mt-6">
                                        <a href="/property/{{ $property->id }}"
                                            class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">More
                                            Details<span class="sr-only">, Zip Tote Basket</span></a>
                                    </div>
                                </div>


                                {{-- </a> --}}
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </main>

        <footer aria-labelledby="footer-heading" class="bg-gray-900">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                        <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                            <div>
                                <h3 class="text-sm font-medium text-white">Shop</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Bags</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Tees</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Objects</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Home Goods</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Accessories</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">Company</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Who we are</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Sustainability</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Press</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Careers</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Terms &amp;
                                            Conditions</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Privacy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                            <div>
                                <h3 class="text-sm font-medium text-white">Account</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Manage Account</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Returns &amp;
                                            Exchanges</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Redeem a Gift
                                            Card</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">Connect</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Contact Us</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Facebook</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Instagram</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white">Pinterest</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 md:mt-16 xl:mt-0">
                        <h3 class="text-sm font-medium text-white">Sign up for our newsletter</h3>
                        <p class="mt-6 text-sm text-gray-300">The latest deals and savings, sent to your inbox weekly.
                        </p>
                        <form class="mt-2 flex sm:max-w-md">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" type="text" autocomplete="email" required
                                class="w-full min-w-0 appearance-none rounded-md border border-white bg-white px-4 py-2 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900">
                            <div class="ml-4 flex-shrink-0">
                                <button type="submit"
                                    class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">Sign
                                    up</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="border-t border-gray-800 py-10">
                    <p class="text-sm text-gray-400">Copyright &copy; 2021 Your Company, Inc.</p>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
