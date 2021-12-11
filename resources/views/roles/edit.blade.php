<x-app-layout>
    <div style="width: 70%" class="mx-auto mt-4">
        <form method="POST" action="{{route('roles.update', $rol->id)}}">
            {{method_field('PATCH')}}
            @csrf
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                  Nombre del Rol
                </label>
              </div>
              <div class="md:w-2/3">
                <input value="{{$rol->nombre_rol}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="nombre_rol" type="text"  placeholder="Ingrese el Nombre del Rol"  name="nombre_rol">
              </div>
            </div>
            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
              <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded" type="submit">
                  Actualizar Registros
                </button>
              </div>
            </div>
          </form>
    </div>
</x-app-layout>
