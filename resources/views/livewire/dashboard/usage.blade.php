<div class="mt-8 px-2 py-2 sm:px-6">
  <div class="ml-4">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Usage</h3>
    <p class="mt-1 text-sm leading-5 text-gray-500">A view of your daily usage over the month</p>
  </div>
  @if(count($apiDailyUse) === 0)
    <div class="mt-4 bg-white overflow-hidden shadow rounded-lg">
      <div class="px-4 py-5 sm:p-6 flex justify-center">
        <span class="text-gray-400 text-center">No recent usage.</span>
      </div>
    </div>
  @else
    <div class="flex flex-col">
      <div class="mt-4 -my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full">
            <thead>
            <tr>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Day
              </th>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Call
              </th>
            </tr>
            </thead>
            <tbody>
            @foreach($apiDailyUse as $day => $call)
              <tr class="bg-white">
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                  {{ $day }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                  {{ $call }} @if(is_null(auth()->user()->subscribedToPlan('pay-as-you-go')))/ {{ $apiLimit }}@endif
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @if(!is_null(auth()->user()->currentTeam))
      <div class="flex flex-col">
        <div class="mt-4 -my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
          <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
              <thead>
              <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Day
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Call
                </th>
              </tr>
              </thead>
              <tbody>
              @foreach($apiTeamDailyUse as $day => $value)
                <tr class="bg-white">
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                    {{ $day }}
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                    {{ $value }}
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    @endif
  @endif
</div>