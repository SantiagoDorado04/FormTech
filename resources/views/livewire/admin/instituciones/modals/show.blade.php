<div wire:ignore.self class="modal fade" id="show-modal" data-bs-backdrop="static" tabindex="-1" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Detalles de la institucion</h5>
                <button type="button" class="btn-close" wire:click='cancel()'></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameLarge" class="form-label">Nombre: </label>
                        {{ $nombre }}
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameLarge" class="form-label">Ubicacion: </label>
                        {{ $ubicacion }}
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameLarge" class="form-label">Descripcion: </label>
                        {{ $descripcion }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click='cancel()'>
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>
