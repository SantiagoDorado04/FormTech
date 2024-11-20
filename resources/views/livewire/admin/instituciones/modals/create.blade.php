<div wire:ignore.self class="modal fade" id="create-modal" data-bs-backdrop="static" tabindex="-1" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear institución</h5>
                <button type="button" class="btn-close" wire:click='cancel()'></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" wire:model='nombre' />
                    @error('nombre')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" wire:model='ubicacion' />
                    @error('ubicacion')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" wire:model='descripcion'></textarea>
                    @error('descripcion')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click='cancel()'>Cerrar</button>
                <button type="button" class="btn btn-primary" wire:click='store()'>Guardar</button>
            </div>
        </div>
    </div>
</div>
