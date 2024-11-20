<?php

namespace App\Livewire\Admin\Instituciones;

use App\Models\Institucion;
use Livewire\Component;

class InstitucionesComponent extends Component
{
    public
        $nombre,
        $ubicacion,
        $descripcion;

    public $institucionId;


    public function render()
    {
        $instituciones = Institucion::all(); // Recupera los datos desde la base de datos
        return view('livewire.admin.instituciones.instituciones-component', [
            'instituciones' => $instituciones, // Pasa los datos con el nombre correcto
        ]);
    }



    protected function rules()
    {
        return [
            'nombre' => ['required', 'string', 'max:100', 'unique:institucion,nombre,' . $this->institucionId],
            'ubicacion' => 'required|string|max:100',
            'descripcion' => 'required|string',
        ];
    }


    public function store()
    {
        $this->validate();

        $institucion = new Institucion();
        $institucion->nombre = $this->nombre;
        $institucion->ubicacion = $this->ubicacion;
        $institucion->descripcion = $this->descripcion;
        $institucion->save();

        $this->cancel();
    }

    public function edit($id)
    {
        $institucion = Institucion::find($id);
        $this->institucionId = $institucion->id;

        $this->nombre = $institucion->nombre;
        $this->ubicacion = $institucion->ubicacion;
        $this->descripcion = $institucion->descripcion;
    }

    public function update()
    {
        $this->validate();

        $institucion = Institucion::find($this->institucionId);
        $institucion->nombre = $this->nombre;
        $institucion->ubicacion = $this->ubicacion;
        $institucion->descripcion = $this->descripcion;
        $institucion->update();

        $this->cancel();
    }


    public function show($id)
    {
        $institucion = Institucion::find($id);
        $this->institucionId = $institucion->id;

        $this->nombre = $institucion->nombre;
        $this->ubicacion = $institucion->ubicacion;
        $this->descripcion = $institucion->descripcion;
    }

    public function delete($id)
    {
        $institucion = Institucion::find($id);
        $this->institucionId = $institucion->id;
    }

    public function destroy()
    {
        Institucion::find($this->institucionId)->delete();
        $this->cancel();
    }

    public function resetInputFields()
    {
        $this->nombre = '';
        $this->ubicacion = '';
        $this->descripcion = '';
    }

    public function cancel()
    {
        $this->resetInputFields();
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatch('close-modal');
    }
}
