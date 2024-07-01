<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
        @if ($errors->any())
            <div class="mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/postregister" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_user" class="block text-gray-700">Name:</label>
                <input type="text" id="nama_user" name="nama_user"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username:</label>
                <input type="text" id="username" name="username"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label for="no_hp" class="block text-gray-700">Phone Number:</label>
                <input type="text" id="no_hp" name="no_hp"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label for="wa" class="block text-gray-700">WhatsApp:</label>
                <input type="text" id="wa" name="wa"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label for="pin" class="block text-gray-700">PIN:</label>
                <input type="text" id="pin" name="pin"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <input type="hidden" id="id_level" name="id_level" value="002">

            <div class="mb-4">
                <button type="submit"
                    class="justify-between w-full px-4 py-2 text-sm
                    font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border
                    border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none
                    focus:shadow-outline-purple text-center">Register</button>
        </form>
        <p class="mt-4 text-center">Already have an account? <a href="/login" class="text-blue-500">Login</a></p>
    </div>
</body>

</html>
