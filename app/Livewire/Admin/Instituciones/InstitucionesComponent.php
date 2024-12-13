<?php

namespace App\Livewire\Admin\Instituciones;

use App\Models\Institucion;
use Livewire\Component;

class InstitucionesComponent extends Component
{

    public $nombre, $ubicacion, $descripcion;

    public $institucionId;

    public $institucionNombre;

    public function render()
    {

        $instituciones = Institucion::all();
        return view('livewire.admin.instituciones.instituciones-component', [
            'instituciones' => $instituciones,
        ]);
    }

    protected function rules()
    {
        return [
            'nombre' => ['required', 'string', 'max:100', 'unique:instituciones,nombre,' . $this->institucionId],
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
        $this->institucionNombre = $institucion->nombre;
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
        $this->institucionNombre = '';
    }

    public function cancel()
    {
        $this->resetInputFields();
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatch('close-modal');
    }
}
