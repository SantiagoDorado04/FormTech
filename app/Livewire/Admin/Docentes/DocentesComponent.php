<?php

namespace App\Livewire\Admin\Docentes;

use App\Models\Docente;
use Livewire\Component;
use App\Models\Institucion;

class DocentesComponent extends Component
{

    public $instituciones, $institucionElegida;

    public $identificacion, $nombre, $area, $id_institucion;

    public $docenteId;

    public function mount()
    {
        $this->instituciones = Institucion::all();
    }

    public function render()
    {
        $docentes = Docente::all();
        return view('livewire.admin.docentes.docentes-component', [
            'docentes' => $docentes,
        ]);
    }

    protected function rules()
    {
        return [
            'identificacion' => ['required', 'integer', 'unique:docentes,identificacion,' . $this->docenteId],
            'nombre' => ['required', 'string', 'max:100', 'unique:docentes,nombre,' . $this->docenteId],
            'area' => 'required|string|max:100',
            'institucionElegida' => 'required',
        ];
    }

    public function store()
    {

        $this->validate();

        $docente = new Docente();
        $docente->identificacion = $this->identificacion;
        $docente->nombre = $this->nombre;
        $docente->area = $this->area;
        $docente->id_institucion = $this->institucionElegida;
        $docente->save();

        $this->cancel();
    }

    public function edit($id)
    {
        $docente = Docente::find($id);
        $this->docenteId = $docente->id;

        $this->identificacion = $docente->identificacion;
        $this->nombre = $docente->nombre;
        $this->area = $docente->area;
        $this->institucionElegida = $docente->id_institucion;
    }

    public function show($id)
    {
        $docente = Docente::find($id);
        $this->docenteId = $docente->id;

        $this->identificacion = $docente->identificacion;
        $this->nombre = $docente->nombre;
    }

    public function update()
    {
        $this->validate();

        $docente = Docente::find($this->docenteId);
        $docente->identificacion = $this->identificacion;
        $docente->nombre = $this->nombre;
        $docente->area = $this->area;
        $docente->id_institucion = $this->institucionElegida;
        $docente->update();

        $this->cancel();
    }

    public function delete($id)
    {
        $docente = Docente::find($id);
        $this->docenteId = $docente->id;
    }

    public function destroy()
    {
        Docente::find($this->docenteId)->delete();
        $this->cancel();
    }

    public function resetInputFields()
    {
        $this->identificacion = '';
        $this->nombre = '';
        $this->area = '';
        $this->institucionElegida = '';
        $this->docenteId = '';
    }

    public function cancel()
    {
        $this->resetInputFields();
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatch('close-modal');
    }
}
