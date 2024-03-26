<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-primary-button><a href="{{route ('inventory.edit', $inventory)}}"> Edit</a></x-primary-button>

            <form action="{{route ('inventory.destroy', $inventory)}}" method="post"> @method ('delete') @csrf <x-primary-button>Delete</a></x-primary-button></form>
            <x-alert-success>
                {{session('success') }}
            </x-alert-success>
            <div class="bg-green overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                    <table class="table table-hover">
                        <tbody>

                            <tr>
                                <td class="font-bold ">Title  </td>
                                <td>{{ $inventory-> quantity}}</td>
                            </tr>



                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>



</div>
