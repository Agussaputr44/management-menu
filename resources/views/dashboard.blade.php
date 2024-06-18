<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <div class="bg-white p-8 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Dashboard</h2>

            @if(session('user'))
            <div class="mb-4">
                <p class="text-lg font-semibold">Hello, {{ session('user')->nama_user }}</p>
                <p class="text-sm text-gray-500">You are logged in as {{ session('user')->username }}</p>
                <p class="text-sm text-gray-500">Email: {{ session('user')->email }}</p>
                <p class="text-sm text-gray-500">Phone: {{ session('user')->no_hp }}</p>
                <p class="text-sm text-gray-500">WhatsApp: {{ session('user')->wa }}</p>
                <p class="text-sm text-gray-500">User Type: {{ session('user')->id_jenis_user }}</p>
                <p class="text-sm text-gray-500">Status: {{ session('user')->status_user }}</p>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit"
                    class="w-full bg-red-500 text-white py-2 rounded hover:bg-red-600">Logout</button>
            </form>
            @endif

        </div>
    </div>
</body>

</html>
