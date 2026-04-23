<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tarea;

class MostrarTarea extends Component
{
    public function render()
    {
        return view('livewire.mostrar-tarea', [
            'tareas' => Tarea::where('status', 'pendiente')
                ->orderBy('importancia', 'desc')
                ->orderBy('fechaHora', 'asc')
                ->get(),
        ]);
    }
}
