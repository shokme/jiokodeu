<div>
  @livewire('dashboard.apikey', ['user' => $user])
  @livewire('dashboard.balance')
  @livewire('dashboard.usage', ['user' => $user])
</div>