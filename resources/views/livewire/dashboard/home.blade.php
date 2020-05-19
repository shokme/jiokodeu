<div>
  @livewire('dashboard.apikey', ['user' => $user])
  @can('team-owner')
    @livewire('dashboard.balance')
    @livewire('dashboard.usage', ['user' => $user])
  @endcan
</div>