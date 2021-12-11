<x-app-layout>
    <div class="container mt-4">
      <a href="{{route('roles.create')}}" style="background-color:#007bff;color:white;padding:10px">Nuevo Rol</a>
            <table class="min-w-full table-auto mx-auto text-xl">
              <thead class="">
                <tr class="bg-gray-800">
                  <th class="px-3">
                    <span class="text-gray-300">Código</span>
                  </th>
                  <th class="px-3">
                    <span class="text-gray-300">Nombre Rol</span>
                  </th>
                  <th colspan="2" class="px-3">
                    <span class="text-gray-300">Acciones</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-gray-200">
                @foreach ($roles as $rol)
                <tr class="bg-white border-4 border-gray-200">
                  <td class="px-3">
                    {{$rol->id}}
                  </td>
                  <td class="px-3">
                    {{$rol->nombre_rol}}
                    {{-- {{$loop->iteration}} --}}
                  </td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{route('roles.edit',$rol)}}">Editar</a>
                </td>
                <td width=10px>
                    <form action="{{route('roles.destroy',$rol->id)}}" method="POST">
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