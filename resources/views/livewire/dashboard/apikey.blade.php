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
      @endif
      <ul>
        @cannot('team-owner')
          Tokens shared between all team
          @foreach($ownerTokens as $ownerToken)
            <li class="mt-2 bg-white shadow overflow-hidden sm:rounded-md">
              <div class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50">
                <div class="px-4 py-4 sm:px-6">
                  <div class="flex items-center justify-between">
                    <div class="text-sm leading-5 font-medium text-indigo-600">
                      {{ $ownerToken['hash'] }}
                    </div>
                  </div>
                </div>
              </div>
            </li>
          @endforeach
        @endcannot
        Your tokens
        @foreach($tokens as $token)
          <li class="mt-2 bg-white shadow overflow-hidden sm:rounded-md">
            <div class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50">
              <div class="px-4 py-4 sm:px-6">
                <div class="flex items-center justify-between">
                  <div class="text-sm leading-5 font-medium text-indigo-600">
                    {{ $token['hash'] }}
                  </div>
                  <div class="ml-2 flex-shrink-0 flex">
                    <button wire:click="removeToken({{$token['id']}})" class="px-2 inline-flex">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
        @endforeach
        Members token
        @foreach($membersTokens as $memberToken)
          <li class="mt-2 bg-white shadow overflow-hidden sm:rounded-md">
            <div class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50">
              <div class="px-4 py-4 sm:px-6">
                <div class="flex items-center justify-between">
                  <div class="text-sm leading-5 font-medium text-indigo-600">
                    {{ $memberToken['hash'] }}
                  </div>
                </div>
              </div>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
