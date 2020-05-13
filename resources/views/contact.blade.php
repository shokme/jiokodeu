@extends('layouts.base')
@section('content')
  @include('layouts.navbar')
  <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto">
      <h2 class="font-semibold text-xl text-gray-900 text-center">Contact Jiokodeu via live chat, email or Twitter</h2>
      <div class="mt-6 bg-white overflow-hidden shadow rounded-lg">
        <div class="flex justify-center px-4 py-5 sm:p-6">
          <div>
            <svg class="inline h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
              <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span class="inline">contact@jiokod.eu</span>
          </div>
          <div class="ml-4">
            <svg class="inline h6 w-6" viewBox="0 0 512 512" fill="currentColor">
              <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z"/>
            </svg>
            <span class="inline">@jiokodeu</span>
          </div>
        </div>
      </div>
      <div class="mt-8 bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6 leading-relaxed">
          <h2 class="text-center font-semibold text-4xl text-gray-500">A geocoder you can rely on</h2>
          <p class="mt-6">Our goal is to make it easier for you to work with location data, without any unnecessary hassles. That's why we have a permissive terms of use, take customer suggestions
            seriously, and treat our customers how we'd want to be treated ourselves.</p>

          <p class="mt-6">Jiokodeu is based in Bruxelles, Belgium and launched in 2020. We're a company that has been funded by our customers from day one, and without our customers, we wouldn't have
            a company.</p>

          <p class="mt-6">We started Jiokodeu in 2020 because it was a product we needed ourselves for our own work. The pricing and terms of existing geocoding services meant we couldn't use them.
            That customer-first perspective is what drives us as a company.</p>

          <div class="mt-6">
            <li class="list-disc font-bold text-gray-500">You deserve to be heard, helped, and treated honestly.</li>
            <p class="text-justify">
              <span class="ml-6">We</span> treat our customers how we'd want to be treated. That's why you'll get emails from us directly, asking about your
              experience. It's also why you'll get one of the founders when you reach out for support. We actively want to hear your ideas for what we can improve.
            </p>

            <li class="mt-4 list-disc font-bold text-gray-500">You should be able to get the data you need, and then get on with your work.</li>
            <p class="text-justify">
              <span class="ml-6">We</span> work to make our software as easy to use as possible, whether you're a developer and want a nice and simple
              API. We think you should be able to get the data you need all in one place -- in one format, with one set of terms, with one price. And after you get the data, we
              don't impose any restrictions on how you use it. Unlike most services, we're not going to stand over your shoulder and put a bunch of restrictions on how you use it: whether that's
              limiting which maps you use it with or whether you can store it. That's a pain. We are here to make things easier for you.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')
@endsection