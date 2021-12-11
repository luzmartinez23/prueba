<x-app-layout>
    <div class="container mt-4">
      <a href="{{route('actividades.create')}}" style="background-color:#007bff;color:white;padding:10px">Nueva Actividad</a>
            <table class="min-w-full table-auto mx-auto text-xl">
              <thead class="">
                <tr class="bg-gray-800">
                  <th class="px-3">
                    <span class="text-gray-300">ID</span>
                  </th>
                  <th class="px-3">
                    <span class="text-gray-300">Título</span>
                  </th>
                  <th class="px-3">
                    <span class="text-gray-300">Descripción</span>
                  </th>
      
                  <th class="px-3">
                    <span class="text-gray-300">Materia</span>
                  </th>
      
                  <th colspan="2" class="px-3">
                    <span class="text-gray-300">Acciones</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-gray-200">
                @foreach ($actividades as $actividad)
                <tr class="bg-white border-4 border-gray-200">
                  <td class="px-3">
                    {{$actividad->id}}
                  </td>
                  <td class="px-3">
                    {{$actividad->titulo}}
                  </td>
                  <td class="px-3">
                    {{$actividad->descripcion}}
                  </td>
                  <td class="px-3">
                    {{$actividad->materia->nombre}}
                  </td>
                  <td class="px-3">
                    <a class="" href="{{route('actividades.edit',$actividad)}}">Editar</a>
                  </td>
                  <td class="px-3">
                      <form action="{{route('actividades.destroy',$actividad->id)}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="" onclick="return confirm('Confirmar eliminacion')">Eliminar</button>
                      </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
    </div>
</x-app-layout>