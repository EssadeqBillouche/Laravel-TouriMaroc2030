<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - Tripster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <style>
        .dropdown {
            transition: opacity 0.3s ease-in-out, visibility 0s linear;
            opacity: 0;
            visibility: hidden;
        }
        .group:hover .dropdown {
            opacity: 1;
            visibility: visible;
            transition-delay: 0s;
        }
        .group:not(:hover) .dropdown {
            transition-delay: 0.2s;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-relaxed min-h-screen">
<!-- Header with Search Bar -->
<nav class="sticky top-0 z-50 bg-white shadow-lg px-20 py-6 flex justify-between items-center">
    <div class="text-2xl font-bold text-blue-600">Tripster</div>
    <div class="flex space-x-10">
        <a href="#" class="text-gray-700 font-medium hover:text-blue-600 transition-colors">Properties</a>
        <a href="#" class="text-gray-700 font-medium hover:text-blue-600 transition-colors">Attractions</a>
        <a href="#" class="text-gray-700 font-medium hover:text-blue-600 transition-colors">Popular</a>
    </div>
    <!-- User Dropdown -->
    <div class="relative group">
        <button class="focus:outline-none">
            <i class="fas fa-user-circle text-2xl text-blue-600 hover:text-blue-700 transition-colors"></i>
        </button>
        <div class="dropdown absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl" >
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Bookings</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
        </div>
    </div>
</nav>


<!-- Search Form -->
<div class="container mx-auto px-4 py-6">
    <div class="w-full bg-white rounded-2xl shadow-2xl p-4 grid grid-cols-1 gap-4 md:grid-cols-5 md:p-6">
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i> Location
            </label>
            <input type="text" value="Barcelona" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-calendar-alt mr-2 text-blue-600"></i> Check-in
            </label>
            <input type="date" value="2025-03-10" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-calendar-alt mr-2 text-blue-600"></i> Check-out
            </label>
            <input type="date" value="2025-03-15" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-users mr-2 text-blue-600"></i> Guests
            </label>
            <input type="number" min="1" value="2" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex items-end">
            <button class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all transform hover:scale-105">
                Search
            </button>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto p-4 md:p-8 max-w-7xl flex flex-col md:flex-row md:space-x-8">
    <!-- Filters -->
    <div class="w-full md:w-1/4 bg-white rounded-2xl shadow-2xl p-6 mb-6 md:mb-0 h-fit">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Filters</h2>
        <div class="space-y-6">
            <!-- Price Range -->
            <div>
                <h3 class="text-lg font-medium text-gray-700 mb-2">Price Range</h3>
                <input type="range" min="50" max="500" value="200" class="w-full accent-blue-600">
                <div class="flex justify-between text-sm text-gray-600">
                    <span>$50</span>
                    <span>$500</span>
                </div>
            </div>
            <!-- Property Type -->
            <div>
                <h3 class="text-lg font-medium text-gray-700 mb-2">Property Type</h3>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="text-gray-600">Hotel</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="text-gray-600">Villa</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="text-gray-600">Apartment</span>
                    </label>
                </div>
            </div>
            <!-- Amenities -->
            <div>
                <h3 class="text-lg font-medium text-gray-700 mb-2">Amenities</h3>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="text-gray-600">Wi-Fi</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="text-gray-600">Pool</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="text-gray-600">Parking</span>
                    </label>
                </div>
            </div>
        </div>
        <button class="mt-6 w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all transform hover:scale-105">
            Apply Filters
        </button>
    </div>

    <!-- Search Results -->
    <div class="w-full md:w-3/4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Search Results (5 found)</h2>
        <div class="space-y-6">
            <!-- Result 1 -->
            <div class="bg-white rounded-2xl shadow-2xl p-6 flex flex-col sm:flex-row sm:space-x-6">
                <img src="/api/placeholder/200/200" alt="Villa Sunshine" class="w-full sm:w-48 h-48 rounded-lg object-cover mb-4 sm:mb-0">
                <div class="flex-1">
                    <h3 class="text-xl font-medium text-gray-700">Villa Sunshine</h3>
                    <p class="text-sm text-gray-600">Barcelona, Spain</p>
                    <p class="text-sm text-gray-500 mt-1">2 bedrooms • 1 bathroom • Wi-Fi • Pool</p>
                    <div class="mt-2 flex items-center">
                        <i class="fas fa-star text-yellow-400"></i>
                        <span class="ml-1 text-sm text-gray-600">4.8 (120 reviews)</span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800">$150/night</span>
                        <button class="py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all transform hover:scale-105">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Result 2 -->
            <div class="bg-white rounded-2xl shadow-2xl p-6 flex flex-col sm:flex-row sm:space-x-6">
                <img src="/api/placeholder/200/200" alt="City Loft" class="w-full sm:w-48 h-48 rounded-lg object-cover mb-4 sm:mb-0">
                <div class="flex-1">
                    <h3 class="text-xl font-medium text-gray-700">City Loft</h3>
                    <p class="text-sm text-gray-600">Barcelona, Spain</p>
                    <p class="text-sm text-gray-500 mt-1">1 bedroom • 1 bathroom • Wi-Fi</p>
                    <div class="mt-2 flex items-center">
                        <i class="fas fa-star text-yellow-400"></i>
                        <span class="ml-1 text-sm text-gray-600">4.5 (85 reviews)</span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800">$120/night</span>
                        <button class="py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all transform hover:scale-105">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Result 3 (Added for more content) -->
            <div class="bg-white rounded-2xl shadow-2xl p-6 flex flex-col sm:flex-row sm:space-x-6">
                <img src="/api/placeholder/200/200" alt="Beachfront Apartment" class="w-full sm:w-48 h-48 rounded-lg object-cover mb-4 sm:mb-0">
                <div class="flex-1">
                    <h3 class="text-xl font-medium text-gray-700">Beachfront Apartment</h3>
                    <p class="text-sm text-gray-600">Barcelona, Spain</p>
                    <p class="text-sm text-gray-500 mt-1">2 bedrooms • 2 bathrooms • Wi-Fi • Parking</p>
                    <div class="mt-2 flex items-center">
                        <i class="fas fa-star text-yellow-400"></i>
                        <span class="ml-1 text-sm text-gray-600">4.9 (203 reviews)</span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800">$180/night</span>
                        <button class="py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all transform hover:scale-105">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center space-x-2">
            <button class="py-2 px-4 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-all">Previous</button>
            <button class="py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all">1</button>
            <button class="py-2 px-4 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-all">2</button>
            <button class="py-2 px-4 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-all">3</button>
            <button class="py-2 px-4 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-all">Next</button>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white px-4 py-8 sm:px-8 sm:py-12 mt-8">
    <div class="max-w-7xl mx-auto grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 sm:gap-8 mb-8">
        <div>
            <h4 class="text-lg font-semibold mb-4 text-center sm:text-left">About Tripster</h4>
            <ul class="space-y-2 text-center sm:text-left">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Our Story</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-semibold mb-4 text-center sm:text-left">Help</h4>
            <ul class="space-y-2 text-center sm:text-left">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Policies</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-semibold mb-4 text-center sm:text-left">Discover</h4>
            <ul class="space-y-2 text-center sm:text-left">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Destinations</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Travel Guides</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
            </ul>
        </div>
    </div>
    <div class="text-center">
        <div class="space-x-4 mb-4">
            <a href="#" class="text-xl text-gray-400 hover:text-white transition-colors"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-xl text-gray-400 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-xl text-gray-400 hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
        </div>
        <p>© 2025 Tripster. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
