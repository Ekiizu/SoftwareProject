<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Games') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('inventory.create') }}" class="btn-link btn-lg mb-2"><x-primary-button class="mt-8">Add a Game</x-primary-button></a>
            @forelse ($inventories as $inventory)


                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <strong> Title </strong> <a href="{{ route('inventory.show', $inventory) }}">{{ $inventory->title }} </a>
                    </h2>


                    <td class="font-bold-2xl"><strong> Quantity </strong></td>
                        {{$inventory->quantity }}


                    </p>

                </div>
            @empty
            <p>No games</p>
            @endforelse

        </div>
    </div>
</x-app-layout>




