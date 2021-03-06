<nav x-data="{ open: false }" class="mb-10 bg-white shadow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-8 w-auto" src="/img/logos/workflow-mark-on-white.svg" alt="Jiokodeu logo">
          <img class="hidden lg:block h-8 w-auto" src="/img/logos/workflow-logo-on-white.svg" alt="Jiokodeu logo">
        </div>
        <div class="hidden sm:ml-6 sm:flex">
{{--          <a href="/pricing" class="inline-flex items-center px-1 pt-1 border-b-2 @if(request()->is('pricing')) border-indigo-500 @else border-transparent @endif text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">--}}
{{--            Pricing--}}
{{--          </a>--}}
          <a href="/compare" class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 @if(request()->is('compare')) border-indigo-500 @else border-transparent @endif text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
            Compare
          </a>
          <a href="/security" class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 @if(request()->is('security')) border-indigo-500 @else border-transparent @endif text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
            Security
          </a>
          <a href="/privacy" class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 @if(request()->is('privacy')) border-indigo-500 @else border-transparent @endif text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
            Private
          </a>
          <a href="/contact" class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 @if(request()->is('contact')) border-indigo-500 @else border-transparent @endif text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
            Contact
          </a>
        </div>
      </div>
      <div class="-mr-2 flex items-center sm:hidden">
        <!-- Mobile menu button -->
        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" aria-label="Main menu" x-bind:aria-expanded="open" aria-expanded="false">
          <!-- Icon when menu is closed. -->
          <svg x-state-on="Menu open" x-state:on="Menu open" x-state-off="Menu closed" x-state:off="Menu closed" :class="{ 'hidden': open, 'block': !open }" x-bind-class="{ 'hidden': open, 'block': !open }" class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <!-- Icon when menu is open. -->
          <svg x-state-on="Menu open" x-state:on="Menu open" x-state-off="Menu closed" x-state:off="Menu closed" :class="{ 'hidden': !open, 'block': open }" x-bind-class="{ 'hidden': !open, 'block': open }" class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
    <div class="pt-2 pb-3">
      <a href="/pricing" class="block pl-3 pr-4 py-2 border-l-4 border-indigo-500 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">Pricing</a>
      <a href="/compare" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Compare</a>
      <a href="/security" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Security</a>
      <a href="/privacy" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Privacy</a>
    </div>
  </div>
</nav>
