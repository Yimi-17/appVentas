<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Categories') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <div class="flex">
                    <!--Boton nuevo   -->
                    <div>
                        <a href="" class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide" >
                            <i class="fa-solid fa-tag"></i> Nuevo
                        </a>
                    </div>
                </div>
                <!--Tabla lista de items   -->
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-2">
                    <table class="w-full divide-y divide-gray-200 table-auto">
                      <thead class="bg-indigo-500 text-white">
                        <tr class="text-left text-xs font-bold  uppercase">
                          <td scope="col" class="px-6 py-3 cursor-pointer">ID</td>
                          <td scope="col" class="px-6 py-3 cursor-pointer">Nombre</td>
                          <td scope="col" class="px-6 py-3 cursor-pointer">Description</td>
                          <td wire:click="order('number')" scope="col" class="px-6 py-3">Opciones</td>
                        </tr>
                      </thead>
                      <tbody class="divide-y divide-gray-200">
                        @forelse ($categories as $item)
                        <tr class="text-sm font-medium text-gray-900">
                          <td class="px-6 py-4">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                              {{$item->id}}
                            </span>
                          </td>
                          <td class="px-6 py-4">{{$item->name}}</td>
                          <td class="px-6 py-4">{{$item->description}}</td>
                          <td class="px-6 py-4 flex justify-end">
                            {{-- <x-button class="mr-1"><i class="fa-solid fa-pen-to-square"></i></x-button> --}}
                            <a href="" class="mr-1 inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="" method="POST">
                                @csrf
                                @method('delete')
                                <x-danger-button type="submit"><i class="fa-regular fa-trash-can"></i></x-danger-button>
                            </form>
                          </td>
                        </tr>
                        @empty
                            <p>No hay etiquetas</p>
                        @endforelse
                      </tbody>
                    </table>
                </div>
                <div class="px-6 py-3">
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
