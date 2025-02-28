<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - TouriStay </title>
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

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Full Name -->
        <div class="flex flex-col">
            <label for="name" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-user mr-2 text-blue-600"></i> Full Name
            </label>
            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                placeholder="Enter your full name"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
            >
            @error('name')
            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="flex flex-col">
            <label for="email" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-envelope mr-2 text-blue-600"></i> Email Address
            </label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="username"
                placeholder="Enter your email"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
            >
            @error('email')
            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="flex flex-col">
            <label for="password" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-lock mr-2 text-blue-600"></i> Password
            </label>
            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                placeholder="Create a password"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
            >
            @error('password')
            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="flex flex-col">
            <label for="password_confirmation" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-lock mr-2 text-blue-600"></i> Confirm Password
            </label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="Confirm your password"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
            >
            @error('password_confirmation')
            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <!-- Role Selection -->
        <div class="flex flex-col">
            <label for="role" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-users mr-2 text-blue-600"></i> I am a...
            </label>
            <select
                id="role"
                name="role"
                required
                onchange="toggleFields(this.value)"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
            >
                <option value="" disabled selected>Select your role</option>
                <option value="tourist" {{ old('role') === 'tourist' ? 'selected' : '' }}>Tourist</option>
                <option value="owner" {{ old('role') === 'owner' ? 'selected' : '' }}>Property Owner</option>
            </select>
            @error('role')
            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <!-- Common Fields for Both Roles -->
        <div id="common-fields" class="space-y-6 hidden">
            <!-- Phone Number -->
            <div class="flex flex-col">
                <label for="phone_number" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <i class="fas fa-phone mr-2 text-blue-600"></i> Phone Number
                </label>
                <input
                    id="phone_number"
                    type="tel"
                    name="phone_number"
                    value="{{ old('phone_number') }}"
                    placeholder="Enter your phone number"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                >
                @error('phone_number')
                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- Address -->
            <div class="flex flex-col">
                <label for="address" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i> Address
                </label>
                <input
                    id="address"
                    type="text"
                    name="address"
                    value="{{ old('address') }}"
                    placeholder="Enter your address"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                >
                @error('address')
                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- City -->
            <div class="flex flex-col">
                <label for="city" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <i class="fas fa-city mr-2 text-blue-600"></i> City
                </label>
                <input
                    id="city"
                    type="text"
                    name="city"
                    value="{{ old('city') }}"
                    placeholder="Enter your city"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                >
                @error('city')
                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- Country -->
            <div class="flex flex-col">
                <label for="country" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <i class="fas fa-globe mr-2 text-blue-600"></i> Country
                </label>
                <input
                    id="country"
                    type="text"
                    name="country"
                    value="{{ old('country') }}"
                    placeholder="Enter your country"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                >
                @error('country')
                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Property Owner Extra Field -->
        <div id="owner-fields" class="space-y-6 hidden">
            <div class="flex flex-col">
                <label for="company_name" class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <i class="fas fa-building mr-2 text-blue-600"></i> Company Name
                </label>
                <input
                    id="company_name"
                    type="text"
                    name="company_name"
                    value="{{ old('company_name') }}"
                    placeholder="Enter your company name"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                >
                @error('company_name')
                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <button
            type="submit"
            class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all transform hover:scale-105"
        >
            Sign Up
        </button>
    </form>

    <p class="text-center text-sm text-gray-600 mt-6">
        Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700 font-medium">Log in</a>
    </p>
</div>

<!-- JavaScript to Toggle Fields -->
<script>
    function toggleFields(role) {
        const commonFields = document.getElementById('common-fields');
        const ownerFields = document.getElementById('owner-fields');

        if (role === 'tourist' || role === 'owner') {
            commonFields.classList.remove('hidden');
        } else {
            commonFields.classList.add('hidden');
        }

        if (role === 'owner') {
            ownerFields.classList.remove('hidden');
        } else {
            ownerFields.classList.add('hidden');
        }
    }

    // Initialize fields based on old input (if any)
    window.onload = function() {
        const roleSelect = document.getElementById('role');
        if (roleSelect.value) {
            toggleFields(roleSelect.value);
        }
    };
</script>
</body>
</html>
