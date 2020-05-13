@extends('layouts.base')

@section('content')
  {{-- HERO --}}
  <div class="relative bg-gray-50 overflow-hidden">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
      <div class="relative h-full max-w-screen-xl mx-auto">
        <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 790">
          <defs>
            <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
            </pattern>
          </defs>
          <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"></rect>
        </svg>
        <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
          <defs>
            <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
            </pattern>
          </defs>
          <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)"></rect>
        </svg>
      </div>
    </div>

    <div x-data="{ open: false }" class="relative pt-6 pb-12 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
      <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
          <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
            <div class="flex items-center justify-between w-full md:w-auto">
              <a href="/">
                <img class="h-8 w-auto sm:h-10" src="{{ asset('/img/logos/workflow-mark-on-white.svg') }}" alt="Jiokodeu Logo">
              </a>
              <div class="-mr-2 flex items-center md:hidden">
                <button @click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <a href="#" class="font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Pricing</a>
            <a href="#" class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Compare</a>
            <a href="#" class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Security</a>
            <a href="#" class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Privacy</a>
            <a href="#" class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Contact</a>
          </div>
          <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
            <span class="inline-flex rounded-md shadow">
              <a href="/login" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-gray-50 active:text-indigo-700 transition duration-150 ease-in-out">
                Log in
              </a>
            </span>
          </div>
        </nav>
      </div>

      <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-show="open" x-description="Mobile menu, show/hide based on menu open state." x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" style="display: none;">
        <div class="rounded-lg shadow-md">
          <div class="rounded-lg bg-white shadow-xs overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
              <div>
                <img class="h-8 w-auto" src="{{ asset('/img/logos/workflow-mark-on-white.svg') }}" alt="Jiokodeu Logo">
              </div>
              <div class="-mr-2">
                <button @click="open = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div class="px-2 pt-2 pb-3">
              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Pricing</a>
              <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Compare</a>
              <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Security</a>
              <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Privacy</a>
              <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Contact</a>
            </div>
            <div>
              <a href="/login" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out">
                Log in
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
        <div class="text-center">
          <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            Hassle-free
            <br class="xl:hidden">
            <span class="text-indigo-600">geocoding</span>
          </h2>
          <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
            Straightforward and easy-to-use geocoding, reverse geocoding, and data matching for <span class="text-indigo-600">Europe</span> addresses.
          </p>
          <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent uppercase text-base tracking-tighter leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                Get an api key
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-indigo-800">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
          <img class="h-12" src="/img/logos/tuple-logo.svg" alt="Tuple"/>
        </div>
        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
          <img class="h-12" src="/img/logos/mirage-logo.svg" alt="Mirage"/>
        </div>
        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
          <img class="h-12" src="/img/logos/statickit-logo.svg" alt="StaticKit"/>
        </div>
        <div class="col-span-1 flex justify-center md:col-span-3 lg:col-span-1">
          <img class="h-12" src="/img/logos/transistor-logo.svg" alt="Transistor"/>
        </div>
        <div class="col-span-2 flex justify-center md:col-span-3 lg:col-span-1">
          <img class="h-12" src="/img/logos/workcation-logo.svg" alt="Workcation"/>
        </div>
      </div>
    </div>
  </div>

  {{--  FEATURES --}}
  <div class="bg-gray-50 overflow-hidden">
    <div class="relative max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
      <svg class="absolute top-0 left-full transform -translate-x-1/2 -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4" width="404" height="784" fill="none" viewBox="0 0 404 784">
        <defs>
          <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
          </pattern>
        </defs>
        <rect width="404" height="784" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)"/>
      </svg>

      <div class="relative lg:grid lg:grid-cols-4 lg:col-gap-8">
        <div class="lg:col-span-1">
          <h3 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
            Features
          </h3>
        </div>
        <div class="mt-10 ml-6 md:col-gap-10 sm:grid sm:grid-cols-3 sm:col-gap-4 sm:row-gap-10 lg:col-span-2 lg:mt-0">
          <div>
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
              </svg>
            </div>
            <div class="mt-5">
              <h5 class="text-lg leading-6 font-medium text-gray-900">Batch geocoding (soon)</h5>
              <p class="mt-2 text-base leading-6 text-gray-500">
                Whether you have 100 or 100,000,000 addresses, we can help you.
              </p>
            </div>
          </div>
          <div class="mt-10 sm:mt-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
              </svg>
            </div>
            <div class="mt-5">
              <h5 class="text-lg leading-6 font-medium text-gray-900">Flexible Terms of Use</h5>
              <p class="mt-2 text-base leading-6 text-gray-500">
                Use the data however you want with no restrictions.
              </p>
            </div>
          </div>
          <div class="mt-10 sm:mt-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <div class="mt-5">
              <h5 class="text-lg leading-6 font-medium text-gray-900">Partial address parsing</h5>
              <p class="mt-2 text-base leading-6 text-gray-500">
                Jiokodeu will automatically add missing components to an address and can parse complex addresses such as intersections.
              </p>
            </div>
          </div>
          <div class="mt-10 sm:mt-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 20 20">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
              </svg>
            </div>
            <div class="mt-5">
              <h5 class="text-lg leading-6 font-medium text-gray-900">Spelling correction</h5>
              <p class="mt-2 text-base leading-6 text-gray-500">
                Jiokodeu will automatically correct minor typos and inconsistencies.
              </p>
            </div>
          </div>
          <div class="mt-10 sm:mt-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <div class="mt-5">
              <h5 class="text-lg leading-6 font-medium text-gray-900">Get more data</h5>
              <p class="mt-2 text-base leading-6 text-gray-500">
                Append Congressional districts, state legislative districts, Census blocks, timezones and more to any address.
              </p>
            </div>
          </div>
          <div class="mt-10 sm:mt-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 20 20">
                <path d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd" fill-rule="evenodd"></path>
              </svg>
            </div>
            <div class="mt-5">
              <h5 class="text-lg leading-6 font-medium text-gray-900">Address normalization</h5>
              <p class="mt-2 text-base leading-6 text-gray-500">
                Jiokodeu breaks addresses into standardized, individual components in a consistent format.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- TESTIMONIAL --}}
  <section class="bg-indigo-800">
    <div class="max-w-screen-xl mx-auto">
      <div class="py-8 px-4 sm:px-6 md:flex md:flex-col md:py-16 md:pl-0 md:pr-10 lg:pr-16">
        <blockquote class="mt-4 md:flex-grow md:flex md:flex-col">
          <div class="text-lg leading-7 font-medium text-white font-bold text-2xl text-center md:flex-grow">
            9 out of 10 customers would recommend Jiokodeu to a friend
          </div>
        </blockquote>
        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
          <div class="sm:inline mt-3 rounded-md sm:ml-3">
            <a href="/documentation" class="inline-flex items-center px-6 py-3 border border-gray-300 text-base text-white uppercase tracking-tight leading-6 font-medium rounded-md bg-indigo-800 hover:text-indigo-300 hover:border-indigo-300 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150">
              API Documentation
            </a>
          </div>
          <div class="sm:inline mt-3 rounded-md sm:ml-3">
            <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent uppercase text-base tracking-tight leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out md:px-10">
              Get an api key
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{--  PRICING --}}
  <div class="bg-gray-900">
    <div class="pt-12 sm:pt-16 lg:pt-24">
      <div class="max-w-screen-xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto lg:max-w-none">
          <h2 class="mt-2 text-3xl leading-6 font-semibold text-gray-300 tracking-wider sm:text-4xl sm:leading-10 lg:text-5xl lg:leading-none">
            Straightforward, affordable pricing
          </h2>
        </div>
      </div>
    </div>
    <div class="mt-8 pb-12 bg-gray-50 sm:mt-12 sm:pb-16 lg:mt-16 lg:pb-24">
      <div class="relative">
        <div class="absolute inset-0 h-3/4 bg-gray-900"></div>
        <div class="relative z-10 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-md mx-auto lg:max-w-5xl lg:grid lg:grid-cols-2 lg:gap-5">
            <div class="rounded-lg shadow-lg overflow-hidden">
              <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                <p class="text-2xl leading-7 font-bold uppercase text-gray-400">
                  Pay as you go
                </p>
                <p class="mt-5 text-lg text-justify leading-7 text-gray-500">
                  Geocode as much or as little as you need with no subscription fees and no minimum or maximum order sizes. No credit card required to sign up. Free tier overage is billed on the 1st
                  of the following month.
                </p>
              </div>
              <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                <ul>
                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <p class="ml-3 text-base leading-6 text-gray-700">
                      2 500 free lookups every day
                    </p>
                  </li>
                  <li class="mt-4 flex items-start">
                    <div class="flex-shrink-0">
                      <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <p class="ml-3 text-base leading-6 text-gray-700">
                      $0.50 per 1 000 after that
                    </p>
                  </li>
                  <li class="mt-4 flex items-start">
                    <div class="flex-shrink-0">
                      <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <p class="ml-3 text-base leading-6 text-gray-700">
                      Automatic volume discounts
                    </p>
                  </li>
                  <li class="mt-4 flex items-start">
                    <div class="flex-shrink-0">
                      <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <p class="ml-3 text-base leading-6 text-gray-700">
                      Up to 1,000 API calls allowed per minute
                    </p>
                  </li>
                  <span class="block mb-16"></span>
                </ul>
                <div class="mt-6 rounded-md shadow">
                  <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                    Get started for free
                  </a>
                </div>
              </div>
            </div>
            <div class="mt-4 rounded-lg shadow-lg overflow-hidden lg:mt-0">
              <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                <p class="text-2xl leading-7 font-bold uppercase text-indigo-400">
                  Unlimited Geocoding
                </p>
                <p class="mt-5 text-lg text-justify leading-7 text-gray-500">
                  Dedicated geocoding instance. Includes geocoding, reverse geocoding, and all data appends. Flat rate with no per-seat cost — add as many team members as you want. Throughput of at
                  least 200,000 per hour per instance.
                </p>
              </div>
              <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                <ul>
                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <p class="ml-3 text-base leading-6 text-gray-700">
                      $1,000 per month
                    </p>
                  </li>
                  <li class="mt-4 flex items-start">
                    <div class="flex-shrink-0">
                      <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <p class="ml-3 text-base leading-6 text-gray-700">
                      Priority Support
                    </p>
                  </li>
                  <li class="mt-4 flex items-start">
                    <div class="flex-shrink-0">
                      <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <p class="ml-3 text-base leading-6 text-gray-700">
                      5% annual billing discount
                    </p>
                  </li>
                  <li class="mt-4 flex items-start">
                    <div class="flex-shrink-0">
                      <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <p class="ml-3 text-base leading-6 text-gray-700">
                      Add additional instances for $700/month
                    </p>
                  </li>
                  <li class="mt-4 flex items-start">
                    <div class="flex-shrink-0">
                      <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <p class="ml-3 text-base leading-6 text-gray-700">
                      No throttling or rate limits
                    </p>
                  </li>
                </ul>
                <div class="mt-6 rounded-md shadow">
                  <a href="/register" class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                    Sign up
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')
@endsection