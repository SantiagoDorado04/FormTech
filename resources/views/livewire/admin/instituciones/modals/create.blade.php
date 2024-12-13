<div wire:ignore.self class="modal fade" id="create-modal" data-bs-backdrop="static" tabindex="-1" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Crear institucion</h5>
                <button type="button" class="btn-close" wire:click='cancel()'></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameLarge" class="form-label">Nombre</label>
                        <input type="text" class="form-control" wire:model='nombre' />
                    </div>
                    @error('nombre')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameLarge" class="form-label">Ubicacion</label>
                        <input type="text" class="form-control" wire:model='ubicacion' />
                    </div>
                    @error('ubicacion')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameLarge" class="form-label">Descripcion</label>
                        <textarea class="form-control" wire:model='descripcion' rose='10'
                            placeholder="Escribir la descripcion de la institucion...">
                        </textarea>
                    </div>
                    @error('nombre')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click='cancel()'>
                    Cerrar
                </button>
                <button type="button" class="btn btn-primary" wire:click='store()'>Guardar</button>
            </div>
        </div>
    </div>
</div>
