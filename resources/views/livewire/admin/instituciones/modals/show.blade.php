<div wire:ignore.self class="modal fade" id="show-modal" data-bs-backdrop="static" tabindex="-1" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detalles de la institución</h5>
                <button type="button" class="btn-close" wire:click='cancel()'></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label class="form-label">Nombre:</label>
                    <div>{{ $nombre }}</div>
                </div>
                <div class="row mb-3">
                    <label class="form-label">Ubicación:</label>
                    <div>{{ $ubicacion }}</div>
                </div>
                <div class="row mb-3">
                    <label class="form-label">Descripción:</label>
                    <div>{{ $descripcion }}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click='cancel()'>Cerrar</button>
            </div>

        </div>
    </div>
</div>


