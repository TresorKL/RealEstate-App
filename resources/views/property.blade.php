<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Property</title>
    @vite('resources/css/app.css')
</head>

<body>

    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list"
                    class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="/" class="mr-2 text-sm font-medium text-gray-900">Home</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>


                    <li class="text-sm">
                        <a href="#" aria-current="page"
                            class="font-medium text-gray-500 hover:text-gray-600">Property</a>
                    </li>
                </ol>
            </nav>
            @php
                $property = Session::get('property');
                $twelve_months = Session::get('twelve_moths');
                $twenty_four_months = Session::get('twenty_four_moths');
            @endphp
            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                    <img src="{{ asset('storage/images/' . $property->media[0]->media_url) }}"
                        alt="Two each of gray, white, and black shirts laying flat."
                        class="h-full w-full object-cover object-center">
                </div>
                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('storage/images/' . $property->media[1]->media_url) }}"
                            alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
                    </div>
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('storage/images/' . $property->media[2]->media_url) }}"
                            alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                    </div>
                </div>
                <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                    <img src="{{ asset('storage/images/' . $property->media[3]->media_url) }}"
                        alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                </div>
            </div>

            <!-- Product info -->
            <div
                class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $property->area }}</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl tracking-tight text-gray-900">R {{ $property->price }}</p>

                    <!-- Reviews -->
                    <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117
                                reviews</a>
                        </div>
                    </div>


                    <!-- Colors -->
                    <div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden mt-5">
                            <div class="px-4 py-5 sm:p-6">
                                <h5 class="text-xl font-medium text-gray-900">12 Months Loan</h5>

                                <ul class="mt-3 list-none space-y-2">
                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-amber-500" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                                            <polyline points="17 6 23 6 23 12" />
                                        </svg>

                                        <span class="text-sm text-gray-500 ml-5">Interrest:
                                            20%</span>
                                    </li>

                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                                        </svg>



                                        <span class="text-sm ml-5">
                                            <span class="text-gray-500">Monthly Payment : </span>
                                            <span class="text-blue-500 font-bold">R {{ $twelve_months }}</span>
                                        </span>


                                    </li>



                                </ul>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden mt-5">
                            <div class="px-4 py-5 sm:p-6">
                                <h5 class="text-xl font-medium text-gray-900">24 Months Loan</h5>

                                <ul class="mt-3 list-none space-y-2">
                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-amber-500" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                                            <polyline points="17 6 23 6 23 12" />
                                        </svg>

                                        <span class="text-sm text-gray-500 ml-5">Interrest:
                                            30%</span>
                                    </li>

                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                                        </svg>



                                        <span class="text-sm ml-5">
                                            <span class="text-gray-500">Monthly Payment : </span>
                                            <span class="text-blue-500 font-bold">R
                                                {{ $twenty_four_months }}</span>
                                        </span>


                                    </li>



                                </ul>
                            </div>

                        </div>

                    </div>

                    <!-- Sizes -->
                    <div class="mt-10">



                    </div>

                    @if (Session::get('admin'))
                        <form action="/delete/{{ $property->id }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Delete Property</button>
                        </form>
                    @endif


                </div>

                <div
                    class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Description</h3>

                        {{-- <div class="space-y-6">
                            <p class="text-base text-gray-900">{{ $property }}</p>
                        </div> --}}
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="px-4 py-5 sm:p-6">
                                <h5 class="text-xl font-medium text-gray-900">Property Details</h5>

                                <ul class="mt-3 list-none space-y-2">
                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-sky-500" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                        <span class="text-sm text-gray-500 ml-5">Location:
                                            {{ $property->address }}</span>
                                    </li>

                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-sky-500" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M3 7v11m0 -4h18m0 4v-8a2 2 0 0 0 -2 -2h-8v6" />
                                            <circle cx="7" cy="10" r="1" />
                                        </svg>
                                        <span class="text-sm text-gray-500 ml-5">Bedrooms:
                                            {{ $property->bedrooms }}</span>
                                    </li>

                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-sky-500" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="M10 16.5l2 -3l2 3m-2 -3v-2l3 -1m-6 0l3 1" />
                                            <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                                        </svg>
                                        <span class="text-sm text-gray-500 ml-5">Washrooms:
                                            {{ $property->washrooms }}</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-sky-500" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <line x1="4" y1="4" x2="4" y2="20" />
                                            <line x1="20" y1="4" x2="20" y2="20" />
                                            <rect x="9" y="6" width="6" height="12" rx="2" />
                                        </svg>
                                        <span class="text-sm text-gray-500 ml-5"> Halls: {{ $property->halls }}</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-sky-500" <svg viewBox="0 0 24 24" width="24"
                                            height="24" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M18 8h1a4 4 0 0 1 0 8h-1" />
                                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />
                                            <line x1="6" y1="1" x2="6" y2="4" />
                                            <line x1="10" y1="1" x2="10" y2="4" />
                                            <line x1="14" y1="1" x2="14" y2="4" />
                                        </svg>
                                        <span class="text-sm text-gray-500 ml-5">Kitchens:
                                            {{ $property->kitchens }}</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-sky-500" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polygon
                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" />
                                        </svg>
                                        <span class="text-sm text-gray-500 ml-5">Net Area:
                                            {{ $property->net_area }}</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-sky-500" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M3 21v-13l9-4l9 4v13" />
                                            <path d="M13 13h4v8h-10v-6h6" />
                                            <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" />
                                        </svg>
                                        <span class="text-sm text-gray-500 ml-5">Floor: {{ $property->floor }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden mt-5">
                            <div class="px-4 py-5 sm:p-6">
                                <h5 class="text-xl font-medium text-gray-900">Seller Details</h5>

                                <ul class="mt-3 list-none space-y-2">
                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                            <circle cx="12" cy="7" r="4" />
                                        </svg>

                                        <span class="text-sm text-gray-500 ml-5">Full Name:
                                            {{ $property->seller->full_name }}</span>
                                    </li>

                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>

                                        <span class="text-sm text-gray-500 ml-5">Phone number:
                                            {{ $property->seller->phone_number }}</span>
                                    </li>

                                    <li class="flex items-center">
                                        <svg class="h-6 w-6 text-red-500" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="3 9 12 15 21 9 12 3 3 9" />
                                            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                            <line x1="3" y1="19" x2="9" y2="13" />
                                            <line x1="15" y1="13" x2="21" y2="19" />
                                        </svg>
                                        <span class="text-sm text-gray-500 ml-5">Email Address:
                                            {{ $property->seller->email }}</span>
                                    </li>

                                </ul>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>


</body>

</html>
