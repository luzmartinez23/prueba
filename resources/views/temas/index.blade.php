<x-app-layout>
    <div class="container mt-4">
      <a href="{{route('temas.create')}}" style="background-color:#007bff;color:white;padding:10px">Nuevo Tema</a>
            <table class="min-w-full table-auto mx-auto text-xl">
              <thead class="">
                <tr class="bg-gray-800">
                  <th class="px-3">
                    <span class="text-gray-300">Código</span>
                  </th>
                  <th class="px-3">
                    <span class="text-gray-300">Título</span>
                  </th>
                  <th class="px-3">
                    <span class="text-gray-300">Descripción</span>
                  </th>
      
                  <th class="px-3">
                    <span class="text-gray-300">Estado</span>
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
                @foreach ($temas as $tema)
                <tr class="bg-white border-4 border-gray-200">
                  <td class="px-3">
                    {{$tema->id}}
                  </td>
                  <td class="px-3">
                    {{$tema->titulo_tema}}
                  </td>
                  <td class="px-3">
                    {{$tema->descripcion}}
                  </td>
                  <td class="px-3">
                    <div class="uppercase">{{$tema->estado}}</div>
                  </td>
                  <td class="px-3">
                    {{$tema->materia->nombre}}
                  </td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{route('temas.edit',$tema)}}">Editar</a>
                </td>
                <td width=10px>
                    <form action="{{route('temas.destroy',$tema)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirmar eliminacion')">Eliminar</button>
                    </form>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
    </div>
</x-app-layout>