<div class="w-1/6 px-8 pt-6 pb-8 mb-4">
    <input wire:keydown.debounce.200ms="search($event.target.value)"
    class="@if($suggestions) rounded-t border-b-0 @else shadow rounded focus:outline-none focus:shadow-outline @endif appearance-nonce border w-full py-2 px-3 text-gray-700 leading-tight"
    placeholder="Search"
    id="search"/>

    @if($suggestions)
    <ul class="shadow rounded-b border border-t-0 w-full text-gray-700 leading-tight">
    @foreach(json_decode($suggestions, true)['features'] as $suggestion)
    <li wire:click="$emit('selectsearch', '{{json_encode($suggestion)}}')" class="py-2 px-3 hover:bg-blue-300">{{ $suggestion['properties']['label'] }}</li>
    @endforeach
    </ul>
    @endif
</div>
