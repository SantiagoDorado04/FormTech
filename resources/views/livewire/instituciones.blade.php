<div>
    <button wire:click="create" class="bg-blue-500 text-white px-4 py-2 my-2">Crear Institución</button>

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 rounded">
            {{ session('message') }}
        </div>
    @endif

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instituciones as $institucion)
                <tr>
                    <td>{{ $institucion->nombre }}</td>
                    <td>{{ $institucion->descripcion }}</td>
                    <td>{{ $institucion->ubicacion }}</td>
                    <td>
                        <button wire:click="edit({{ $institucion->id }})" class="bg-yellow-500 text-white px-2 py-1">Editar</button>
                        <button wire:click="delete({{ $institucion->id }})" class="bg-red-500 text-white px-2 py-1">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if($isModalOpen)
        <div class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-6 rounded shadow-md w-1/3">
                <h2 class="text-lg font-bold mb-4">{{ $institucion_id ? 'Editar Institución' : 'Crear Institución' }}</h2>

                <form wire:submit.prevent="store">
                    <div class="mb-4">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" wire:model="nombre" class="border w-full px-2 py-1">
                        @error('nombre') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="descripcion">Descripción</label>
                        <textarea id="descripcion" wire:model="descripcion" class="border w-full px-2 py-1"></textarea>
                        @error('descripcion') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="ubicacion">Ubicación</label>
                        <textarea id="ubicacion" wire:model="ubicacion" class="border w-full px-2 py-1"></textarea>
                        @error('ubicacion') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2">Guardar</button>
                    <button type="button" wire:click="closeModal" class="bg-gray-500 text-white px-4 py-2">Cancelar</button>
                </form>
            </div>
        </div>
    @endif
</div>
