<div>

    @include('livewire.admin.docentes.modals.create')

    @section('breadcrumb')
        <span class="text-muted fw-light">Docentes /</span> Listado de docentes
    @endsection

    @section('title', 'Docentes | FormTech')


    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create-modal">Nuevo docente</button>
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
                                <th>Apellidos</th>
                                <th>Institucion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Eugenio</td>
                                <td>Lopez</td>
                                <td>Sena</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        <script>
            Livewire.on('open-create-modal', () => {
                $('#create-modal').modal('show');
            });
        </script>
    @endsection
</div>
