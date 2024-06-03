<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>

<body>

    <body>


        <div class="bg-white">
            <nav aria-label="Breadcrumb">
                <ol role="list"
                    class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="/admin" class="mr-2 text-sm font-medium text-gray-900">Home</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>


                    <li class="text-sm">
                        <a href="/logout" aria-current="page"
                            class="font-medium text-gray-500 hover:text-gray-600">Logout</a>
                    </li>
                </ol>
            </nav>

            <div class="relative h-1/2 bg-gray-900">
                <!-- Decorative image and overlay -->
                <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
                    <img src="https://assets-global.website-files.com/620ec747459e13c7cf12a39e/625b10a58137b364b18df2ea_iStock-94179607.jpg"
                        alt="" class="h-full w-full object-cover object-center">
                </div>
                <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-30"></div>

                <!-- Navigation -->

                <div
                    class="relative mx-auto flex max-w-3xl flex-col items-center px-6 py-32 text-center sm:py-64 lg:px-0">
                    <h1 class="text-4xl font-bold tracking-tight text-white lg:text-6xl">Admin Page</h1>
                    <p class="mt-4 text-xl text-white">Explore some of our favourites and find your perfect space</p>
                    <br> <br>
                    <form action="/property-form" method="GET">
                        <button type="submit"
                            class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <svg class="-ml-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            ADD NEW PROPERTY
                        </button>
                    </form>
                </div>

            </div>



            <main>


                <div class="bg-white ">

                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                        <h2 class="sr-only">Properties</h2>

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
                                            <a href="#" class="text-gray-300 hover:text-white">Manage
                                                Account</a>
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
                            <p class="mt-6 text-sm text-gray-300">The latest deals and savings, sent to your inbox
                                weekly.</p>
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

</body>

</html>
