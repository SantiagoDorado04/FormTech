<div>

    @include('livewire.admin.institucion.modals.create')
    @include('livewire.admin.institucion.modals.delete')
    @include('livewire.admin.institucion.modals.edit')
    @include('livewire.admin.institucion.modals.show')

    @section('breadcrumb')
        <span class="text-muted fw-light">Instituciones /</span> Listado de instituciones
    @endsection

    @section('title', 'Instituciones | FormTech')


    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create-modal">Nueva institucion</button>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="row mt-2">
                <div class="table-responsive">
                    <table class=" table table-stripped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Ubicacion</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instituciones as $institucion)
                            <tr>
                                <td>{{ $institucion->nombre }}</td>
                                <td>{{ $institucion->ubicacion }}</td>
                                <td>{{ $institucion->descripcion }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#show-modal" wire:click='show({{ $institucion->id }})'>Ver</button>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#edit-modal"
                                        wire:click='edit({{ $institucion->id }})'>Editar</button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal"
                                        wire:click='delete({{ $institucion->id }})'>Eliminar</button>
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
