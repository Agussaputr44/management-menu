<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <form action="/postlogin" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="text" id="email" name="email"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <button type="submit" class=" justify-between w-full px-4 py-2 text-sm font-medium
                leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg
                active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple text-center">Login</button>
        </form>
        <p class="mt-4 text-center">Don't have an account? <a href="/register" class="text-blue-500">Register</a></p>
    </div>
</body>

</html>
