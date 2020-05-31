<div class="max-w-none mx-auto">
  <div class="px-2 py-2 sm:px-6 overflow-hidden">
    <div class="mb-4 flex items-center justify-between flex-wrap sm:flex-no-wrap">
      <div class="ml-4 mt-2">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          API Keys
        </h3>
        <p class="mt-1 text-sm leading-5 text-gray-500">
          A list of your api keys
        </p>
      </div>
      <div class="ml-auto ml-4 mt-2 flex-shrink-0">
        <span class="inline-flex rounded-md shadow-sm">
          <button wire:click="generateToken" type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
            Create new key
          </button>
        </span>
      </div>
    </div>
    <div>
      @if(count($tokens) === 0)
        <div class="mt-4 bg-white overflow-hidden shadow rounded-lg">
          <div class="px-4 py-5 sm:p-6 flex justify-center">
            <p class="text-gray-400 text-center">No key, <span wire:click.prevent="generateToken" class="cursor-pointer text-purple-500">make a new key</span>.</p>
          </div>
        </div>
      @else
        <x-api-token :type="'owned'" :tokens="$tokens"/>
        @if($this->user->currentTeam)
          @cannot('team-owner')
            <x-api-token :type="'members'" :tokens="$ownerTokens"/>
          @endcannot
          @can('team-owner')
            <x-api-token :type="'owner'" :tokens="$membersTokens"/>
          @endcannot
        @endif
      @endif
    </div>
  </div>
</div>
