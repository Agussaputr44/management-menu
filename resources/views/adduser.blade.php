@extends('layout.main')

@section('title', 'Tambah User')

@section('content')
    <div class="mx-auto py-6 sm:px-6 lg:px-8 bg-red-500 text-white">
        <form action="/postregister" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nama_user" class="block text-sm font-medium">Nama:</label>
                <input type="text" id="nama_user" name="nama_user"
                    class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded text-black border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500" required>
            </div>
            <div>
                <label for="username" class="block text-sm font-medium">Username:</label>
                <input type="text" id="username" name="username"
                    class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded text-black border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500" required>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium">Email:</label>
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded text-black border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium">Password:</label>
                <input type="password" id="password" name="password"
                    class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded text-black border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500" required>
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium">Konfirmasi Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded text-black border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500" required>
            </div>
            <div>
                <label for="no_hp" class="block text-sm font-medium">Nomor HP:</label>
                <input type="text" id="no_hp" name="no_hp"
                    class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded text-black border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500" required>
            </div>
            <div>
                <label for="wa" class="block text-sm font-medium">WhatsApp:</label>
                <input type="text" id="wa" name="wa"
                    class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded text-black border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500" required>
            </div>
            <div>
                <label for="pin" class="block text-sm font-medium">PIN:</label>
                <input type="text" id="pin" name="pin"
                    class="w-full px-3 py-2 placeholder-gray-400 bg-gray-800 rounded text-black border border-gray-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500" required>
            </div>

            <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">Create
                User</button>
        </form>
    </div>
@endsection
