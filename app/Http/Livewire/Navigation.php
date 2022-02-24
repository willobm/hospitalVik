<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Especialidad;

class Navigation extends Component
{
    public function render()
    {
        $especialidads = Especialidad::all();

        return view('livewire.navigation',compact('especialidads'));
    }
}
