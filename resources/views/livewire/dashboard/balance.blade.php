<div class="max-w-none mx-auto">
  <div class="px-2 py-2 sm:px-6 overflow-hidden">
    <div class="mb-4 flex items-center justify-between flex-wrap sm:flex-no-wrap">
      <div class="ml-4 mt-2">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          Balance
        </h3>
        <p class="mt-1 text-sm leading-5 text-gray-500">
          You will only be charged for lookups beyond the daily free tier of 2 500.
        </p>
      </div>
      <div class="ml-auto mt-2 flex-shrink-0">
        <span class="inline-flex rounded-md shadow-sm">
          <button wire:click="generateToken" type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
            Add a payment method
          </button>
        </span>
      </div>
    </div>
    <div>
      <div class="mt-4 bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6 flex flex-row">
          <div class="flex-grow">
            <p class="text-gray-400">
              Next charge will be the <span class="font-bold text-purple-500">{{ \Carbon\Carbon::today()->firstOfMonth()->addMonthNoOverflow()->format('j M') }}</span>
            </p>
            <span class="text-purple-500 font-semibold text-4xl">{{ $lastCharge }}</span>
          </div>
          <div class="flex-grow">
            <p class="text-gray-400">
              Last charge
            </p>
            <span class="text-purple-500 font-semibold text-4xl">{{ $nextCharge }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
