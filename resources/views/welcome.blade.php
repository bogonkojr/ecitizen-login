<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCitizen Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">

        <div class="w-full">
            <img src="{{ asset('1.png') }}" alt="eCitizen Logo" class="w-full">
        </div>

        <h2 class="text-center text-xl font-bold text-gray-800 mt-3">One Login</h2>
        <p class="text-center text-gray-600">All Government Services</p>

        <form action="{{ url('/login') }}" method="POST" class="mt-5">
            @csrf
            <label class="block text-sm font-medium text-gray-700">Email address or ID number</label>
            <input type="text" name="email" required class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500">

            <!-- Password Input -->
            <label class="block text-sm font-medium text-gray-700 mt-4">Password</label>
            <div class="relative">
                <input :type="showPassword ? 'text' : 'password'" name="password" required 
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500"
                x-data="{ showPassword: false }">
                <button type="button" class="absolute right-3 top-3 text-gray-600" @click="showPassword = !showPassword">
                    👁
                </button>
            </div>

            <div class="flex justify-between items-center mt-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="text-green-600">
                    <span class="ml-2 text-sm text-gray-600">Remember for 30 days</span>
                </label>
                <a href="#" class="text-blue-600 text-sm">Forgot Password?</a>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg mt-5 hover:bg-green-700">
                Sign In
            </button>

            <div class="flex items-center my-5">
                <div class="flex-1 h-px bg-gray-300"></div>
                <span class="px-3 text-gray-500 text-sm whitespace-nowrap">Or continue with</span>
                <div class="flex-1 h-px bg-gray-300"></div>
            </div>


            <button class="w-full flex items-center justify-center gap-2 bg-gray-200 text-gray-700 py-2 rounded-lg hover:bg-gray-300">
                <span>📱</span> Sign in with Digital ID
            </button>
        </form>
    </div>
</body>
</html>
