<div>
  <x-api-key/>
  @can('team-owner')
    @livewire('dashboard.balance')
    @livewire('dashboard.usage', ['user' => $user])
  @endcan
</div>