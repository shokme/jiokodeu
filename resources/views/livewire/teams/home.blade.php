<div>
  <div class="flex">
    <div class="">
      <div class="mb-4 flex items-center justify-between flex-wrap sm:flex-no-wrap">
        <div class="ml-4 mt-2">
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            Create a team
          </h3>
        </div>
      </div>
      <div class="max-w-sm mb-4 bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
          <div class="sm:flex sm:items-center">
            <div class="max-w-xs w-full">
              <label for="TeamName" class="sr-only">Name of your team</label>
              <div class="relative rounded-md shadow-sm">
                <input wire:model="teamName" id="team" name="teamName" class="@error('teamName') border-red-300 placeholder-red-300 focus:shadow-outline-red @enderror form-input block w-full sm:text-sm sm:leading-5"/>
              </div>
            </div>

            <span class="mt-3 inline-flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
              <button wire:click="store" type="button" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5">
                Create
              </button>
            </span>
          </div>
          @error('teamName')<p class="w-full mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>
      </div>
    </div>
    @can('team-owner')
      @livewire('teams.invite')
    @endcan
    @can('team-owner')
      <div class="">
        <div class="mb-4 flex items-center justify-between flex-wrap sm:flex-no-wrap">
          <div class="ml-4 mt-2">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              Change team owner
            </h3>
          </div>
        </div>
        <div class="max-w-sm mb-4 bg-white shadow sm:rounded-lg">
          <div class="px-4 py-5 sm:p-6">
            <div class="sm:flex sm:items-center">
              <div class="max-w-xs w-full">
                <label for="ownerEmail" class="sr-only">Name of your team</label>
                <div class="relative rounded-md shadow-sm">
                  <input wire:model="ownerEmail" id="owner" name="ownerEmail" class="@error('ownerEmail') border-red-300 placeholder-red-300 focus:shadow-outline-red @enderror form-input block w-full sm:text-sm sm:leading-5"/>
                </div>
              </div>
              <span class="mt-3 inline-flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
                <button wire:click="switchOwner" type="button" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5">
                  Switch
                </button>
              </span>
              {{-- TODO: modal to confirm action and also say the account must exist and be part of the current team ! --}}
            </div>
            @error('teamName')<p class="w-full mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
          </div>
        </div>
      </div>
      @can('team-owner')
  </div>
  @if($members)
    <div class="mt-8 mb-4 flex items-center justify-between flex-wrap sm:flex-no-wrap">
      <div class="ml-4 mt-2">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          Members of <span class="text-indigo-400">{{ strtolower(auth()->user()->currentTeam->name) }}</span>
        </h3>
      </div>
    </div>
    <div class="flex flex-col">
      <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full">
            <thead>
            <tr>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Role
              </th>
              @can('team-owner')
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
              @endcan
            </tr>
            </thead>
            <tbody class="bg-white">
            @foreach($members as $member)
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium text-gray-900">
                  {{ $member->name }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                  {{ $member->email }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                  {{ $member->isOwner() ? 'Owner' : 'Member' }}
                </td>
                @can('team-owner')
                  <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                    @if(!$member->isOwner())
                      <button wire:click="deleteMember({{$member->id}})" class="text-red-600 hover:text-red-900">Remove</button>
                    @endif
                  </td>
                @endif
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  @endif
</div>
