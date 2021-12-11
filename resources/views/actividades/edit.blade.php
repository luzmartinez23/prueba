<x-app-layout>
  <div style="width: 70%" class="mx-auto mt-4">
      <form method="POST" action="{{route('actividades.update', $actividad->id)}}">
        {{method_field('PATCH')}}
        @csrf
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Título de la Actividad
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="titulo" type="text"  placeholder="Ingrese el Título de la Actividad" value="{{$actividad->titulo}}" name="titulo">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                Descripción
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="descripcion" name="descripcion" type="text" placeholder="Ingrese la Descripción" value="{{$actividad->descripcion}}">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                  Materia
                </label>
              </div>
              <div class="md:w-2/3">
                <select name="materia_id" class="form-control" id="">
                  <option value="">--Seleccione una opción--</option>
                  @foreach ($materias as $materia)
                      <option value="{{$materia->id}}" {{ old('materia_id',$actividad->materia_id) == $materia->id ? 
                        'selected' : '' }}>{{$materia->nombre}}</option>
                  @endforeach
              </select> 
              </div>
          </div>
          <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
              <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded" type="submit">
                Guardar Registros
              </button>
            </div>
          </div>
        </form>
  </div>
</x-app-layout>
