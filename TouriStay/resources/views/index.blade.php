<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripster - Book Your Stay</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
<body class="bg-gray-100 font-sans leading-relaxed">
<!-- Navigation -->
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

<!-- Hero Section -->
<div class="relative h-[500px] bg-cover bg-center flex flex-col justify-center items-center text-white text-center px-8" style="background-image: url('https://cf.bstatic.com/xdata/images/hotel/max1280x900/421601352.jpg?k=9c3f6f9e297e8332b3f09900084632537368d8bb26302993752ed59da7050745&o=&hp=1')">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative z-10">
        <h1 class="text-5xl font-bold mb-6 text-shadow-lg">Discover Your Perfect Stay</h1>
        <p class="text-xl max-w-xl mb-10">Explore 1,480,086 unique rooms worldwide with Tripster</p>
    </div>
    <!-- Improved Search Bar -->
    <div class="relative z-10 -mt-12 w-full max-w-5xl mx-auto bg-white rounded-2xl shadow-2xl p-6 grid grid-cols-1 md:grid-cols-5 gap-4">
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i> Location
            </label>
            <input type="text" placeholder="Where are you going?" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-calendar-alt mr-2 text-blue-600"></i> Check-in
            </label>
            <input type="date" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-calendar-alt mr-2 text-blue-600"></i> Check-out
            </label>
            <input type="date" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-600 mb-2 flex items-center">
                <i class="fas fa-users mr-2 text-blue-600"></i> Guests
            </label>
            <input type="number" min="1" placeholder="Guests" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <div class="flex items-end">
            <button class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all transform hover:scale-105">
                Search
            </button>
        </div>
    </div>
</div>

<!-- Popular Destinations -->
<section class="max-w-7xl mx-auto px-20 py-16">
    <h2 class="text-3xl font-semibold text-gray-800 text-center mb-10">Popular Destinations</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="relative h-60 rounded-2xl overflow-hidden group">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/421601352.jpg" alt="Spain" class="w-full h-full object-cover group-hover:opacity-90 transition-opacity">
            <div class="absolute bottom-6 left-6 text-white text-xl font-semibold text-shadow-md">Spain</div>
        </div>
        <div class="relative h-60 rounded-2xl overflow-hidden group">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/421601352.jpg" alt="London" class="w-full h-full object-cover group-hover:opacity-90 transition-opacity">
            <div class="absolute bottom-6 left-6 text-white text-xl font-semibold text-shadow-md">London</div>
        </div>
        <div class="relative h-60 rounded-2xl overflow-hidden group">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/421601352.jpg" alt="Croatia" class="w-full h-full object-cover group-hover:opacity-90 transition-opacity">
            <div class="absolute bottom-6 left-6 text-white text-xl font-semibold text-shadow-md">Croatia</div>
        </div>
        <div class="relative h-60 rounded-2xl overflow-hidden group">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/421601352.jpg" alt="Bratislava" class="w-full h-full object-cover group-hover:opacity-90 transition-opacity">
            <div class="absolute bottom-6 left-6 text-white text-xl font-semibold text-shadow-md">Bratislava</div>
        </div>
    </div>
</section>

<!-- Featured Properties -->
<section class="max-w-7xl mx-auto px-20 py-16">
    <h2 class="text-3xl font-semibold text-gray-800 text-center mb-10">Featured Properties</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="relative h-60 rounded-2xl overflow-hidden group">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/421601352.jpg" alt="Villa Sunshine" class="w-full h-full object-cover group-hover:opacity-90 transition-opacity">
            <div class="absolute bottom-6 left-6 text-white text-xl font-semibold text-shadow-md">
                Villa Sunshine
                <small class="block text-sm font-normal mt-1">Barcelona, Spain - $150/night</small>
            </div>
        </div>
        <div class="relative h-60 rounded-2xl overflow-hidden group">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/421601352.jpg" alt="City Loft" class="w-full h-full object-cover group-hover:opacity-90 transition-opacity">
            <div class="absolute bottom-6 left-6 text-white text-xl font-semibold text-shadow-md">
                City Loft
                <small class="block text-sm font-normal mt-1">London, UK - $120/night</small>
            </div>
        </div>
        <div class="relative h-60 rounded-2xl overflow-hidden group">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/421601352.jpg" alt="Beach Retreat" class="w-full h-full object-cover group-hover:opacity-90 transition-opacity">
            <div class="absolute bottom-6 left-6 text-white text-xl font-semibold text-shadow-md">
                Beach Retreat
                <small class="block text-sm font-normal mt-1">Dubrovnik, Croatia - $180/night</small>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="max-w-7xl mx-auto px-20 py-16">
    <h2 class="text-3xl font-semibold text-gray-800 text-center mb-10">Why Choose Tripster?</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition-transform">
            <i class="fas fa-globe text-4xl text-blue-600 mb-4"></i>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Worldwide Options</h3>
            <p class="text-gray-600 text-sm">Access millions of properties across the globe.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition-transform">
            <i class="fas fa-shield-alt text-4xl text-blue-600 mb-4"></i>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Secure Booking</h3>
            <p class="text-gray-600 text-sm">Book with confidence using our secure platform.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition-transform">
            <i class="fas fa-headset text-4xl text-blue-600 mb-4"></i>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">24/7 Support</h3>
            <p class="text-gray-600 text-sm">Our team is here to assist you anytime, anywhere.</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white px-20 py-12">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
        <div>
            <h4 class="text-lg font-semibold mb-4">About Tripster</h4>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Our Story</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-semibold mb-4">Help</h4>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Policies</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-semibold mb-4">Discover</h4>
            <ul class="space-y-2">
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
