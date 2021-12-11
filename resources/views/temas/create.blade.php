<x-app-layout>
  <div style="width: 70%" class="mx-auto mt-4">
      <form method="POST" action="{{route('temas.store')}}">
          @csrf
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Título del Tema
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="titulo_tema" type="text"  placeholder="Ingrese el Título de la Actividad" value="{{ old('titulo_tema') }}" name="titulo_tema">
            </div>
            @error('titulo_tema')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                Descripción
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="descripcion" name="descripcion" type="text" placeholder="Ingrese la Descripción" value="{{ old('descripcion') }}">
            </div>
            @error('descripcion')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-2/3">
              {{-- <label for="male" class="">{{ __('Activo') }}</label>
              <input id="" type="radio"  name="sex" value="true"><br>
              <label for="female" class="">{{ __('Inactivo') }}</label>
              <input id="" type="radio"  name="sex" value="false"><br> --}}
              <div class="block">
                <span class="text-gray-700">Radio Buttons</span>
                <div class="mt-2">
                  <div>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio" name="estado" value="activo" />
                      <span class="ml-2">Activo</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio" name="estado" value="desactivo" />
                      <span class="ml-2">Inactivo</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            @error('estado')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
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
                      <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                  @endforeach
              </select> 
              </div>
              @error('materia_id')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
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
