<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Activity extends Component
{
    public function render()
    {
        $events = \Spatie\Activitylog\Models\Activity::with('causer')->where('causer_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();

        return view('livewire.dashboard.activity', compact('events'));
    }
}
