@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-gray-900 text-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4 text-center">Selamat Datang di Halaman Admin</h1>

            <!-- Form Pendaftaran Akun User -->
            <h4 class="text-2xl font-bold mb-4 text-center">Semua pengguna</h4>

            <!-- Tabel Data Pengguna -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse border border-gray-800">
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
                                    <button class="bg-green-500 hover:bg-green-600 text-white py-1 px-2 rounded">Edit</button>

                                    <!-- Form Delete -->
                                    <form method="POST" class="inline-block">
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
