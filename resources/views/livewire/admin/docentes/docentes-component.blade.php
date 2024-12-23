<div>

    @include('livewire.admin.docentes.modals.create')
    {{-- @include('livewire.admin.docentes.modals.edit')
    @include('livewire.admin.docentes.modals.show')
    @include('livewire.admin.docentes.modals.delete') --}}

    @section('breadcrumb')
        <span class="text-muted fw-light">Docentes /</span> Listado de docente
    @endsection

    @section('title', 'docentes | FormTech')


    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create-modal">Nueva
                institucion</button>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="row mt-2">
                <div class="table-responsive">
                    <table class=" table table-stripped">
                        <thead>
                            <tr>
                                <th>Identificacion</th>
                                <th>Nombre</th>
                                <th>Area</th>
                                <th>Institucion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($docentes as $docente)
                                <tr>
                                    <td>{{ $docente->identificacion }}</td>
                                    <td>{{ $docente->nombre }}</td>
                                    <td>{{ $docente->area }}</td>
                                    <td>{{ $docente->institucion->nombre }}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#show-modal"
                                            wire:click='show({{ $docente->id }})'>Ver</button>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#edit-modal"
                                            wire:click='edit({{ $docente->id }})'>Editar</button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#delete-modal"
                                            wire:click='delete({{ $docente->id }})'>Eliminar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
