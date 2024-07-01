@extends('layout.main')

@section('title', 'User Tracking')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4 text-white">User Tracking</h1>

            <table class="min-w-full bg-gray-800 text-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-700">ID User</th>
                        <th class="py-2 px-4 border-b border-gray-700">Nama User</th>
                        <th class="py-2 px-4 border-b border-gray-700">Last Login</th>
                        <th class="py-2 px-4 border-b border-gray-700">Created At</th>
                        <th class="py-2 px-4 border-b border-gray-700">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-700">{{ $user->id_user }}</td>
                            <td class="py-2 px-4 border-b border-gray-700">{{ $user->nama_user }}</td>
                            <td class="py-2 px-4 border-b border-gray-700">{{ $user->last_login_at }}</td>
                            <td class="py-2 px-4 border-b border-gray-700">{{ $user->create_date }}</td>
                            <td class="py-2 px-4 border-b border-gray-700">{{ $user->update_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
