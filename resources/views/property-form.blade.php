<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Property</title>
    @vite('resources/css/app.css')
</head>
<body>

<main class="flex justify-center items-center min-h-screen">
    <form class="w-1/2" action="/add-property" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-12 pt-10 sm:space-y-16">

            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Property</h2>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Area</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="area" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Address</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="address" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Bedrooms</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input id="number" name="bedrooms" type="number" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-md sm:text-sm sm:leading-6">
                        </div>
                    </div>



                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Halls</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="number" name="halls" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xl sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Kitchens</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="number" name="kitchens" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Washrooms</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="number" name="washrooms" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Net Area</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="number" name="net_area" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Floor</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="number" name="floor" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Price</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="number" name="price" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <label for="image-upload" class="mb-2 text-sm font-medium text-gray-700">Upload Image 1</label>
                        <div class="relative rounded-md border border-gray-300 p-4">
                            <input id="image-upload" type="file"  name="image-1" accept="image/*" class="w-full rounded-md border-0 py-2 pl-8 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                 <path fill-rule="evenodd" d="M4 3a3 3 0 00-3 3v10a3 3 0 003 3h12a3 3 0 003-3V6a3 3 0 00-3-3H4zm6 13v2h4v-2H10zM3 8v8h16V8z" clip-rule="evenodd" />
                                </svg>
                           </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <label for="image-upload" class="mb-2 text-sm font-medium text-gray-700">Upload Image 2</label>
                        <div class="relative rounded-md border border-gray-300 p-4">
                            <input id="image-upload" type="file" name="image-2"  accept="image/*" class="w-full rounded-md border-0 py-2 pl-8 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                 <path fill-rule="evenodd" d="M4 3a3 3 0 00-3 3v10a3 3 0 003 3h12a3 3 0 003-3V6a3 3 0 00-3-3H4zm6 13v2h4v-2H10zM3 8v8h16V8z" clip-rule="evenodd" />
                                </svg>
                           </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <label for="image-upload" class="mb-2 text-sm font-medium text-gray-700">Upload Image 3</label>
                        <div class="relative rounded-md border border-gray-300 p-4">
                            <input id="image-upload" name="image-3"  type="file" accept="image/*" class="w-full rounded-md border-0 py-2 pl-8 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                 <path fill-rule="evenodd" d="M4 3a3 3 0 00-3 3v10a3 3 0 003 3h12a3 3 0 003-3V6a3 3 0 00-3-3H4zm6 13v2h4v-2H10zM3 8v8h16V8z" clip-rule="evenodd" />
                                </svg>
                           </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <label for="image-upload" class="mb-2 text-sm font-medium text-gray-700">Upload Image 4</label>
                        <div class="relative rounded-md border border-gray-300 p-4">
                            <input id="image-upload" name="image-4" type="file" accept="image/*" class="w-full rounded-md border-0 py-2 pl-8 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                 <path fill-rule="evenodd" d="M4 3a3 3 0 00-3 3v10a3 3 0 003 3h12a3 3 0 003-3V6a3 3 0 00-3-3H4zm6 13v2h4v-2H10zM3 8v8h16V8z" clip-rule="evenodd" />
                                </svg>
                           </span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Seller Information</h2>

                <div class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Full name</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="full_name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Phone number</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="phone_number" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Email address</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-md sm:text-sm sm:leading-6">
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</main>
</body>
</html>
