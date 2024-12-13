<div wire:ignore.self class="modal fade" id="delete-modal" data-bs-backdrop="static" tabindex="-1" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Eliminar institucion</h5>
                <button type="button" class="btn-close" wire:click='cancel()'></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <p>¿Esta seguro de eliminar la institucion? {{ $institucionNombre }}</p>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click='cancel()'>
                    Cerrar
                </button>
                <button type="button" class="btn btn-primary" wire:click='destroy()'>Si, eliminar</button>
            </div>
        </div>
    </div>
</div>
