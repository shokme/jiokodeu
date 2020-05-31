@props(['tokens', 'type'])
<ul>
  @if(count($tokens) > 0 && $type === 'owner')
    <p class="ml-4 mt-4 text-sm leading-5 text-gray-500">
      Tokens shared between <span class="text-purple-800">{{ $this->teamName }}</span>
    </p>
  @endif
  @if(count($tokens) > 0 && $type === 'members')
    <p class="ml-4 mt-4 text-sm leading-5 text-gray-500">
      Members token of <span class="text-purple-800">{{ $this->teamName }}</span>
    </p>
  @endif
  @foreach($tokens as $token)
    <li wire:key="{{ $loop->index }}" class="mt-2 bg-white shadow overflow-hidden sm:rounded-md">
      <div class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50">
        <div class="px-4 py-4 sm:px-6">
          <div class="flex items-center justify-between">
            <div class="text-sm leading-5 font-medium text-indigo-600">
              {{ $token['hash'] }}
            </div>
            @if(in_array($type, ['owner', 'owned']))
              <div class="ml-2 flex-shrink-0 flex">
                <button wire:click="removeToken({{$token['id']}})" class="px-2 inline-flex">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/>
                  </svg>
                </button>
              </div>
            @endif
          </div>
        </div>
      </div>
    </li>
  @endforeach
</ul>


