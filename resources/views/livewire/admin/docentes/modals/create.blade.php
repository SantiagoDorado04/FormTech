<div wire:ignore.self class="modal fade" id="create-modal" data-bs-backdrop="static" tabindex="1" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear docente</h5>
                <button type="button" class="btn-close" wire:click='cancel()'></button>
            </div>
            <div class="modal-body">
                <p>Aqui va el contenido del modal</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click='cancel()'>Cerrar</button>
                <button type="button" class="btn btn-primary" wire:click='store()'>Guardar</button>
            </div>
        </div>
    </div>
</div>
