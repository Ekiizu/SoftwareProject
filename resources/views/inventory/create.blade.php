<x-app-layout>



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Games') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                <form action="{{ route('inventory.store') }}" method="post" enctype="multipart/form-data">
                    @csrf



                    <x-text-input
                        type="text"
                        name="title"
                        field="title"
                        placeholder="Title"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('title')"></x-text-input>

                    <x-text-input
                        type="text"
                        name="year"
                        field="year"
                        placeholder="Year..."
                        class="w-full mt-6"
                        :value="@old('Year')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="genre"
                        field="genre"
                        placeholder="Genre..."
                        class="w-full mt-6"
                        :value="@old('Genre')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="series"
                        field="series"
                        placeholder="Series..."
                        class="w-full mt-6"
                        :value="@old('Series')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="director"
                        field="director"
                        placeholder="Director..."
                        class="w-full mt-6"
                        :value="@old('Director')"></x-text-input>


                        <x-text-input
                        type="text"
                        name="artists"
                        field="artists"
                        placeholder="Artists..."
                        class="w-full mt-6"
                        :value="@old('Artist')"></x-text-input>






                    <x-textarea
                        name="description"
                        rows="50"
                        field="description"
                        placeholder="Description..."
                        class="w-full mt-6"
                        :value="@old('description')">
                    </x-textarea>




                    <x-file-input
                        type="file"
                        name="game_image"
                        placeholder="game"
                        class="w-full mt-6"
                        field="game_image"
                        :value="@old('game_image')">
                    </x-file-input>
{{--
                    <div class="form-group">
                        <label for="consoles"> <strong> Consoles </strong> <br> </label>
                            @foreach ( $consoles as $console )
                            <input type="checkbox", value="{{$console->id}}" name="consoles[]">
                            {{$console->name}}

                        @endforeach
                    </div> --}}

                    <x-primary-button class="mt-6">Save Game</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

