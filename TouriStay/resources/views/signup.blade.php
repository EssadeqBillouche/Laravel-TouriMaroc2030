<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Tripster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans leading-relaxed min-h-screen flex items-center justify-center">
<!-- Navigation -->
<nav class="fixed top-0 z-50 bg-white shadow-lg px-20 py-6 w-full flex justify-between items-center">
    <div class="text-2xl font-bold text-blue-600">Tripster</div>
    <div class="flex space-x-10">
        <a href="#" class="text-gray-700 font-medium hover:text-blue-600 transition-colors">Properties</a>
        <a href="#" class="text-gray-700 font-medium hover:text-blue-600 transition-colors">Attractions</a>
        <a href="#" class="text-gray-700 font-medium hover:text-blue-600 transition-colors">Popular</a>
    </div>
</nav>

<!-- Sign Up Form -->
<div class="max-w-md w-full bg-white rounded-2xl shadow-2xl p-8 mt-24">
    <h2 class="text-3xl font-semibold text-gray-800 text-center mb-6">Join Tripster</h2>
    <p class="text-gray-600 text-center mb-8">Create your account to start exploring</p>
    <form action="#" method="POST" class="space-y-6">
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-user mr-2 text-blue-600"></i> Full Name
            </label>
            <input type="text" placeholder="Enter your full name" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-envelope mr-2 text-blue-600"></i> Email Address
            </label>
            <input type="email" placeholder="Enter your email" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-lock mr-2 text-blue-600"></i> Password
            </label>
            <input type="password" placeholder="Create a password" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-lock mr-2 text-blue-600"></i> Confirm Password
            </label>
            <input type="password" placeholder="Confirm your password" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all transform hover:scale-105">
            Sign Up
        </button>
    </form>
    <p class="text-center text-sm text-gray-600 mt-6">
        Already have an account? <a href="login.html" class="text-blue-600 hover:text-blue-700 font-medium">Log in</a>
    </p>
</div>
</body>
</html>
