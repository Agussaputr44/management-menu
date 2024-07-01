@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-gray-900 text-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4 text-center">Selamat Datang di Halaman Admin</h1>

            <!-- Tabel Menu -->
            <h4 class="text-2xl font-bold mb-4 text-center">Menu</h4>
            <div class="overflow-x-auto mb-6">
                <table class="table-auto w-full border-collapse border border-gray-800">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="px-4 py-2">ID Menu</th>
                            <th class="px-4 py-2">Level</th>
                            <th class="px-4 py-2">Nama Menu</th>
                            <th class="px-4 py-2">Link Menu</th>
                            <th class="px-4 py-2">Ikon Menu</th>
                            <th class="px-4 py-2">ID Parent</th>
                            <th class="px-4 py-2">Dibuat Oleh</th>
                            <th class="px-4 py-2">Tanggal Dibuat</th>
                            <th class="px-4 py-2">Diperbarui Oleh</th>
                            <th class="px-4 py-2">Tanggal Diperbarui</th>
                            <th class="px-4 py-2">Tanda Hapus</th>
                            <th class="px-4 py-2">Aksi</th> <!-- Kolom untuk aksi -->

                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        @foreach ($menus as $menu)
                            <tr class="text-gray-100">
                                <td class="px-4 py-2">{{ $menu->menu_id }}</td>
                                <td class="px-4 py-2">{{ $menu->id_level }}</td>
                                <td class="px-4 py-2">{{ $menu->menu_name }}</td>
                                <td class="px-4 py-2">{{ $menu->menu_link }}</td>
                                <td class="px-4 py-2">{{ $menu->menu_icon }}</td>
                                <td class="px-4 py-2">{{ $menu->parent_id }}</td>
                                <td class="px-4 py-2">{{ $menu->create_by }}</td>
                                <td class="px-4 py-2">{{ $menu->create_date }}</td>
                                <td class="px-4 py-2">{{ $menu->update_by }}</td>
                                <td class="px-4 py-2">{{ $menu->update_date }}</td>
                                <td class="px-4 py-2">{{ $menu->delete_mark }}</td>
                                <td class="px-4 py-2">
                                    <!-- Tombol Edit -->
                                    <a href="{{ url('/editmenu/' . $menu->menu_id) }}"
                                        class="bg-green-500 hover:bg-green-600 text-white py-1 px-2 rounded">Edit</a>

                                    <!-- Form Delete -->
                                    <form action="{{ url('/deletemenu/' . $menu->menu_id) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this menu?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded ml-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Form Pendaftaran Akun User -->
            <h4 class="text-2xl font-bold mb-4 text-center">Semua Pengguna</h4>

            <!-- Tabel Data Pengguna -->
            <div class="overflow-x-auto">
                <table class="table-auto text-center w-full border-collapse border border-gray-800">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Username</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">No. HP</th>
                            <th class="px-4 py-2">WhatsApp</th>
                            <th class="px-4 py-2">PIN</th>
                            <th class="px-4 py-2">Aksi</th> <!-- Kolom untuk aksi -->
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        @foreach ($users as $user)
                            <tr class="text-gray-100">
                                <td class="px-4 py-2">{{ $user->nama_user }}</td>
                                <td class="px-4 py-2">{{ $user->username }}</td>
                                <td class="px-4 py-2">{{ $user->email }}</td>
                                <td class="px-4 py-2">{{ $user->no_hp }}</td>
                                <td class="px-4 py-2">{{ $user->wa }}</td>
                                <td class="px-4 py-2">{{ $user->pin }}</td>
                                <td class="px-4 py-2">
                                    <!-- Tombol Edit -->
                                    <button
                                        class="bg-green-500 hover:bg-green-600 text-white py-1 px-2 rounded">Edit</button>

                                    <!-- Form Delete -->
                                    <form action="{{ url('/deleteuser/' . $user->id_user) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded ml-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
