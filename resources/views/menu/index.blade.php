@extends('layout.main')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Manajemen Menu</h1>
    <a href="{{ route('menu.create') }}" class="btn btn-primary mb-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Menu</a>
    <table class="table-auto w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID Menu</th>
                <th class="px-4 py-2">Nama Menu</th>
                <th class="px-4 py-2">Link Menu</th>
                <th class="px-4 py-2">Icon Menu</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
            <tr class="bg-white border-b">
                <td class="px-4 py-2">{{ $menu->menu_id }}</td>
                <td class="px-4 py-2">{{ $menu->menu_name }}</td>
                <td class="px-4 py-2">{{ $menu->menu_link }}</td>
                <td class="px-4 py-2">{{ $menu->menu_icon }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
