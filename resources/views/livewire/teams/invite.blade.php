<div class="ml-10">
  <div class="mb-4 flex items-center justify-between flex-wrap sm:flex-no-wrap">
    <div class="ml-4 mt-2">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Invite to <span class="text-indigo-400">{{ strtolower(auth()->user()->currentTeam->name) }}</span>
      </h3>
    </div>
  </div>
  <div class="max-w-sm mb-4 bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
      <div class="sm:flex sm:items-center">
        <div class="max-w-xs w-full">
          <label for="TeamName" class="sr-only">Name of your team</label>
          <div class="relative rounded-md shadow-sm">
            <input wire:model="email" id="email" name="email" class="@error('teamName') border-red-300 placeholder-red-300 focus:shadow-outline-red @enderror form-input block w-full sm:text-sm sm:leading-5"/>
          </div>
        </div>

        <span class="mt-3 inline-flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
          <button wire:click="invite" type="button" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5">
            Invite
          </button>
        </span>
      </div>
      @error('teamName')<p class="w-full mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>
  </div>
</div>