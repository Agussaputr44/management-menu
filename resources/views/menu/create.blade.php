@extends('layout.main')

@section('title', 'Create Menu')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4 text-white">Tambah Menu</h1>

            @if ($errors->any())
                <div class="bg-red-500 p-4 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('menu.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="menu_id" class="block text-white">ID Menu</label>
                    <input type="text" name="menu_id" id="menu_id"
                        class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500"
                        value="{{ old('menu_id') }}">
                </div>

                <div class="mb-4">
                    <label for="id_level" class="block text-white">Level</label>
                    <select name="id_level" id="id_level"
                        class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 text-black rounded border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                        @foreach ($levels as $level)
                            <option value="{{ $level->id_level }}"
                                {{ old('id_level') == $level->id_level ? 'selected' : '' }}>{{ $level->level_name }}
                            </option>
                        @endforeach
                    </select>

                </div>

                <div class="mb-4">
                    <label for="menu_name" class="block text-white">Nama Menu</label>
                    <input type="text" name="menu_name" id="menu_name"
                        class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500"
                        value="{{ old('menu_name') }}">
                </div>

                <div class="mb-4">
                    <label for="menu_link" class="block text-white">Link Menu</label>
                    <input type="text" name="menu_link" id="menu_link"
                        class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500"
                        value="{{ old('menu_link') }}">
                </div>

                <div class="mb-4">
                    <label for="menu_icon" class="block text-white">Ikon Menu</label>
                    <input type="text" name="menu_icon" id="menu_icon"
                        class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500"
                        value="{{ old('menu_icon') }}">
                </div>

                <div class="mb-4">
                    <label for="parent_id" class="block text-white">ID Parent (Opsional)</label>
                    <input type="text" name="parent_id" id="parent_id"
                        class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500"
                        value="{{ old('parent_id') }}">
                </div>





                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
