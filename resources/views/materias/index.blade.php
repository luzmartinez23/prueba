<x-app-layout>
    <div class="container mt-4">
      <a href="{{route('materias.create')}}" style="background-color:#007bff;color:white;padding:10px">Nueva Materia</a>
            <table class="min-w-full table-auto mx-auto text-xl">
              <thead class="">
                <tr class="bg-gray-800">
                  <th class="px-3">
                    <span class="text-gray-300">ID</span>
                  </th>
                  <th class="px-3">
                    <span class="text-gray-300">Nombre</span>
                  </th>
                  <th class="px-3">
                    <span class="text-gray-300">Curso</span>
                  </th>
      
                  <th class="px-3">
                    <span class="text-gray-300">Grado</span>
                  </th>
      
                  <th colspan="2" class="px-3">
                    <span class="text-gray-300">Acciones</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-gray-200">
                @foreach ($materias as $materia)
                <tr class="bg-white border-4 border-gray-200">
                  <td class="px-3">
                    {{$materia->id}}
                  </td>
                  <td class="px-3">
                    {{$materia->nombre}}
                  </td>
                  <td class="px-3">
                    {{$materia->curso}}
                  </td>
                  <td class="px-3">
                    {{$materia->grado}}
                  </td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{route('materias.edit',$materia)}}">Editar</a>
                </td>
                <td width=10px>
                    <form action="{{route('materias.destroy',$materia)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
    </div>
</x-app-layout>